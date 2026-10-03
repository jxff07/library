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
        require_once 'getstudent.php';
    ?>

    <section>
        <p class="display-6">Students Management - Edit Students</p>
    </section>

    <section>
        <form action="update.php?studentid=<?php echo $result['studentid']; ?>" method="post" style="width: 400px">

            <div class="form-group">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="Enter First Name " required value = "<?php echo $result ["fname"]; ?> ">
                <label for="mname" class="form-label">Middle Name</label>
                <input type="text" class="form-control" name="mname" placeholder="Enter Middle Name " required value = "<?php echo $result ["mname"]; ?> ">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="Enter Last Name " required value = "<?php echo $result ["lname"]; ?> ">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="you@email.com " required value = "<?php echo $result ["email"]; ?> ">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Your Address " required value = "<?php echo $result ["address"]; ?> ">

                <label for="contact" class="form-label">Contact</label>
                <input type="text" class="form-control" name="contact" id="contact" pattern="[0-9]{11}" minlength="11" maxlength="11" required value = "<?php echo $result ["contact"]; ?> ">

                
                <label for="courseid" class="form-label">Course</label>
                <select name="courseid" class="form-select">
                           
                        <?php foreach ($courses as $c){ ?>
                        <option value="<?php echo $c['courseid']; ?>" <?php if ($result['courseid'] == $c['courseid']) echo "selected"; ?>>
                        <?php echo $c['coursecode']; ?>
                        </option>
                        <?php }?></select>
               

                <label for="username" class="form-label">UserName</label>
                <input type="text" class="form-control" name="username" placeholder="Enter UserName " required value = "<?php echo $result ["username"]; ?> ">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter Password " required value = "<?php echo $result ["password"]; ?> ">
        
            </div>

            <button type="submit" class="btn btn-primary mt-3">Students Position</button>

        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Back to Students Page</a>
    </section>

</div>


<?php
    require_once '../../includes/footer.php';
?>