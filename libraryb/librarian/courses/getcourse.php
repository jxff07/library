<?php
require_once '../../includes/db.php';
$query = "SELECT * FROM courses where courseid = :courseid";

$stmt = $pdo->prepare($query);
$courseid = $_GET['courseid'];
$stmt->bindParam('courseid' , $courseid);

$stmt->execute();
$result = $stmt->fetch();
