<?php

require_once "/home6/hungryhu/php/DB.php";
echo ("after including db");
require_once "/home6/hungryhu/WTpw.php";

echo ($dsn);

$db =& DB::connect($dsn);
if(PEAR::isError($db)){
	die($db->getMessage());
}
$db->setFetchMode(DB_FETCHMODE_ASSOC);

echo ("hello2... <br>");
$output = $db->getAll("SELECT * FROM test");
print_r($output);