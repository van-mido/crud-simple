<?php 

	function view($path, $data = null) {

		
		if ($data) {

			extract($data);
		}

		$path .= ".view.php";

		include "views/layout.php";		
		
	}

	function valid_email($email) {

	return filter_var($email, FILTER_VALIDATE_EMAIL);
	
}