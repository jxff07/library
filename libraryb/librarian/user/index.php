
<?php
    require_once '../../includes/header.php';
    session_start();

?>

	<div class="container">

		<?php require_once '../../includes/adminnav2.php'; ?>
		
		<section> 
			<p class="display-6">Users Page</p>

            <?php
                if(isset($_SESSION['message'])){

        ?>

                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['message']; ?>
                </div>

                <?php unset($_SESSION['message']); } ?>
			
		</section>
        <section >
            <table class="table table-striped table-hover "style = "width: 400px;">
                <table class="table text-nowrap">
                
             <?php require_once ('view.php'); ?>
                <thead>
                    <tr>
                    <th scope="col">User ID </th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Position</th>
                    <th scope="col" >Action</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    <?php foreach($result as $r){ ?>
                    <tr>
                    <th scope="row"><?php echo $r['userid'];?> </th>
                    <td><?php echo $r['fname']; ?></td>
                    <td><?php echo $r['lname']; ?></td>  
                    <td><?php echo $r['username']; ?></td>
                    <td><?php echo $r['password']; ?></td>
                    <td><?php echo $r['description']; ?></td>
                    <td><a href="edit.php?userid=<?php echo $r['userid']; ?>" class="btn btn-secondary ">Edit</a></td>
                    <td><a href="delete.php?userid=<?php echo $r['userid']; ?>" class="btn btn-danger ">Delete</a></td>

                    </tr>

                    <?php } ?>
                   
                </tbody>
            </table>
        </section>

        <section>
            <a href="add.php" class="btn btn-primary">Add Users</a>
        </section>

    </section>
            
	</div>



<?php
    require_once '../../includes/footer.php';
?>