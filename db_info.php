<?php

$username="y6dU5Zv0wc";
$password="tKnXT7Eat6";
$database="y6dU5Zv0wc";

$connection = mysql_connect('remotemysql.com',
  'y6dU5Zv0wc', // username
  'tKnXT7Eat6'      // password
  );
if (!$connection) {
  die('Not connected : ' . mysql_error());
}


// Set the active MySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

?>
