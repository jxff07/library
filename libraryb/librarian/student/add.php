<?php
    require_once '../../includes/header.php';
    require_once '../../includes/db.php';
    session_start();
    
    
?>
<div class="container">
    
    <?php
        require_once '../../includes/adminnav2.php';
        require_once 'getstudent.php';
      
    ?>

    <section>
        <p class="display-6">Students Management - Add Students</p>
    </section>

    <section>
        <form action="save.php" method="post" style="width: 400px">

            <div class="form-group">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
                <label for="mname" class="form-label">Middle Name</label>
                <input type="text" class="form-control" name="mname" placeholder="Enter Middle Name" required>
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="you@email.com" required>
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Your Address" required>
                <label for="contact" class="form-label">Contact</label>
                <input type="tel" id="contact" class="form-control" name="contact" 
                    placeholder="09171234567" 
                    maxlength="11" 
                    onkeypress="return isNumberKey(event)"
                    oninput="this.value = this.value.replace(/[^0-9]/, '');"
                    onfocus="if(this.value==''){ this.value='09'; }"
                    required>
                
                <label for="courseid" class="form-label">Course</label>
                <select name="courseid" class="form-select" required>

                    <option value="" disabled selected>-- Select Course --</option>

                        <?php foreach ($courses as $c){ ?>
                            <option value="<?php echo $c['courseid']; ?>">
                                <?php echo $c['coursecode']; ?>
                            </option>
                        <?php } ?>

                </select>

                 <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" name="username" placeholder="Enter UserName" required>
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Students</button>

        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Back to Students Page</a>
    </section>

</div>


<?php
    require_once '../../includes/footer.php';
?>