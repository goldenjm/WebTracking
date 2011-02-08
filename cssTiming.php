<html>
<head><style>h1 {background-color: #888888;} a {color: rgb(1,2,3);} a:visited{color: rgb(88,88,88);} </style></head>
<body>
<h1>Test</h1>
<script type="text/javascript">
var a = document.createElement('a');
a.href = 'http://google.com';
var aStyle = document.defaultView.getComputedStyle('a',null);
if (aStyle.getPropertyValue('color') == red)
{
	alert("visited");
}
</script>
<a href="http://google.com" id="link1">Google</a>
<a href="http://fakesite.com" id="link2">fakesite.com</a>
</body>
</html>