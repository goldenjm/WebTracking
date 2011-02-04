<?php

require_once "/home6/hungryhu/php/DB.php";
require_once "/home6/hungryhu/WTpw.php";
$db =& DB::connect($dsn);
if(PEAR::isError($db)){
	die($db->getMessage());
}
$db->setFetchMode(DB_FETCHMODE_ASSOC);