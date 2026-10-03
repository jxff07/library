<?php
session_start();
require_once('../../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $courseid = $_POST['courseid'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    try {
        

       $query = "update students set fname = :fname, mname = :mname, lname = :lname, email = :email, address = :address, contact = :contact, courseid = :courseid, username = :username, password = :password where studentid = :studentid";
        $studentid = $_GET['studentid'];
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
        $stmt->bindParam(':studentid', $studentid);
       
        

        $stmt->execute();

        $_SESSION['message'] = "Students Record updated successfully.";
        header('Location: index.php');
        exit(); 

    } catch (PDOException $e) {
    
        echo "Error: " . $e->getMessage();
    }

} else {

}


require_once('../../includes/db.php');
$query = "SELECT * FROM students";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
?>