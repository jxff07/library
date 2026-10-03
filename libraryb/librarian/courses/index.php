
<?php
    require_once '../../includes/header.php';
    session_start();
?>

	<div class="container">

		<?php require_once '../../includes/adminnav2.php'; ?>
		
		<section> 
			<p class="display-6">Courses Page</p>

        
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
               
                <?php require_once ('view.php'); ?>
                
                <thead>
                    <tr>
                    <th scope="col">Course Id </th>
                    <th scope="col">Course Code</th>
                    <th scope="col" >Action</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    <?php foreach($result as $r){ ?>
                    <tr>
                    <th scope="row"><?php echo $r['courseid'];?> </th>
                    <td><?php echo $r['coursecode']; ?></td>
                    <td><a href="edit.php?courseid=<?php echo $r['courseid']; ?>" class="btn btn-secondary ">Edit</a></td>
                    <td><a href="delete.php?courseid=<?php echo $r['courseid']; ?>" class="btn btn-danger ">Delete</a></td>

                    </tr>

                    <?php } ?>
                   
                </tbody>
            </table>
        </section>

        <section>
            <a href="add.php" class="btn btn-primary">Add Course</a>
        </section>

    </section>
            
	</div>



<?php
    require_once '../../includes/footer.php';
?>