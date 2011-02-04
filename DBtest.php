<?php

require_once "db.php";
$output = $db->getAll("SELECT * FROM test"); //returns an array of associative arrays with items like $output[0]['name']
//$output = $db->query("INSERT INTO ...");
//$output = $db->getOne("SELECT name FROM table WHERE id=?",array($id)); //Gets a single value, ?'s get replaced by values from array (safely)
//$output = $db->getRow("SELECT * FROM table WHERE id=2"); // Gets a single row as an associative array
print_r($output);