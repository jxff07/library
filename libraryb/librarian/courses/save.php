

<?php 

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $coursecode = $_POST['coursecode'];

    try {

        require_once '../../includes/db.php';
        //check if course code already exist
        $check = $pdo->prepare("select count(*) from courses where coursecode = :coursecode");
        $check->bindParam(":coursecode", $coursecode);
        $check->execute();
        $count = $check->fetchColumn();

        if($count > 0){
            $_SESSION['message'] = "Course code already exists..";
            header("Location: index.php");
            exit();
        }

        
        $query = "INSERT INTO courses (coursecode) VALUES (:coursecode)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":coursecode", $coursecode);
        $stmt->execute();

         $_SESSION['message'] = "New Course added Successfully..";
        header("Location: index.php");
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}
