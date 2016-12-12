<!DOCTYPE html>
<html>
<head>
	<title>Avocado | News</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/nav.css') ?>
	<?php echo link_tag('assets/css/news/news.css') ?>

	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
</head>
<body>
	<?php echo $nav; ?>
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
						<!-- <h3 class="video-title">Health Video</h3> -->
						<iframe width="560" height="315" src="https://www.youtube.com/embed/9G95EYym4NM" frameborder="0" allowfullscreen></iframe>

						</div>
						<!-- <a href="#" class="news">Go to News Page &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a> -->

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
	<section id="other_detail">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8 left-nav">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
						<li><a data-toggle="tab" href="#menu1">Women`s Health</a></li>
						<li><a data-toggle="tab" href="#menu2">Men`s Health</a></li>
						<li><a data-toggle="tab" href="#menu3">Children`s Health</a></li>
					</ul>

					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<?php for($i = 0 ; $i < 5 ; $i++) { ?>
							<div class="block<?php if($i==4) echo '-last'; ?>">
								<div class="row">
									<div class="col-sm-3 detail_img">
										<img src="<?php echo base_url() ?>assets/img/perfect.jpg">
									</div>
									<div class="col-sm-9 detail_news">
										<a href="">
											<h3>HOME</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</a>
									</div>
								</div>
							</div>
							<?php }; ?>
						</div>
						<div id="menu1" class="tab-pane fade">
								<div class="block">
								<h3>HOME</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div id="menu2" class="tab-pane fade">
								<div class="block">
								<h3>HOME</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div id="menu3" class="tab-pane fade">
							<div class="block">
								<h3>HOME</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 right-ad">
					<div class="ad">
						<img src="<?php echo base_url() ?>assets/img/farmers.jpg">
					</div>
					<div class="row">
						<div class="col-sm-6 adv">
							<img src="<?php echo base_url() ?>assets/img/farmers.jpg">
						</div>
						<div class="col-sm-6 adv">
							<img src="<?php echo base_url() ?>assets/img/farmers.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="tips">
		<h1 class="ht text-center">Health Tips</h1>
		<div class="container">
			<div class="row">
				<?php for($i = 0 ; $i < 4 ; $i++) { ?>
				<div class="col-sm-3 tip">
					<a href="">
					<img src="<?php echo base_url() ?>assets/img/farmers.jpg">
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p></a>
				</div>
				<?php }; ?>
			</div>
		</div>
	</section>
	<section id="car">
		<h1 class="quote text-center">Quote</h1>
		<div id="qCarousel" class="carousel slide" data-ride="carousel">
		  	<div class="carousel-inner" role="listbox">
		    	<div class="item active">
		  			<h3 class="the-quote text-center"><i>"There is one cosolation in being sick; and that is the POSSIBILITY that you may recover to a better state than you were ever in before"</i></h3>
		  			<p class="text-center"><i>-Henry David Thoreau-</i></p>
		  		</div>

			    <div class="item">
			      	<h3 class="the-quote text-center"><i>"There is one cosolation in being sick; and that is the POSSIBILITY that you may recover to a better state than you were ever in before"</i></h3>
		  			<p class="text-center"><i>-Henry David Thoreau-</i></p>
		  		</div>

			    <div class="item">
			      	<h3 class="the-quote text-center"><i>"There is one cosolation in being sick; and that is the POSSIBILITY that you may recover to a better state than you were ever in before"</i></h3>
		  			<p class="text-center"><i>-Henry David Thoreau-</i></p>
		  		</div>

			    <div class="item">
			      	<h3 class="the-quote text-center"><i>"There is one cosolation in being sick; and that is the POSSIBILITY that you may recover to a better state than you were ever in before"</i></h3>
		  			<p class="text-center"><i>-Henry David Thoreau-</i></p>
		  		</div>
		  	</div>
		  <!-- Left and right controls -->
			<a class="left_fa carousel-control" href="#qCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right_fa carousel-control" href="#qCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>
	<?php echo $footer; ?>
	<?php echo $chat; ?>
</body>
</html>