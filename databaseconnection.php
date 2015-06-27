<?php
	include_once "database_credentials.php";
	$con = mysql_connect("localhost", $db_username, $db_password);
	mysql_select_db($database);

	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	// Create table
	mysql_select_db($database, $con);
?>
