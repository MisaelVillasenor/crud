<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","u646610080_villaalejandro","Utd_2020") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'u646610080_villaalejandro';
$databaseUsername = 'u646610080_villaalejandro';
$databasePassword = 'Utd_2020';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
