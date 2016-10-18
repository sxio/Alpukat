<!DOCTYPE html>
<html>
<head>
	<title>AVOCADO</title>
	<?php require __DIR__."/PARTIAL/head.php"; ?>

	<script src="JS/main.js"></script>
</head>
<body>
	<?php require __DIR__."/PARTIAL/nav.php" ?>

	<div class="jumbotron text-center">
	  <h1>Avocado</h1>
	  <h3>We specialize in Health Care Application</h3>
	  <form class="form-inline" action="list.php">
	    <input type="email" class="form-control" size="50" placeholder="Doctor`s Name or Hospital`s Name" required>
	    <a href="list.php" type="button" class="btn btn-info">Search</a>
	  </form>
	</div>
	<section id="startchange">
		<div class="container cmain">
			<div class="row">
			<h2 class="text-center"><i class="fa fa-newspaper-o fa-fw"></i> News</h2>
				<div class="col-sm-6 leftedge">
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
						      <img src="IMG/stomach.jpg" alt="perut">
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
						      <img src="IMG/jiwa.jpg" alt="jiwa">
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
						      <img src="IMG/hands.jpg" alt="tangan">
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
						      <img src="IMG/october.jpg" alt="october">
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

						  <!-- Left and right controls -->
						  <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>

						  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a> -->
						</div>
						<a href="#" class="news">Go to News Page &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a>
					</div>
				<div class="col-sm-6 rightedge">
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="IMG/stomach.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Kombinasi Tiga Penyakit yang Bisa Perpendek Usia</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="IMG/hands.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Manusia Hanya Bisa Mencapai Umur Maksimal Sampai 120 Tahun?</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="IMG/jiwa.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Pertolongan Pertama untuk Masalah Kesehatan Jiwa</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="IMG/october.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Oktober, Bulan Terbaik untuk Mulai Berdiet</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="IMG/perfect.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Berita 5</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="IMG/health.jpg"></a>
						</div>
						<div class="col-sm-9 news_title">
							<a href="#">Berita 6</a>
						</div>
					</div>
					<div class="row today_news">
						<div class="col-sm-3 news_image">
							<a href=""><img src="IMG/stomach.jpg"></a>
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
					<img src="IMG/avocado.png">
				</div>
			</div>
		</div>

	</section>

	<?php require __DIR__."/PARTIAL/modals.php" ?>

</body>
</html>