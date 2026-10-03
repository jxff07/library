
<?php
    require_once '../../includes/header.php';
    session_start();
?>

	<div class="container">

		<?php require_once '../../includes/adminnav2.php'; ?>
		
		<section> 
			<p class="display-6">Books Management Page</p>

            
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
                        <th scope="col">Book No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Category</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    <?php foreach($result as $r){ ?>
                    <tr>
                    <th scope="row"><?php echo $r['bookno'];?> </th>
                    <td><?php echo $r['title']; ?></td>
                    <td><?php echo $r['author']; ?></td>
                    <td><?php echo $r['category']; ?></td>
                    <td><?php echo $r['quantity']; ?></td>
                    <td><a href="edit.php?bookno=<?php echo $r['bookno']; ?>" class="btn btn-secondary ">Edit</a></td>
                    <td><a href="delete.php?bookno=<?php echo $r['bookno']; ?>" class="btn btn-danger ">Delete</a></td>

                    </tr>

                    <?php } ?>
                   
                </tbody>
            </table>
        </section>

        <section>
            <a href="add.php" class="btn btn-primary">Add Books</a>
        </section>

    </section>
            
	</div>



<?php
    require_once '../../includes/footer.php';
?>
