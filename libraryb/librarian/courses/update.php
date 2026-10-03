

<?php 

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $coursecode = $_POST['coursecode'];
    $courseid = $_GET['courseid'];

    try {

        require_once '../../includes/db.php';
        $query = "update courses set coursecode = :coursecode where courseid = :courseid";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":coursecode", $coursecode);
         $stmt->bindParam(":courseid", $courseid);
        $stmt->execute();

        $_SESSION['message'] = "Course Code been update";
        header("Location: index.php");
        exit();
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}
