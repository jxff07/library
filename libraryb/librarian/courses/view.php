<?php
require_once '../../includes/db.php';
$query = "SELECT * FROM courses";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
