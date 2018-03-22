<?php 

	// Credentials

	$config = array(
					'DB_USER' => 'rvargas',  /* mysql -u 'youruser' */
					'DB_PASS' => 'admin',	/* mysql -p 'password' */
					'DB_NAME' => 'crud_simple'
					);

	function connect($config) {

			try {
				
				$conn = new PDO('mysql:host=localhost;dbname=' . $config['DB_NAME'], $config['DB_USER'], $config['DB_PASS']);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				return $conn;	

			} catch (Exception $e) {
				
				return false;
			}
	}


	// Function only for show data
	
	function get_db($table, $conn){

		try {

			$results = $conn->query("SELECT * FROM $table ORDER BY id");

			return ($results->rowCount() > 0) ? $results : false;
			
		} catch (Exception $e) {

			return false;
			
		}
		

	}

	function query_db($query, $bindings, $conn) {

		$stmt = $conn->prepare($query);
		$stmt->execute($bindings);

		return ($stmt->rowCount() > 0) ? $stmt :  false;

	}

	//Function that show you unique user

	function query_db_byid($id, $conn) {

		$query = query_db("SELECT * FROM users WHERE id = :id LIMIT 1", 
						  array( 'id' => $id),
						  $conn);


		if ($query) return $query->fetchAll();

	}