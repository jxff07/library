
<nav class="navbar navbar-expand-lg bg-body-tertiary">

		<div class="container-fluid">
		    <a class="navbar-brand text-primary" href="index.php">SMACP LIBRARY SYSTEM</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		    </button>
			<div class="collapse navbar-collapse" id="navbarNav">

				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="../index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../transactionmanagement/index.php">Transaction Management</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../transactionhistory/index.php">Transaction History</a>
					</li>
				</ul>
	
		      	<section class="d-flex ms-auto align-items-center">
		      		<span>
		      			<?php
		      				echo "Welcome, ".$_SESSION['fname']. " ". $_SESSION['lname']
		      			?>
		      			<a href="../index.php" class="badge text-bg-danger float-end">Logout</a>
		      		</span>
		      	</section>

			</div>
		</div>
</nav>