<?php
require_once '../../includes/db.php';
$query = "SELECT userid,fname,lname,username from users, positions where users.positionid = positions.positionid";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
