<?php  

	require "crud_content.php";	

	$row = query_db_byid((int)$_GET['id'], $conn);

	if ($row) {

		$row = $row[0];

		// include "views/edit_reg.view.php";

		view('edit_reg', array(
								'title' => 'Edit page',
								'row'	=> $row
							));

	} else {

		header('Location: add_record.php');
	}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (!empty($_POST['username']) && !empty($_POST['email'])){

		$username = htmlspecialchars(trim($_POST['username']));
		$email = htmlspecialchars(trim($_POST['email']));

		query_db("UPDATE users SET username = :username, email = :email WHERE id = :id",
				array(
					'username' => $username,
					'email'    => $email,
					'id'	   => (int)$_GET['id']
					), $conn);

		header('Location: index.php');

	} else {

		$status = "Please fill out all boxes";
	}
}