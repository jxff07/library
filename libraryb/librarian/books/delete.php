<?php 
session_start();

    require_once('../../includes/db.php');
    $query = "delete from books where bookno = :bookno";
    $stmt = $pdo->prepare($query);

    $bookno = $_GET['bookno'];
    $stmt->bindParam(':bookno', $bookno);
    $stmt->execute();
    
    $_SESSION['message'] = "Book record succestfully Deleted...";

    header('Location: index.php');