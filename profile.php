<!DOCTYPE html>
<html>
<head>
<title>Doctor Profile</title>
<?php require __DIR__."/PARTIAL/head.php"; ?>

<link rel="stylesheet" type="text/css" href="CSS/profile.css">
<script src="JS/main.js"></script>
</head>
<body>
<?php require __DIR__."/PARTIAL/nav.php" ?>

<section id="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 text-center">
				<div class="panel panel-success">
					<div class="panel panel-heading">
						<img src="img/user.jpg" class="img-circle" id="foto">
						<h2>Personal Information</h2>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled info text-left">
								<li>ID : </li>
								<li>Name : </li>
								<li>Gender  : </li> 
								<li>Place , Date of Birth :</li>
								<li>Address : </li>
								<li>Status : </li>
						</ul>
						<!--Facebook-->
						<button type="button" class="btn btn-fb btn-info"><i class="fa fa-facebook center"></i> Facebook</button>
						<!--Google +-->
						<button type="button" class="btn btn-gplus btn-danger"><i class="fa fa-google-plus center"></i> Google +</button>
						<!--Instagram-->
						<button type="button" class="btn btn-ins btn-primary"><i class="fa fa-instagram center"></i> Instagram</button>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-info">
					<div class="panel-heading text-center">
						<h2>About Me</h2>
					</div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-warning">
							<div class="panel-heading text-center">
								<h3>Education & Experience</h3>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled">
									<li>Education :
									<ul>
										<li>SD :</li>
										<li>SMP :</li>
										<li>SMA :</li>
										<li>S1 :</li>
										<li>S2 :</li>
										<li>Dr :</li>
									</ul>
									<li>Experience :</li>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-success">
							<div class="panel-heading text-center">
								<h3>Hospital Information</h3>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled">
									<li>Location </li> 
									<li>Contact Number :
									<ul>
										<li>Telephone :</li>
										<li>Handphone :</li>
										<li>Email :</li>
									</ul>
								</ul>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>