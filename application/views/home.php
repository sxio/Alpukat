<!DOCTYPE html>
<html>
<head>
	<title>Avocado</title>
	<?php echo $header; ?>

	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
	<script src="<?php echo base_url() ?>assets/js/fade.js"></script>
</head>
<body>
	<?php echo $nav; ?>
	<div class="jumbotron text-center">
	  	<h1>Avocado</h1><!--// Meikelwis 25/10/16-->
	  	<h3>We specialize in Health Care Application</h3>
	  	<form class="form-inline" action="list">
	    	<input type="text" class="form-control" size="50" placeholder="Doctor`s Name or Hospital`s Name" required autofocus>
	    	<a href="list" type="button" class="btn btn-info">Search</a>
	  	</form>
	</div>
	<section id="startchange">
		<h1 class="text-center fades">Here Are  Our Best Doctors of The Month</h1>
		<div class="container">
			<div class="row text-center doc">
				<div class="col-sm-4 fadesleft">
					<a href=""><img src="<?php echo base_url() ?>assets/img/doctor.jpg"></a>
					<h3>Doctor 1</h3>
				</div>
				<div class="col-sm-4 fadesleft">
					<a href=""><img src="<?php echo base_url() ?>assets/img/doctor.jpg"></a>
					<h3>Doctor 2</h3>
				</div>
				<div class="col-sm-4 fadesleft">
					<a href=""><img src="<?php echo base_url() ?>assets/img/doctor.jpg"></a>
					<h3>Doctor 3</h3>
				</div>
			</div>
		</div>
	</section>

	<section id="o_services">
		<h1 class="about_us text-center fades">ABOUT US</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8 fe">
					<h1 class="text-center fadesleft">
						Our Services
					</h1>

					<div class="row first_service fadesleft">
						<div class="col-sm-3 serve text-center">
							<a href="<?php echo base_url('news') ?>"><i class="fa fa-newspaper-o fa-fw fa-4x new"></i></a><br><a href=""><h4 for="new">News</h4></a>
						</div>
						<div class="col-sm-3 serve text-center fadesleft">
							<a href=""><i class="fa fa-commenting-o fa-fw fa-5x forums"></i></a><br><a href=""><h4>Forum</h4></a>
						</div>
						<div class="col-sm-3 serve text-center fadesleft">
							<a href=""><i class="fa fa-shopping-cart fa-fw fa-5x store"></i></a><br><a href=""><h4>E-Store</h4></a>
						</div>
						<div class="col-sm-3 serve text-center fadesleft">
							<a href=""><i class="fa fa-smile-o fa-fw fa-5x consul"></i></a><br><a href=""><h4>Consultation</h4></a>
						</div>
					</div>
					<div class="row second_service fadesleft">
						<div class="col-sm-4 serve text-center">
							<a href=""><i class="fa fa-money fa-fw fa-4x money"></i></a><br><a href=""><h4>Donate</h4></a>
						</div>
						<div class="col-sm-4 serve text-center fadesleft">
							<a href=""><i class="fa fa-bell-o fa-fw fa-5x bell"></i></a><br><a href=""><h4>Reminder</h4></a>
						</div>
						<div class="col-sm-4 serve text-center fadesleft">
							<a href=""><i class="fa fa-history fa-fw fa-5x histo"></i></a><br><a href=""><h4>History</h4></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 explain fadesright">
					<div class="col-sm-5 img_about">
						<img src="<?php echo base_url() ?>assets/img/avocado.png">
					</div>
					<h1>What is Avocado <i class="fa fa-question-circle" aria-hidden="true"></i></h1>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
		  <!-- Indicators -->
		  	<!-- <ol class="carousel-indicators">
		    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    	<li data-target="#myCarousel" data-slide-to="1"></li>
		    	<li data-target="#myCarousel" data-slide-to="2"></li>
		    	<li data-target="#myCarousel" data-slide-to="3"></li>
		  	</ol> -->

		  <!-- Wrapper for slides -->
		  	<div class="carousel-inner in" role="listbox">
		    	<div class="item active">
			  		<div class="container">
				  		<div class="row">
				  			<div class="col-sm-2">
					      		<img src="<?php echo base_url() ?>assets/img/doctor.jpg" alt="Chania">
				  			</div>
					      	<div class="carousel-caption col-sm-10">
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
					      	<div class="col-sm-2">
					      		<img src="<?php echo base_url() ?>assets/img/doctor.jpg" alt="Chania">
				  			</div>
					      	<div class="carousel-caption col-sm-10">
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
					      	<div class="col-sm-2">
					      		<img src="<?php echo base_url() ?>assets/img/doctor.jpg" alt="Chania">
				  			</div>
					      	<div class="carousel-caption col-sm-10">
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
					      	<div class="col-sm-2">
					      		<img src="<?php echo base_url() ?>assets/img/doctor.jpg" alt="Chania">
				  			</div>
					      	<div class="carousel-caption col-sm-10">
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
			<div class="row">
				<div class="col-sm-3">
					<div class="item1 fadesleft secondfade">
						<h1>DEAL</h1>
						<img src="<?php echo base_url() ?>assets/img/poster.jpg">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="item1 fadesleft">
						<h1>DEAL</h1>
						<img src="<?php echo base_url() ?>assets/img/poster2.jpg">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="item1 fadesright">
						<h1>DEAL</h1>
						<img src="<?php echo base_url() ?>assets/img/poster.jpg">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="item1 fadesright secondfade">
						<h1>DEAL</h1>
						<img src="<?php echo base_url() ?>assets/img/poster2.jpg">
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
				<div class="col-sm-4">
					<img class="csg" src="<?php echo base_url() ?>assets/img/cs.jpg">
				</div>
				<div class="col-sm-8">
					<form class="complain">
					  	<div class="form-group fadesleft">
					    	<label for="email">Email address:</label>
					    	<input type="email" class="form-control" id="email" required>
					  	</div>
					  	<div class="form-group fadesleft">
					    	<label for="txt">Subject:</label>
					    	<input type="text" class="form-control" id="txt" required>
					  	</div>
					  	<!-- <div class="checkbox">
					    	<label><input type="checkbox"> Remember me</label>
					  	</div> -->
					  	<div class="form-group fadesleft">
					    	<label for="comment">Comment:</label>
	      					<textarea class="form-control" rows="5" id="comment" required></textarea>
					  	</div>
					  	<button type="submit" class="btn btn-info">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php echo $footer; ?>
	<?php echo $chat; ?>
</body>
</html>