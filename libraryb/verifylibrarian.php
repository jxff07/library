<?php

	session_start();

	require_once 'includes/db.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		// pass the post value to a variable

		$username = $_POST['username'];
		$password = $_POST['password'];

		// check the variable to the database

		try{

			$query = "select * from users,positions where username = :username and password = :password and users.positionid = positions.positionid";

			$stmt = $pdo->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':password', $password);

			$stmt->execute();

			$result = $stmt->fetch();

			$rowCount = $stmt->rowCount();

			//check if user is exist

			if($rowCount >0){

				//add session variable to store records
				$_SESSION['fname'] = $result['fname'];
				$_SESSION['lname'] = $result['lname'];
				$_SESSION['position'] = $result['description'];

				// redirect the page to the librarian page
				header("Location: librarian/index.php");



			}
			else {

					header("Location: librarianlogin.php");


			}





		}
		catch(PDOException $e){
			echo "Error: ". $e->getMessage();

		}






	}
	else {


	}



