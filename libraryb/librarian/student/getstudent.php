<?php 

    require_once('../../includes/db.php');
    
    $query = "select * from students where studentid = :studentid";
    $stmt = $pdo->prepare($query);

    $studentid = $_GET['studentid'] ?? null;
    $stmt->bindParam(':studentid', $studentid);
    $stmt->execute();
    $result = $stmt->fetch();

    $query_cou = "SELECT * FROM courses";
    $stmt_cou = $pdo->prepare($query_cou);
    $stmt_cou->execute();
    $courses = $stmt_cou->fetchAll();