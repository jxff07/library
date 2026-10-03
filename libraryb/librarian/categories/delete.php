<?php 
session_start();

    require_once('../../includes/db.php');
    $query = "delete from categories where categoryid = :categoryid";
    $stmt = $pdo->prepare($query);

    $categoryid = $_GET['categoryid'];
    $stmt->bindParam(':categoryid', $categoryid);
    $stmt->execute();
    
    $_SESSION['message'] = "Category record succestfully Deleted...";

    header('Location: index.php');