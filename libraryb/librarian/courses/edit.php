<?php
    require_once '../../includes/header.php';
    session_start();
?>

<div class="container">
    
    <?php
        require_once '../../includes/adminnav2.php';
    ?>

    <?php
        require_once 'getcourse.php';
    ?>

    <section>
        <p class="display-6">Course Management - Edit Course</p>
    </section>

    <section>
        <form action="update.php?courseid=<?php echo $result['courseid']; ?>" method="post" style="width: 400px">

            <div class="form-group">
                <label for="coursecode" class="form-label">Course Code</label>
                <input type="text" class="form-control" name="coursecode" placeholder="BS in - Enter course code" required value = "<?php echo $result ["coursecode"]; ?> ">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Course</button>

        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Back to Courses</a>
    </section>

</div>


<?php
    require_once '../../includes/footer.php';
?>