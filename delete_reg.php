<?php 

	require "crud_content.php";

	if (isset($_GET['id'])) {

		// $id = $_GET['id'];

		$qDel = query_db("DELETE FROM users WHERE id = :id LIMIT 1",
						array('id' => (int)$_GET['id']),	
						$conn);

		if ($qDel) {

			header('Location: index.php');
		}
	
	} else {

		header('Location: index.php');
	} 