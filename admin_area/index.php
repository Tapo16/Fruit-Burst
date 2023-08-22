<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>
	<!-- bootstrap css link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	
	<link rel="stylesheet" href="../style.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<Style>
		.admin_image {
			width: 50%;
			object-fit: contain;
		}
		.footer{ 
			position: absolute;
			bottom: 0;
			width: 100%;
		}
	</Style>
</head>

<body>

	<!-- navbar -->

	<div class="container-fluid p-0">
		<!-- first child -->
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
			<div class="container-fluid">
				<img src="../images/fruits.png" alt="" class="logo">
				<nav class="navbar navbar-expand-lg">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="" class="nav-link">Welcome Guest</a>
						</li>
					</ul>
				</nav>
			</div>
		</nav>
		<!-- second child -->


		<div class="big-light">
			<h3 class="text-center p-2">Manage Details</h3>
		</div>

		<!-- Third Child -->

		<div class="row">
			<div class="con-md-12 bg-secondary p-1 d-flex align-items-center">

				<div class="px-5">
					<a href="#"><img src="../images/pineapple_juice.png" alt="" class="admin_image"></a>
					<p class="text-light text-center">Admin Name</p>
				</div>

				<div class="button text-center">

					<button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></button>
					<button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
					<button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
					<button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
					<button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
					<button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
					<button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
					<button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
					<button><a href="" class="nav-link text-light bg-info my-1">List Orders</a></button>
					<button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
				</div>
			</div>

		</div>

		<div class="bg-info p-3 text-center footer">
			<p>All rights reserved and designed by A.S.T-2023</p>
		</div>


       <!-- fourth child -->

	   <div class="container my-5">
      <?php
  
        if(isset($_GET['insert_category'])){ 
			include('insert_categories.php');
		}
		
        if(isset($_GET['insert_brand'])){ 
			include('insert_brands.php');
		}
	  ?>

	   </div>

	</div>



	<!-- bootstrap js link -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>

</html>