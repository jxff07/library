<?php
require_once '../../includes/db.php';
$query = "SELECT * FROM positions";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
