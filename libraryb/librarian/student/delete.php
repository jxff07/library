<?php 
session_start();

    require_once('../../includes/db.php');
    $query = "delete from students where studentid = :studentid";
    $stmt = $pdo->prepare($query);

    $studentid = $_GET['studentid'];
    $stmt->bindParam(':studentid', $studentid);
    $stmt->execute();
    
    $_SESSION['message'] = "Student record succestfully Deleted...";

    header('Location: index.php');