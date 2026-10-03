<?php
    require_once '../../includes/header.php';
    session_start();
?>

<div class="container">
    
    <?php
        require_once '../../includes/adminnav2.php';
    ?>

    <?php
        require_once 'getcategory.php';
    ?>

    <section>
        <p class="display-6">Category Management - Edit Course</p>
    </section>

    <section>
        <form action="update.php?categoryid=<?php echo $result['categoryid']; ?>" method="post" style="width: 400px">

            <div class="form-group">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" name="category" placeholder="Enter Category" required value = "<?php echo $result ["category"]; ?> ">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Category</button>

        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Back to Category Page</a>
    </section>

</div>


<?php
    require_once '../../includes/footer.php';
?>