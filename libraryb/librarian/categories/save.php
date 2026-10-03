<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $category = $_POST['category'];
    

    try{
        require_once('../../includes/db.php');

        //check if category already exist
        $check = $pdo->prepare("select count(*) from categories where category = :category");
        $check->bindParam(":category", $category);
        $check->execute();
        $count = $check->fetchColumn();

        if($count > 0){
            $_SESSION['message'] = "Category already exists..";
            header("Location: index.php");
            exit();
        }
        
        $query = "insert into categories (category) values (:category)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':category', $category);
        $stmt->execute();

        $_SESSION['message'] = "New Category added Successfully..";
        header('Location: index.php');


    }
    catch (PDOException $e){
        echo "Error: ".$e->getmessage();

    }

} else {



}