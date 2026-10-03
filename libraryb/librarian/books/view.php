
<?php

require_once '../../includes/db.php';
$query = "SELECT * FROM books, categories WHERE books.categoryid = categories.categoryid";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();