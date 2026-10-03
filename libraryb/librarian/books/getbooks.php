<?php 

    require_once('../../includes/db.php');
    $query = "select * from books where bookno = :bookno";
    $stmt = $pdo->prepare($query);

    $bookno = $_GET['bookno'] ?? null;
    $stmt->bindParam(':bookno', $bookno);
    $stmt->execute();
    $result = $stmt->fetch();

    $query_cat = "SELECT * FROM categories";
    $stmt_cat = $pdo->prepare($query_cat);
    $stmt_cat->execute();
    $category = $stmt_cat->fetchAll(PDO::FETCH_ASSOC);