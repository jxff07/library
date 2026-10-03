<nav class="navbar navbar-expand-lg bg-body-tertiary">
		  <div class="container-fluid">
		    <a class="navbar-brand text-primary" href="../index.php">SMACP LIBRARY SYSTEM</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="../user/index.php">Users</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="../categories/index.php">Categories</a>
		        </li>
		         <li class="nav-item">
		          <a class="nav-link" href="../books/index.php">Books</a>
		        </li>
		         <li class="nav-item">
		          <a class="nav-link" href="../courses/index.php">Courses</a>
		        </li>
		         <li class="nav-item">
		          <a class="nav-link" href="../student/index.php">Students</a>
		        </li>		     
				<li class="nav-item">
		          <a class="nav-link" href="../positions/index.php">Position</a>
		        </li>     
		      </ul>

		      	<section class="mt-5">
		      		<span>
		      			<?php
		      				echo "Welcome, ".$_SESSION['fname']. " ". $_SESSION['lname']. " (". $_SESSION['position'].")"
		      			?>
		      			<a href="../index.php" class="badge text-bg-danger float-end">Logout</a>
		      		</span>
		      	</section>

		    </div>
		  </div>
		</nav>