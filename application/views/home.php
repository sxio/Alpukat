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
		<div class="row text-center doc">
			<div class="col-sm-4">
				<a href=""><img src="<?php echo base_url() ?>assets/img/doctor.jpg"></a>
				<h3>Doctor 1</h3>
			</div>
			<div class="col-sm-4">
				<a href=""><img src="<?php echo base_url() ?>assets/img/doctor.jpg"></a>
				<h3>Doctor 1</h3>
			</div>
			<div class="col-sm-4">
				<a href=""><img src="<?php echo base_url() ?>assets/img/doctor.jpg"></a>
				<h3>Doctor 1</h3>
			</div>
		</div>
	</section>
	<section id="o_services">
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
	</section>
	<section id="n_feature">
		<div class="container cmain">
			<div class="row">
			<h2 class="text-center hitam"><i class="fa fa-newspaper-o fa-fw"></i> News</h2>
				<div class="col-sm-6 leftedge">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
					  	<div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="<?php echo base_url() ?>assets/img/stomach.jpg" alt="perut">
						      <div class="carousel-caption">
						        <h3>Kombinasi Tiga Penyakit yang Bisa Perpendek Usia</h3>
						        <a href="#">Read More...</a>
						      </div>
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    </div>

						    <div class="item">
						      <img src="<?php echo base_url() ?>assets/img/jiwa.jpg" alt="jiwa">
						      <div class="carousel-caption">
						        <h3>Pertolongan Pertama untuk Masalah Kesehatan Jiwa</h3>
						        <a href="#">Read More...</a>
						      </div>
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    </div>

						    <div class="item">
						      <img src="<?php echo base_url() ?>assets/img/hands.jpg" alt="tangan">
						      <div class="carousel-caption">
						        <h3>Manusia Hanya Bisa Mencapai Umur Maksimal Sampai 120 Tahun?</h3>
						        <a href="#">Read More...</a>
						      </div>
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    </div>

						    <div class="item">
						      <img src="<?php echo base_url() ?>assets/img/october.jpg" alt="october">
						      <div class="carousel-caption">
						        <h3>Oktober, Bulan Terbaik untuk Mulai Berdiet</h3>
						        <a href="#">Read More...</a>
						      </div>
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    </div>
						</div>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/9G95EYym4NM" frameborder="0" allowfullscreen></iframe>

						</div>
						<a href="#" class="news">Go to News Page &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a>

					</div>
				<div class="col-sm-6 rightedge">
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/stomach.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Kombinasi Tiga Penyakit yang Bisa Perpendek Usia</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/hands.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Manusia Hanya Bisa Mencapai Umur Maksimal Sampai 120 Tahun?</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/jiwa.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Pertolongan Pertama untuk Masalah Kesehatan Jiwa</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/october.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Oktober, Bulan Terbaik untuk Mulai Berdiet</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/perfect.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Berita 5</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/perfect.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Berita 6</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="<?php echo base_url() ?>assets/img/stomach.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Berita 7</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<h1>What is Avocado <i class="fa fa-question-circle" aria-hidden="true"></i></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
				<div class="col-sm-5 img_about">
					<img src="<?php echo base_url() ?>assets/img/avocado.png">
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
			<div class="col-sm-4 complain-form">
				<form class="complain">
				  	<div class="form-group">
				    	<label for="email">Email address:</label>
				    	<input type="email" class="form-control" id="email" required>
				  	</div>
				  	<div class="form-group">
				    	<label for="pwd">Password:</label>
				    	<input type="password" class="form-control" id="pwd" required>
				  	</div>
				  	<div class="checkbox">
				    	<label><input type="checkbox"> Remember me</label>
				  	</div>
				  	<div class="form-group">
				    	<label for="comment">Comment:</label>
      					<textarea class="form-control" rows="5" id="comment" required></textarea>
				  	</div>
				  	<button type="submit" class="btn btn-info">Submit</button>
				</form>
			</div>
			<div class="col-sm-4 services">
				<h3>FAQ</h3>
				<ul class="list-unstyled">
					<li>Apakah Stephen sedang belajar ?</li>
					<li>Apakah yang sedang dilakukan Meikelwis ?</li>
					<li>Bagaimana caranya Stephen mendapatkan ilham ketika sedang berak ?</li>
					<li>Bagaimanakah caranya Meikelwis mendapat ilham ?</li>
					<li>Apa yang harus dilakukan agar dapat menghapal semua isi website w3schools ?</li>
				</ul>
			</div>
		</div>
		<p class="text-center">Copyright &copy; Alpukat 2017.</p>
		<p class="text-center">All Rights reserved</p>
	</footer>
	<?php require_once __DIR__.'/templates/chat.php'; ?>
</body>
</html>