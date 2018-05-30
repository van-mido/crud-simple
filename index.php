<?php 

	require "crud_content.php";

	
	$users = get_db('users', $conn);


	$data = array(

				'title' => 'Very simple CRUD by VanMido',
				'users' =>  $users,					// Pass and extract variable from function
				'name'  => 'CRUD system by VanMido' 		// You can put your name here! 

				);

	view('index', $data);
