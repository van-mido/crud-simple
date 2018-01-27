<?php 

	require "crud_content.php";

	
	$users = get_db('users', $conn);


	view('index', array(

			'title' => 'Very simple CRUD by ',
			'users' =>  $users,			// Pass and extract variable from function
			'name'  => 'Ricardo Vargas'

		));
