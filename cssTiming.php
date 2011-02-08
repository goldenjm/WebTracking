<html>
<head></head>
<body>
<script type="text/javascript">
document.styleSheets[0].insertRule('a {color: green}',0);
document.styleSheets[0].insertRule('a:visited {color: red}',0);
var a = document.createElement('a');
a.href = 'http://google.com';
var aStyle = document.defaultView.getComputerStyle(a,"");
if (aStyle.getPropertyValue('color') == red
{
	alert("visited");
}
</script>
</body>
</html>