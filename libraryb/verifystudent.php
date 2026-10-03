<?php

    session_start();
    require_once('includes/db.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['username'] ;
    $password = $_POST['password'] ;


    try {

        $query ="select * from students where username = :username and password = :password "; 
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username); 
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $result = $stmt->fetch();
        $rowCount = $stmt->rowCount();

        if($rowCount > 0) {
            $_SESSION['studentid'] = $result['studentid'];
            $_SESSION['fname'] = $result ['fname'];
            $_SESSION['lname'] = $result ['lname'];
            $_SESSION['mname'] = $result ['mname'];
            $_SESSION['studentid'] = $result ['studentid'];

                header("Location: student/index.php");
            exit();
        

        
        } else {
            $_SESSION['message'] = "Invalid Username or Password";
            header("Location: studentlogin.php");
            exit();
        }
    } 

    catch (PDOException $e) {
        echo "Error " . $e->getmessage();
    }
}