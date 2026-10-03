
<?php
    require_once 'includes/header.php';
?>

<div class="full-width d-flex justify-content-center align-items-center">
    
    <form action="verifylibrarian.php" method="post" class="rounded p-4 p-sm-3">
        <div class="mb-3">
            <form action="" method="post" class="">

                <div class="mb-3">
                    <p class="text-center text-primary">Library Login</p>
                </div>

                <div class="mb-3">
                  <label for="username" class="form-label">Username:</label>
                  <input type="text" name="username" class="form-control" >
                </div>
                    
                <div class="mb-3">
                  <label for="password" class="form-label">Password:</label>
                  <input type="password" name="password" class="form-control" >
                </div>

                <a href="index.php" class="btn btn-secondary">Back</a>

                <button type="submit" class="btn btn-primary float-end">Login</button>


                

            </form>
        </div>

       
        
    </form>

</div>


<?php
    require_once 'includes/footer.php';
?>


