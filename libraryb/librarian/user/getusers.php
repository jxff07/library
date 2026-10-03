<?php 

    require_once('../../includes/db.php');
    $query = "select * from users where userid = :userid";
    $stmt = $pdo->prepare($query);

    $userid = $_GET['userid'] ?? null;
    $stmt->bindParam(':userid', $userid);
    $stmt->execute();
    $result = $stmt->fetch();

    $query_pos = "SELECT * FROM positions";
    $stmt_pos = $pdo->prepare($query_pos);
    $stmt_pos->execute();
    $positions = $stmt_pos->fetchAll();
