<?php
    require_once '../../includes/header.php';
    session_start();
?>

<div class="container">
    
    <?php
        require_once '../../includes/adminnav2.php';
    ?>

    <?php
        require_once 'getposition.php';
    ?>

    <section>
        <p class="display-6">Position Management - Edit Posiiton</p>
    </section>

    <section>
        <form action="update.php?positionid=<?php echo $result['positionid']; ?>" method="post" style="width: 400px">

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" placeholder="Enter Description" required value = "<?php echo $result ["description"]; ?> ">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Position</button>

        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Back to Position</a>
    </section>

</div>


<?php
    require_once '../../includes/footer.php';
?>