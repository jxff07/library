

<?php 

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $description = $_POST['description'];

    try {

        require_once '../../includes/db.php';

        //check if position already exist
        $check = $pdo->prepare("select count(*) from positions where description = :description");
        $check->bindParam(":description", $description);
        $check->execute();
        $count = $check->fetchColumn();

        if($count > 0){
            $_SESSION['message'] = "Position already exists..";
            header("Location: index.php");
            exit();
        }

        $query = "INSERT INTO positions (description) VALUES (:description)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":description", $description);
        $stmt->execute();

         $_SESSION['message'] = "New Position added Successfully..";
        header("Location: index.php");
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}
