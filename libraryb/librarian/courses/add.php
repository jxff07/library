<?php
    require_once '../../includes/header.php';
    session_start();
?>

<div class="container">
    
    <?php
        require_once '../../includes/adminnav2.php';
    ?>

    <section>
        <p class="display-6">Course Management - Add Course</p>
    </section>

    <section>
        <form action="save.php" method="post" style="width: 400px">

            <div class="form-group">
                <label for="coursecode" class="form-label">Course Code</label>
                <input type="text" class="form-control" name="coursecode" placeholder="BS in - Enter course code" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Course</button>

        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Back to Courses</a>
    </section>

</div>


<?php
    require_once '../../includes/footer.php';
?>