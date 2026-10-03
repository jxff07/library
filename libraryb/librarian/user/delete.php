<?php 
session_start();

    require_once('../../includes/db.php');
    $query = "delete from users where userid = :userid";
    $stmt = $pdo->prepare($query);

    $userid = $_GET['userid'];
    $stmt->bindParam(':userid', $userid);
    $stmt->execute();
    
    $_SESSION['message'] = "User record succestfully Deleted...";

    header('Location: index.php');