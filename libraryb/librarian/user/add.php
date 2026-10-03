<?php
    require_once '../../includes/header.php';
    require_once '../../includes/db.php';
    
    session_start();

    
?>
<div class="container">
    
    <?php
        require_once '../../includes/adminnav2.php';
        require_once 'getusers.php';
    ?>

    <section>
        <p class="display-6">Users Management - Add Users</p>
    </section>

    <section>
        <form action="save.php" method="post" style="width: 400px">

            <div class="form-group">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" name="username" placeholder="Enter UserName" required>
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>

                <label for="positionid" class="form-label">positions:</label>
                     <select name="positionid" class="form-select" required>

                    <option value="" disabled selected>-- Select Positons --</option>

                        <?php foreach ($positions as $c){ ?>
                            <option value="<?php echo $c['positionid']; ?>">
                                <?php echo $c['description']; ?>
                            </option>
                        <?php } ?>

                    </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Users</button>

        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Back to Users Page</a>
    </section>

</div>


<?php
    require_once '../../includes/footer.php';
?>