

<?php 

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    
    $description =$_POST['description'];
    $positionid = $_GET['positionid'];
   

    try {

        require_once '../../includes/db.php';
        $query = "update positions set description = :description where positionid = :positionid";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":positionid", $positionid);
        $stmt->execute();

        $_SESSION['message'] = "Positions been update";
        header("Location: index.php");
        exit(); 
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}
