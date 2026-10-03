
<?php
    require_once '../../includes/header.php';
    session_start();
?>

	<div class="container">

		<?php require_once '../../includes/adminnav2.php'; ?>
		
		<section> 
			<p class="display-6">Position Page</p>

            
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
                    <th scope="col">Position Id </th>
                    <th scope="col">Description</th>
                    <th scope="col" >Action</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    <?php foreach($result as $r){ ?>
                    <tr>
                    <th scope="row"><?php echo $r['positionid'];?> </th>
                    <td><?php echo $r['description']; ?></td>
                    <td><a href="edit.php?positionid=<?php echo $r['positionid']; ?>" class="btn btn-secondary ">Edit</a></td>
                    <td><a href="delete.php?positionid=<?php echo $r['positionid']; ?>" class="btn btn-danger ">Delete</a></td>

                    </tr>

                    <?php } ?>
                   
                </tbody>
            </table>
        </section>

        <section>
            <a href="add.php" class="btn btn-primary">Add Position</a>
        </section>

    </section>
            
	</div>



<?php
    require_once '../../includes/footer.php';
?>