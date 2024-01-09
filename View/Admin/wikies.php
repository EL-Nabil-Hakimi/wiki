<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/dashboard/assets/css/dashboard.css">

	<title>Wikies</title>
</head>
<style>

</style>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
	<?php
			include "../View/Admin/nav.php";
		?>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
			<img src="assets/dashboard/assets/img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Wikies</h1>
				</div>
				
			</div>


			<div class="container-xl">
				<div class="table-responsive">
					<div class="table-wrapper">
						<div class="table-title">
							<div class="row">
								<div class="col-sm-5">
									<h2>Wikies <b>Management</b></h2>
								</div>
								
							</div>
						</div>
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>Nr</th>
									<th>Title</th>						
									<th>Description</th>
									<th>Date/Time</th>
									<th>Action</th>
									
								</tr>
							</thead>
							<tbody>

							<?php
							$number =0 ;  
							foreach ($articles as $article):
								$number++;
								?>
								
								<tr>
									<td><?= $number ?></td>
									<td><?= $article['title'] ?></td>
									<td><?= $article['description'] ?></td>                                          
									<td><?= $article['date'] ?></td>     
									
									<td>
										<a href="?route=wikies_page&id=<?= $article['id'] ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
									</td>
								</tr>
								<?php  endforeach  ?>
							</tbody>
						</table>
					
					</div>
				</div>
			</div>  
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="assets/dashboard/assets/js/script.js"></script>
</body>
</html>