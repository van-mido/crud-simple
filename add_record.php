<?php 

	require "crud_content.php";

	$data = array();

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		if (empty($_POST['username']) || empty($_POST['email']) || !valid_email($_POST['email'])) {

			$data['status'] = "Please fill out the boxes and valid email!";

		} else {

			$username = trim(htmlspecialchars($_POST['username']));
			$email = trim(htmlspecialchars($_POST['email']));

			query_db("INSERT INTO users (username, email) VALUES (:username, :email)", 
					array('username' => $username,
						  'email'	 => $email),
						   $conn);

			$data['status'] = "Thank you for registered!";
		}

	}

	// For title name

	$data['title'] = 'Add Record';

	view('add_record', $data);
