<!DOCTYPE html>
<html>
<head>
	<title>Avocado</title>
	<?php require_once __DIR__.'/templates/header.php'; ?>

	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
</head>
<body>
	<?php require_once __DIR__."/templates/nav.php"; ?>
	<div class="jumbotron text-center">
	  	<h1>Avocado</h1><!--// Meikelwis 25/10/16-->
	  	<h3>We specialize in Health Care Application</h3>
	  	<form class="form-inline" action="list">
	    	<input type="email" class="form-control" size="50" placeholder="Doctor`s Name or Hospital`s Name" required>
	    	<a href="list" type="button" class="btn btn-info">Search</a>
	  	</form>
	</div>
	<section id="startchange">
		<h1 class="text-center">Here Are  Our Best Doctors of The Month</h1>
		<div class="container">
			<div class="row text-center doc">
				<div class="col-sm-4">
					<a href=""><img src="<?php echo base_url() ?>assets/img/doctor.jpg"></a>
					<h3>Doctor 1</h3>
				</div>
				<div class="col-sm-4">
					<a href=""><img src="<?php echo base_url() ?>assets/img/doctor.jpg"></a>
					<h3>Doctor 2</h3>
				</div>
				<div class="col-sm-4">
					<a href=""><img src="<?php echo base_url() ?>assets/img/doctor.jpg"></a>
					<h3>Doctor 3</h3>
				</div>
			</div>
		</div>
	</section>

	<section id="o_services">
		<h1 class="about_us text-center">ABOUT US</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8 fe">
					<h1 class="text-center">
						Our Services
					</h1>
						
					<div class="row first_service">
						<div class="col-sm-3 serve text-center">
							<a href=""><i class="fa fa-newspaper-o fa-fw fa-4x new"></i></a><br><a href=""><h4 for="new">News</h4></a>
						</div>
						<div class="col-sm-3 serve text-center">
							<a href=""><i class="fa fa-check-square-o fa-fw fa-5x forums"></i></a><br><a href=""><h4>Forum</h4></a>
						</div>
						<div class="col-sm-3 serve text-center">
							<a href=""><i class="fa fa-shopping-cart fa-fw fa-5x store"></i></a><br><a href=""><h4>E-Store</h4></a>
						</div>
						<div class="col-sm-3 serve text-center">
							<a href=""><i class="fa fa-smile-o fa-fw fa-5x consul"></i></a><br><a href=""><h4>Consultation</h4></a>
						</div>
					</div>
					<div class="row second_service">
						<div class="col-sm-4 serve text-center">
							<a href=""><i class="fa fa-money fa-fw fa-4x money"></i></a><br><a href=""><h4>Donate</h4></a>
						</div>
						<div class="col-sm-4 serve text-center">
							<a href=""><i class="fa fa-bell-o fa-fw fa-5x bell"></i></a><br><a href=""><h4>Reminder</h4></a>
						</div>
						<div class="col-sm-4 serve text-center">
							<a href=""><i class="fa fa-history fa-fw fa-5x histo"></i></a><br><a href=""><h4>History</h4></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 explain">
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
		<h1 class="text-center say">
			What They Say
		</h1>
	<!-- carousel start -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  	<!-- <ol class="carousel-indicators">
		    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    	<li data-target="#myCarousel" data-slide-to="1"></li>
		    	<li data-target="#myCarousel" data-slide-to="2"></li>
		    	<li data-target="#myCarousel" data-slide-to="3"></li>
		  	</ol> -->

		  <!-- Wrapper for slides -->
		  	<div class="carousel-inner" role="listbox">
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
					<div class="item1">
						<h1>DEAL</h1>
						<img src="<?php echo base_url() ?>assets/img/poster.jpg">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="item1">
						<h1>DEAL</h1>
						<h1>DEAL</h1>
						<img src="<?php echo base_url() ?>assets/img/poster2.jpg">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="item1">
						<h1>DEAL</h1>
						<h1>DEAL</h1>
						<img src="<?php echo base_url() ?>assets/img/poster.jpg">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="item1">
						<h1>DEAL</h1>
						<h1>DEAL</h1>
						<img src="<?php echo base_url() ?>assets/img/poster2.jpg">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="complain_id">
		<h1 class="cs text-center">
			Critics and Suggestions Are To Build Better Than Before
		</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<img class="csg" src="<?php echo base_url() ?>assets/img/cs.jpg">
				</div>
				<div class="col-sm-8">
					<form class="complain">
					  	<div class="form-group">
					    	<label for="email">Email address:</label>
					    	<input type="email" class="form-control" id="email" required>
					  	</div>
					  	<div class="form-group">
					    	<label for="txt">Subject:</label>
					    	<input type="text" class="form-control" id="txt" required>
					  	</div>
					  	<!-- <div class="checkbox">
					    	<label><input type="checkbox"> Remember me</label>
					  	</div> -->
					  	<div class="form-group">
					    	<label for="comment">Comment:</label>
	      					<textarea class="form-control" rows="5" id="comment" required></textarea>
					  	</div>
					  	<button type="submit" class="btn btn-info">Submit</button>
					</form>
				</div>		
			</div>
		</div>

	</section>

	<footer class="foot">
		<!-- <h1 class="text-center"></h1> -->
		<!-- <h4 class="info text-center">This is our information</h4> -->
		<div class="row">
			<div class="col-sm-4 surel">
				<ul class="list-unstyled">
					<li><a href=""><i class="fa fa-map-marker fa-2x oval" aria-hidden="true"></i></a>&nbsp;<a href="" class="inform">Mikroskil Gedung B</a></li>
					<li><a href=""><i class="fa fa-phone fa-2x oval_t" aria-hidden="true"></i></a>&nbsp;<a href="" class="inform">(+62)812345678910</a></li>
					<li><a href=""><i class="fa fa-envelope fa-2x"></i></a> <a href="" class="inform">stephen.huang96@gmail.com</a></li>
					<li><a href=""><i class="fa fa-facebook-official fa-2x round" aria-hidden="true"></i></a>&nbsp;<a href="" class="inform">Alpukat</a></li>
					<li><a href=""><i class="fa fa-twitter fa-2x round" aria-hidden="true"></i></a>&nbsp;<a href="" class="inform">Alpukat</a></li>
					<li><a href=""><i class="fa fa-instagram fa-2x round" aria-hidden="true"></i></a>&nbsp;<a href="" class="inform">Alpukat</a></li>
				</ul>
			</div>
			<div class="col-sm-4 corporated">
				<h3 class="text-center">In Corporation With</h3>
			</div>
			<div class="col-sm-4 services">
				<h3>Donation Report</h3>
				<table class="table">
			    <!-- <thead>
			     	<tr>
			       		<th>Firstname</th>
			        	<th>Lastname</th>
			        	<th>Email</th>
			      	</tr>
			    </thead> -->
			    <tbody>
					<tr>
						<td>Today`s Donation</td>
						<td>1,000,000</td>
					</tr>
					<tr>
						<td>Total Donation</td>
						<td>100,000,000</td>
					</tr>
					<tr>
						<td>Total Donated</td>
						<td>254,500,000</td>
					</tr>
			    </tbody>
			  </table>
			</div>
		</div>
		<p class="text-center">Copyright &copy; Alpukat 2017.</p>
		<p class="text-center">All Rights reserved</p>
	</footer>
	<?php require_once __DIR__.'/templates/chat.php'; ?>
</body>
</html>