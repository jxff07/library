<?php
    require_once '../../includes/header.php';
    require_once '../../includes/db.php';
    session_start();
    
?>

<div class="container">
    
    <?php
        require_once '../../includes/adminnav2.php';
    ?>

    <?php
        require_once 'getbooks.php';
    ?>

    <section>
        <p class="display-6">Books Management - Edit Books</p>
    </section>

    <section>
        <form action="update.php?bookno=<?php echo $result['bookno']; ?>" method="post" style="width: 400px">

            <div class="form-group">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" name="title" placeholder=" Enter Title" required value = "<?php echo $result ["title"]; ?> ">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" name="author" placeholder=" Enter Auhtor" required value = "<?php echo $result ["author"]; ?> ">
                <label for="categoryid" class="form-label">Category</label>
                <select name="categoryid" class="form-select">
                           
                        <?php foreach ($category as $br){ ?>
                        <option value="<?php echo $br['categoryid']; ?>" <?php if ($result['categoryid'] == $br['categoryid']) echo "selected"; ?>>
                        <?php echo $br['category']; ?>
                        </option>
                        <?php }?></select>
                
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" name="quantity" placeholder=" Enter Quantity" required value = "<?php echo $result ["quantity"]; ?> ">

            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Books</button>

        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Back to Books Page</a>
    </section>

</div>


<?php
    require_once '../../includes/footer.php';
?>