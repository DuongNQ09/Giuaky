<?php
	require('model/connect.php');
	$db = new Database;
	$db->connect();

	$db->closeDatabase();
?>