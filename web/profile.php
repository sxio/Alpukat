<!DOCTYPE html>
<html>
<head>
	<title>Doctor Profile</title>
	<?php require __DIR__."/partial/head.php"; ?>

	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<script src="js/main.js"></script>
</head>
<body>
<?php require __DIR__."/partial/nav.php" ?>

<section id="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 text-center">
				<div class="panel panel-success">
					<div class="panel panel-heading">
						<img src="img/user.jpg" class="img-circle" id="foto">
						<h2><i class="fa fa-user fa-fw">Personal Information</i></h2> <!--// Meikelwis 25/10/16-->
					</div>
					<div class="panel-body">
						<ul class="list-unstyled info text-left">
								<li>ID :</li>
								<li>First Name :</li>
								<li>Last Name :</li>
								<li>Place , Date of Birth :</li>
								<li>City :</li>
								<li>Religion:</li>
								<li>Gender  :</li>
								<li>Address :</li>
								<li>Status :</li>
						</ul>
						<!--Facebook-->
						<button type="button" class="btn btn-fb btn-info"><i class="fa fa-facebook center"></i> Facebook</button>
						<!--Google +-->
						<button type="button" class="btn btn-gplus btn-danger"><i class="fa fa-google-plus center"></i> Google +</button>
						<!--Instagram-->
						<button type="button" class="btn btn-ins btn-primary"><i class="fa fa-instagram center"></i> Instagram</button>
						<hr>
						<div class="row">
							<div class="panel panel-warning">
								<div class="panel panel-heading">
									<h3>Overview</h3>
								</div>
								<div class="panel panel-body text-left">
									<ul class="list-unstyled">
										<li><h4>Overall Visits</h4></li>
										<ul>
											<li>Last Week    : 999 users
											</li>
											<li>Last Month   :12393 users
											</li>
										</ul>
										<li>Rating</li>
										<div class="progress">
  										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%">
    									70%
 										</div>
 										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%">
    									20%
 										</div>
 										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:7%">
    									7%
 										</div>
 										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:3%">
    									3%
 										</div>
									</div>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-info">
					<div class="panel-heading text-center">
						<h2>About Doctor</h2>
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
						<div class="panel panel-info">
							<div class="panel-heading text-center">
								<h3>Education & Experience</h3>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled">
									<li>Education </li>
									<ul>
										<li>SD :</li>
										<li>SMP :</li>
										<li>SMA :</li>
										<li>S1 :</li>
										<li>S2 :</li>
										<li>DR :</li>
									</ul>
									<li>Experience :</li>
									<li>Speciality :</li>
									<li>Certification :</li>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-info">
							<div class="panel-heading text-center">
								<h3>Hospital Information</h3>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled">
									<li>Hospital Location:
									<h3>Maps</h3>
									<div id="map">
										Hospital</div>
									</li>
									<!--Meikelwis Sisain tempat untuk ini soalnya mau buat google mapnya
									//Surce : https://developers.google.com/maps/articles/phpsqlajax_v3
									//Nanti baru buat soalnya mau pake db juga
									//api key : AIzaSyDGJqRDpxUJqXhZZ2As2luILJHG9__f9jc-->
									<li>Schedule:</li>
									<li>Contact Number :</li>
									<ul>
										<li>Telephone :</li>
										<li>Handphone :</li>
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
<?php require __DIR__."/partial/modals.php"; ?>
</body>
</html>