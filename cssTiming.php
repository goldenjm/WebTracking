<? 
$s1 = 'rgb(1,2,3)'; //style 1
$s2 = 'rgb(88,88,88)'; //style 2
?>
<html>
<head><style>h1 {background-color: #888888;} a {color: <? echo($s1) ?>; } a:visited{color: <? echo($s2) ?>;} </style></head>
<body>
<h1>Test</h1>

<a href="http://google.com" id="link1">Google</a>
<a href="http://fakesite.com" id="link2">fakesite.com</a>
<div id="results1">hi1</div><br><div id="results2">hi2</div>
</body>
</html>
<script type="text/javascript">
function e(x) {return document.getElementById(x);}
IE = true;
if (document.defaultView)
{
	IE = false;
}

var a = document.createElement('a');
a.href = 'http://google.com';
a.innerHTML = "Click Here!";
var b = document.createElement('a');
b.href = 'http://fdasadfsadfsa.com';
b.innerHTML = "Click Here2!";


if (IE)
{
	var aStyle = a.currentStyle.color;
	var bStyle = b.currentStyle.color
} else 
{
	var aStyle = document.defaultView.getComputedStyle(a,null).getPropertyValue('color');
	var bStyle = document.defaultView.getComputedStyle(b,null).getPropertyValue('color');
}

e('results1').innerHTML = aStyle;
e('results2').innerHTML = bStyle;
link1 = e('link1');
link2 = e('link2');
</script>