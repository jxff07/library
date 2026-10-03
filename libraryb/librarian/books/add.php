<?php
    require_once '../../includes/header.php';
    require_once '../../includes/db.php';
    session_start();
    
?>

<div class="container">
    
    <?php
        require_once '../../includes/adminnav2.php';
        require_once 'getbooks.php';
    ?>

    <section>
        <p class="display-6">Books Management - Add books</p>
    </section>

    <section>
        <form action="save.php" method="post" style="width: 400px">

            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" name="author" placeholder="Enter Author" required>
                <label for="categoryid" class="form-label">Category:</label>
                    <select name="categoryid" class="form-select" required>

                    <option value="" disabled selected>-- Select Category --</option>

                        <?php foreach ($category as $c){ ?>
                            <option value="<?php echo $c['categoryid']; ?>">
                                <?php echo $c['category']; ?>
                            </option>
                        <?php } ?>

                </select>
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" name="quantity" class="form-control" required value ="<?php echo $resultBooks['quantity'];?>">
                
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Books</button>

        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Back to Books Page</a>
    </section>

</div>


<?php
    require_once '../../includes/footer.php';