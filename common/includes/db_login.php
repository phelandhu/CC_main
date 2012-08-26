<?php
	$db_host = 'ccpbtest.db.9292011.hostedresource.com';
	$db_database = 'ccpbtest';
	$db_username = 'ccpbtest';
	$db_password = 'Dodger36';
	if(isset($dataConn) && $dataConn == true) {
		if($useMysql == true) {
			$connection = mysql_connect($db_host, $db_username, $db_password);
			if(!$connection) {
				die("Could not connect to the datebase: " . mysql_error());
			}
			// Select the database
			$db_select = mysql_select_db($db_database);
			if(!$db_select) {
				die("Could not select the database: " . mysql_error());
			}
		} elseif($useMysqli) {
			$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
		}
	}
?>