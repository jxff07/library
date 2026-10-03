<?php 

session_start();
    require_once '../../includes/db.php';

    try {
        

    $positionid = $_GET['positionid'];
    $query = "DELETE FROM positions WHERE positionid= :positionid";
    $stmt = $pdo->prepare($query);
    $stmt->bindparam('positionid', $positionid);
    $stmt->execute();
    
    $_SESSION['message'] = "Positions record succestfully Deleted...";
    header("Location: index.php");
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


