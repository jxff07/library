<?php
session_start();
require_once('../../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $positionid = $_POST['positionid'];
    try {
        

        $query = "update users set fname = :fname, lname = :lname, username = :username, password = :password, positionid = :positionid where userid = :userid";

        $userid = $_GET['userid'];
        $stmt = $pdo->prepare($query);

    
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':positionid', $positionid);
        $stmt->bindParam(':userid', $userid);

        $stmt->execute();

        $_SESSION['message'] = "User Record updated successfully.";
        header('Location: index.php');
        exit(); 

    } catch (PDOException $e) {
    
        echo "Error: " . $e->getMessage();
    }

} else {

}


require_once('../../includes/db.php');
$query = "SELECT * FROM users";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
?>