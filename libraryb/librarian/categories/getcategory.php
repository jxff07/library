<?php
require_once '../../includes/db.php';
$query = "SELECT * FROM categories where categoryid = :categoryid";

$stmt = $pdo->prepare($query);
$categoryid = $_GET['categoryid'];
$stmt->bindParam('categoryid' , $categoryid);

$stmt->execute();
$result = $stmt->fetch();
