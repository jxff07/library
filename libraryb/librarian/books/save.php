<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title = $_POST['title'];
    $author = $_POST['author'];
    $categoryid = $_POST['categoryid'];
    $quantity = $_POST['quantity'];
        

    try{
        require_once('../../includes/db.php');
        $query = "insert into books (title,author,categoryid,quantity) values (:title, :author, :categoryid, :quantity)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':categoryid', $categoryid);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->execute();

        $_SESSION['message'] = "New Book added Successfully..";
        header('Location: index.php');


    }
    catch (PDOException $e){
        echo "Error: ".$e->getmessage();

    }

} else {



}