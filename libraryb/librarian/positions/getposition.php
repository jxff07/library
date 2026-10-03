<?php
require_once '../../includes/db.php';
$query = "SELECT * FROM positions where positionid = :positionid";

$stmt = $pdo->prepare($query);
$positionid= $_GET['positionid'];
$stmt->bindParam('positionid' , $positionid);

$stmt->execute();
$result = $stmt->fetch();
