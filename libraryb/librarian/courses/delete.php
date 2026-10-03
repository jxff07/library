<?php 
    session_start();
    require_once '../../includes/db.php';

    try {
        

    $courseid = $_GET['courseid'];
    $query = "DELETE FROM courses WHERE courseid= :courseid";
    $stmt = $pdo->prepare($query);
    $stmt->bindparam('courseid', $courseid);
    $stmt->execute();

    $_SESSION['message'] = "Course record succestfully Deleted...";
    header("Location: index.php");
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


