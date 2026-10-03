<?php
require_once '../../includes/db.php';
$query = "SELECT * FROM categories";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
