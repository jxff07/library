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
        require_once 'getusers.php';
        ?>

    <section>
        <p class="display-6">Users Management - Edit Users</p>
    </section>

    <section>
        <form action="update.php?userid=<?php echo $result['userid']; ?>" method="post" style="width: 400px">

            <div class="form-group">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="Enter First Name " required value = "<?php echo $result ["fname"]; ?> ">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="Enter Last Name " required value = "<?php echo $result ["lname"]; ?> ">
                <label for="username" class="form-label">UserName</label>
                <input type="text" class="form-control" name="username" placeholder="Enter UserName " required value = "<?php echo $result ["username"]; ?> ">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter Password " required value = "<?php echo $result ["password"]; ?> ">
                <label for="positionid" class="form-label">Position</label>
                <select name="positionid" class="form-select">
                           
                        <?php foreach ($positions as $cr){ ?>
                        <option value="<?php echo $cr['positionid']; ?>" <?php if ($result['positionid'] == $cr['positionid']) echo "selected"; ?>>
                        <?php echo $cr['description']; ?>
                        </option>
                        <?php }?></select>

                
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Users</button>

        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Back to Users Page</a>
    </section>

</div>


<?php
    require_once '../../includes/footer.php';
?>