<!DOCTYPE html>
<html>
<head>
	<title>Avocado | News</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/nav.css') ?>
	<?php echo link_tag('assets/css/news/news.css') ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>
	<section id="news_home_head">
		<h1 class="hitam"><i class="fa fa-newspaper-o fa-fw"></i>Avo Health News<p class="motto">The Right Place to Learn About Health</p></h1>
	</section>
	<section id="n_feature">
		<div class="container cmain">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 leftedge">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
					  	<div class="carousel-inner" role="listbox">
					  		<?php
					  			$i = 0;

					  			foreach ($news_lists as $news_list) {
						  			if($i == 0) $active = 'active';
						  			else $active = '';
						  			?>
							  		<div class="item <?php echo $active; ?>">
							  			<img src="<?php echo base_url('assets/img/news-img/'. $news_list['NEWS_IMAGE']); ?>" class="carousel-img">
							  			<div class="carousel-caption">
							  				<h3><?php echo $news_list['NEWS_TITLE']; ?></h3>
							  				<a href="<?php echo base_url('news/details/'. $news_list['NEWS_ID']); ?>" class="carousel-readmore">Read more</a>
							  			</div>
							  			<div class="carousel-content"><p><?php echo word_limiter($news_list['NEWS_CONTENT'], 40); ?></p></div>
							  		</div>
						  			<?php
					  				$i++;
					  			}
					  		?>

						</div>
						<!-- <h3 class="video-title">Health Video</h3> -->
						<iframe width="560" height="315" src="https://www.youtube.com/embed/9G95EYym4NM" frameborder="0" allowfullscreen></iframe>

						</div>
						<!-- <a href="#" class="news">Go to News Page &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a> -->

					</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 rightedge">
					<?php
						$i = 0;
						foreach($news_lists as $news_list) {
							if($i >= 7) break;
					?>
						<div class="row today_news">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 news_image">
								<a href="<?php echo base_url('news/details/'. $news_list['NEWS_ID']); ?>"><img src="<?php echo base_url('assets/img/news-img/'. $news_list['NEWS_IMAGE']); ?>"></a>
							</div>
							<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 news_title">
								<a href="<?php echo base_url('news/details/'. $news_list['NEWS_ID']); ?>"><?php echo $news_list['NEWS_TITLE']; ?></a>
								<div class="news_content"><?php echo word_limiter($news_list['NEWS_CONTENT'], 15); ?></div>
							</div>
						</div>
					<?php
						$i++;
						}
					?>
				</div>
			</div>
		</div>
	</section>
	<section id="other_detail">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 left-nav">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
						<li><a data-toggle="tab" href="#menu1">Women`s Health</a></li>
						<li><a data-toggle="tab" href="#menu2">Men`s Health</a></li>
						<li><a data-toggle="tab" href="#menu3">Children`s Health</a></li>
					</ul>

					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<?php
								$i = 0;
								foreach($news_lists as $news) {
									if($i == 5) break;
							?>
							<div class="block">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 detail_img">
										<img src="<?php echo base_url('assets/img/news-img/'. $news['NEWS_IMAGE']); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 detail_news">
										<a href="<?php echo base_url('news/details/'. $news['NEWS_ID']); ?>">
											<h3><?php echo $news['NEWS_TITLE']; ?></h3>
											<p><?php echo word_limiter($news['NEWS_CONTENT'], 20); ?></p>
										</a>
									</div>
								</div>
							</div>
							<?php
									$i++;
								}
							?>
						</div>
						<div id="menu1" class="tab-pane fade">
								<div class="block">
									<?php
										$i = 0;
										foreach($news_lists as $news) {
											if($i == 3) break;
									?>
									<div class="block">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 detail_img">
												<img src="<?php echo base_url('assets/img/news-img/'. $news['NEWS_IMAGE']); ?>">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 detail_news">
												<a href="<?php echo base_url('news/details/'. $news['NEWS_ID']); ?>">
													<h3><?php echo $news['NEWS_TITLE']; ?></h3>
													<p><?php echo word_limiter($news['NEWS_CONTENT'], 20); ?></p>
												</a>
											</div>
										</div>
									</div>
									<?php
											$i++;
										}
									?>
							</div>
						</div>
						<div id="menu2" class="tab-pane fade">
								<div class="block">
									<?php
										$i = 0;
										foreach($news_lists as $news) {
											if($i == 4) break;
									?>
									<div class="block">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 detail_img">
												<img src="<?php echo base_url('assets/img/news-img/'. $news['NEWS_IMAGE']); ?>">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 detail_news">
												<a href="<?php echo base_url('news/details/'. $news['NEWS_ID']); ?>">
													<h3><?php echo $news['NEWS_TITLE']; ?></h3>
													<p><?php echo word_limiter($news['NEWS_CONTENT'], 20); ?></p>
												</a>
											</div>
										</div>
									</div>
									<?php
											$i++;
										}
									?>
							</div>
						</div>
						<div id="menu3" class="tab-pane fade">
							<div class="block">
								<?php
									$i = 0;
									foreach($news_lists as $news) {
										if($i == 2) break;
								?>
								<div class="block">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 detail_img">
											<img src="<?php echo base_url('assets/img/news-img/'. $news['NEWS_IMAGE']); ?>">
										</div>
										<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 detail_news">
											<a href="<?php echo base_url('news/details/'. $news['NEWS_ID']); ?>">
												<h3><?php echo $news['NEWS_TITLE']; ?></h3>
												<p><?php echo word_limiter($news['NEWS_CONTENT'], 20); ?></p>
											</a>
										</div>
									</div>
								</div>
								<?php
										$i++;
									}
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 right-ad">
					<div class="ad">
						<img src="<?php echo base_url('assets/img/farmers.jpg'); ?>">
					</div>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 adv">
							<img src="<?php echo base_url('assets/img/farmers.jpg'); ?>">
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 adv">
							<img src="<?php echo base_url('assets/img/farmers.jpg'); ?>">
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
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 tip">
					
					<img src="<?php echo base_url('assets/img/farmers.jpg'); ?>">
					<p class="text-justify">Women's Health Tips for Heart, Mind, and Body</p>
				</div>
				<?php } ?>
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
</body>
</html>
