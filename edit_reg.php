<?php  

	require "crud_content.php";	



	$row = query_db_byid((int)$_GET['id'], $conn);

	if ($row) {

		$row = $row[0];


		$data = array(

					'title' => 'Edit Page',
					'row'	=> $row
					);

		view('edit_reg', $data);

	} else {

		// Redirect if $row is not true

		header('Location: add_record.php');
	}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (!empty($_POST['username']) && !empty($_POST['email']) && valid_email($_POST['email'])){

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

		$data['status'] = "Please fill out all boxes and valid email";
	}
}