<html><head></head><body>
<? 
print_r($_SERVER['HTTP_USER_AGENT']);
print_r($_SERVER['HTTP_ACCEPT']);
?>
<br>
<div id='a'> </div>

<applet width="50" height="50" code = "fontList.fontReader.class" archive = "fontList.jar" name = "javaApp" >
Sends font list
</applet>



<script type="text/javascript">
function e(x) {return document.getElementById(x);}
var width = screen.width
var height = screen.height
var timezone = new Date().getTimezoneOffset()
var params = "width="+width+"&height="+height+"&timezone="+timezone;
var plugins = navigator.plugins;
var plugin_length = navigator.plugins.length;


var http = new XMLHttpRequest();
http.open("POST", "sbd.php", true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
http.setRequestHeader("Content-length", params.length);
http.setRequestHeader("Connection", "close");
http.onreadystatechange = function() {//Call a function when the state changes.
	if(http.readyState == 4 && http.status == 200) {
		e('a').innerHTML = http.responseText;
		//alert(http.responseText);

	}
}
http.send(params);

		document.writeln("<div>");
		document.writeln("<table border='1'>");
		for(var i = 0; i < plugin_length; i++){
			document.writeln("<tr>");
			
			document.writeln("<td>");
			document.writeln(plugins[i].name);
			document.writeln("</td>");
			
			document.writeln("<td>");
			document.writeln(plugins[i].filename);
			document.writeln("</td>");
			
			document.writeln("<td>");
			document.writeln(plugins[i].description);
			document.writeln("</td>");
			
			document.writeln("<td>");
			document.writeln(plugins[i].version);
			document.writeln("</td>");
			
			document.writeln("</tr>");
		}
		document.writeln("</table");
		document.writeln("</div>");





</script>


<div>
<script type="text/javascript">
var fonts = new Array();


function load_java_line(hax){
	fonts.push(hax);	
}

function java_ouptut(){
	document.writeln("<div>");
	document.writeln("<table border='1'>");
	for(var i = 0; i < fonts.length; i++){
		document.writeln("<tr>");
			
		document.writeln("<td>");
		document.writeln(fonts[i]);
		document.writeln("</td>");
			
		document.writeln("</tr>");
	}
	document.writeln("</table");
	document.writeln("</div>");
	
</script>
</div>

</body></html>