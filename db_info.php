<?php

$username="antbusk";
$password="Window167764%";
$database="shipryt";

$connection = mysql_connect(':/cloudsql/thinking-leaf-243001:us-central1:shipryt',
  'antbusk', // username
  'Window167764$'      // password
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
