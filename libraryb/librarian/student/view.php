<?php 

    require_once('../../includes/db.php');
    $query = " select * from students,courses where students.courseid = courses.courseid order by studentid";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
