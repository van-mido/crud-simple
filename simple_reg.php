<?php  

	
	require "crud_content.php";


	$result = query_db_byid((int)$_GET['id'], $conn);


	if ($result) {

		$result = $result[0]; // For array index

		// include "views/simple_reg.view.php";

		view('simple_reg', array(
								'title' => 'Show reg',
								'result' => $result
								));

	} else {

		header("Location: index.php");
	} 


	

