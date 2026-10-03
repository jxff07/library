<?php

	$dsn = "mysql:host=localhost;dbname=libraryb_db";
	$username = "root";
	$password = "";

	try{

		$pdo = new PDO($dsn, $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}
	catch(PDOException $e){
		echo "Connection Failed ".$e->getMessage();
	}


