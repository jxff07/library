<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $categoryid = $_POST['categoryid'];
    $quantity = $_POST['quantity'];
    

    try {
        require_once('../../includes/db.php');

    
        $query = "update books set title = :title, author = :author, categoryid = :categoryid, quantity = :quantity  where bookno = :bookno";

        $bookno = $_GET['bookno'];
        $stmt = $pdo->prepare($query);

    
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':categoryid', $categoryid);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':bookno', $bookno);

        $stmt->execute();

        $_SESSION['message'] = "Book Record updated successfully.";
        header('Location: index.php');
        exit(); 

    } catch (PDOException $e) {
    
        echo "Error: " . $e->getMessage();
    }

}