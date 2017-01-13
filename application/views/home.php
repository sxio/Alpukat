<!DOCTYPE html>
<html>
<head>
	<title>Avocado</title>
	<?php echo $header; ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/fade.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>
	<div class="jumbotron text-center">
		<h1>Avocado</h1><!--// Meikelwis 25/10/16-->
		<h3>We specialize in Health Care Application</h3>
		<form action="search/list" class="form-inline" method="get">
			<input type="text" class="form-control" size="50" name="src" placeholder="Doctor`s Name" required autofocus id="searchbar">
			<button class="btn btn-info">Search</button>
		</form>
	</div>
	<section id="startchange">
		<h1 class="text-center fades">Here Are Our Best Doctors of The Month</h1>
		<div class="container">
			<div class="row text-center doc">
				<?php foreach($top_3_doctor as $dct) { ?>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 fadesleft">
					<a href="<?php echo base_url('profile/doctor/'.$dct['DOCTOR_ID']); ?>"><img src="<?php echo base_url('assets/img/doctor/'. $dct['USER_IMG']); ?>"></a>
					<h3><?php echo $dct['USER_NAME']; ?></h3>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<section id="o_services">
		<h1 class="about_us text-center fades">ABOUT COMPANY</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 fe">
					<h1 class="text-center fadesleft">
						Our Services
					</h1>

					<div class="row first_service fadesleft">
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 serve text-center">
							<a href="<?php echo base_url('news'); ?>"><i class="fa fa-newspaper-o fa-fw fa-4x new"></i></a><br>
							<a href="<?php echo base_url('news'); ?>"><h4 for="new">News</h4></a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 serve text-center fadesleft">
							<a href="<?php echo base_url('forum'); ?>"><i class="fa fa-commenting-o fa-fw fa-5x forums"></i></a><br>
							<a href="<?php echo base_url('forum'); ?>"><h4>Forum</h4></a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 serve text-center fadesleft">
							<a href="<?php echo base_url('estore'); ?>"><i class="fa fa-shopping-cart fa-fw fa-5x store"></i></a><br>
							<a href="<?php echo base_url('estore'); ?>"><h4>E-Store</h4></a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 serve text-center fadesleft">
							<a href="#searchbar"><i class="fa fa-book fa-fw fa-5x consul"></i></a><br>
							<a href="#searchbar"><h4>Booking</h4></a>
						</div>
					</div>
					<div class="row second_service fadesleft">
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 serve text-center">
							<a href="<?php echo base_url('donate/payment/form'); ?>"><i class="fa fa-money fa-fw fa-4x money"></i></a><br>
							<a href="<?php echo base_url('donate/payment/form'); ?>"><h4>Donate</h4></a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 serve text-center fadesleft">
							<a href="<?php echo base_url('profile/reminder'); ?>"><i class="fa fa-bell-o fa-fw fa-5x bell"></i></a><br><a href="<?php echo base_url('profile/reminder'); ?>"><h4>Reminder</h4></a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 serve text-center fadesleft">
							<a href="<?php echo base_url('profile/payment-history'); ?>"><i class="fa fa-history fa-fw fa-5x histo"></i></a><br><a href="<?php echo base_url('profile/payment-history'); ?>"><h4>History</h4></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 explain fadesright">
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 img_about">
						<img src="<?php echo base_url('assets/img/avocado.png'); ?>">
					</div>
					<h1>What is Avocado <i class="fa fa-question-circle" aria-hidden="true"></i></h1>
					<p class="text-justify">Avocado is a web based application that specialized in the world of health. We provide you so many services like health news, forum, e-store, consultation and donation as you can choose what you need. You can search for the best doctor based on the doctor experience so you will always get the best one in their field. Besides, we will always try our best to help people with the donation feature as our founders vision is that we are really hopeful that this website can help as many people as it can. Feel free to give us suggestion at the bottom of this page so we can improve our quality and services.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="wts">
		<h1 class="text-center say fades">
			What They Say
		</h1>
	<!-- carousel start -->
		<div id="myCarousel" class="carousel slide fadesleft" data-ride="carousel">

		<!-- Wrapper for slides -->
			<div class="carousel-inner in" role="listbox">
				<div class="item active">
					<div class="container">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<img src="<?php echo base_url('assets/img/doctor.jpg'); ?>" alt="Chania">
							</div>
							<div class="carousel-caption col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<h3 class="text-center">Stephen</h3>
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="container">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<img src="<?php echo base_url('assets/img/doctor.jpg'); ?>" alt="Chania">
							</div>
							<div class="carousel-caption col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<h3 class="text-center">Meikelwis</h3>
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="container">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<img src="<?php echo base_url('assets/img/doctor.jpg'); ?>" alt="Chania">
							</div>
							<div class="carousel-caption col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<h3 class="text-center">Stephen Wijaya</h3>
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="container">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<img src="<?php echo base_url('assets/img/doctor.jpg'); ?>" alt="Chania">
							</div>
							<div class="carousel-caption col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<h3 class="text-center">Meikelwis Huang</h3>
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <a class="carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="fa fa-chevron-circle-left fa-fw" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a> -->
		  <!-- Left and right controls -->
			<a class="left_fa carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right_fa carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
<!-- carousel end -->
	</section>
	<!-- BAGIAN INI (DEAL) AKAN SAYA BUAT UNTUK REVIEW PENAWARAN DARI E-SHOP KITA -->
	<section id="deal">
		<div class="container">
			<h1 class="deals text-center">Best Deals From Our Shop</h1>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<div class="item1 fadesleft secondfade">
						<h1>DEAL</h1>
						<img src="<?php echo base_url('assets/img/poster.jpg'); ?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<div class="item1 fadesleft">
						<h1>DEAL</h1>
						<img src="<?php echo base_url('assets/img/poster2.jpg'); ?>">
					</div>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="item1 fadesright">
						<h1>DEAL</h1>
						<img src="<?php echo base_url('assets/img/poster.jpg'); ?>">
					</div>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="item1 fadesright secondfade">
						<h1>DEAL</h1>
						<img src="<?php echo base_url('assets/img/poster2.jpg'); ?>">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="complain_id">
		<h1 class="cs text-center fades">
			Critics and Suggestions Are Accepted for Improvement
		</h1>
		<div class="container">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<img class="csg" src="<?php echo base_url('assets/img/cs.jpg'); ?>">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<?php
					$attrib = array('class' => 'complain');
					echo form_open('', $attrib);
				?>
						<!-- <div class="form-group fadesleft">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" name="email" id="email" required>
						</div> -->
						<div class="form-group fadesleft">
							<label for="txt">Subject:</label>
							<input type="text" class="form-control" name="txt" id="txt" required>
						</div>
						<div class="form-group fadesleft">
							<label for="comment">Comment:</label>
							<textarea class="form-control" rows="9" name="comment" id="comment" required></textarea>
						</div>
						<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
						<button id="submit" class="btn btn-info">Submit</button>
						<div id="msg" class="alert"></div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</section>
	<?php echo $footer; ?>
</body>
</html>
