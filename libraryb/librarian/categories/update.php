<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $category = $_POST['category'];
    
    try {
        require_once('../../includes/db.php');

       
        $query = "update categories set category = :category where categoryid = :categoryid";

        $categoryid = $_GET['categoryid'];
        $stmt = $pdo->prepare($query);

     
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':categoryid', $categoryid);

        $stmt->execute();

         $_SESSION['message'] = "Course Code been update";
        header("Location: index.php");
        exit();

    } catch (PDOException $e) {
      
        echo "Error: " . $e->getMessage();
    }

}