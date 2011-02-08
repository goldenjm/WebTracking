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
<div id="results">hi</div>
</body>
</html>
<script type="text/javascript">
var a = document.createElement('a');
a.href = 'http://google.com';
a.innerHTML = "Click Here!";
var aStyle = document.defaultView.getComputedStyle(a,null).getPropertyValue('color');
document.getElementById("results").innerHTML = aStyle;
</script>