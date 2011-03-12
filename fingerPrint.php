<? 
print_r($_SERVER['HTTP_USER_AGENT']);
print_r($_SERVER['HTTP_ACCEPT']);
?>
<html><head></head><body>
<script type="text/javascript">
var params = "lorem=ipsum&name=binny";
http.open("POST", "sbd.php, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
http.setRequestHeader("Content-length", params.length);
http.setRequestHeader("Connection", "close");
http.onreadystatechange = function() {//Call a function when the state changes.
	if(http.readyState == 4 && http.status == 200) {
		alert(http.responseText);
	}
}
http.send(params);
</script>
</body></html>