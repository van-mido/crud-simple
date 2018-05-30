<?php
	
	
	require "functions.php";
	require "db.php";

	$conn = connect($config);

	if (!$conn) die("Don't be Connected, check your credentials!\n");