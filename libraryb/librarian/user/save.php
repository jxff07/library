<?php

session_start();

require_once('../../includes/db.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $positionid = $_POST['positionid'];

    try{

        $query = "insert into users (fname,lname,username,password,positionid) values (:fname, :lname, :username, :password, :positionid)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':positionid', $positionid);
        $stmt->execute();

        $_SESSION['message'] = "New User added Successfully..";
        header('Location: index.php');


    }
    catch (PDOException $e){
        echo "Error: ".$e->getmessage();

    }

} 