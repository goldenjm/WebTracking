<?php

require_once "DB.php";
require_once "../../WTpw.php";
$db =& DB::connect($dsn);
if(PEAR::isError($db)){
	die($db->getMessage());
}
$db->setFetchMode(DB_FETCHMODE_ASSOC);

$output = $db->getAll("SELECT * FROM test");
print_r($output);