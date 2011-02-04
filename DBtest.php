<?php

require_once "db.php";
$output = $db->getAll("SELECT * FROM test");
print_r($output);