<?php

session_start();

require_once('../../includes/db.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $courseid = $_POST['courseid'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    

    try{

        $query = "insert into students (fname,mname,lname,email,address,contact,courseid,username,password) values (:fname, :mname, :lname, :email, :address, :contact, :courseid, :username, :password)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':mname', $mname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':courseid', $courseid);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $_SESSION['message'] = "New Students added Successfully..";
        header('Location: index.php');


    }
    catch (PDOException $e){
        echo "Error: ".$e->getmessage();

    }

} 