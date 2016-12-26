<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<?php echo $header; ?>

	<?php echo link_tag('assets/css/nav.css') ?>
	<?php echo link_tag('assets/css/news/news_details.css') ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body id="news_news">
	<?php echo $nav; ?>
	<section id="news_head">
		<h1 class="avohealthnews"><i class="fa fa-newspaper-o fa-fw"></i>Avo Health News<p>The Right Place to Learn About Health</p></h1>
	</section>
	<section id="news_body">
		<div id="tags">
			<ul>
				<li id="tag_head"> Category </li>
				<li><a href="#">#<?php echo $news_detail['CAT_NAME']; ?></a></li>
			</ul>
		</div>
		<div class="container">
			<div class="row">
				<ol class="breadcrumb">
				    <li><a href="<?php echo base_url('news'); ?>">News</a></li>
				    <li class="active">News Details</li>
		  		</ol>
				<div class="col-sm-8">
					<h1 class="news_title"><?php echo $news_detail['NEWS_TITLE']; ?></h1>
					<h4 class="news_post_time">
						<!-- Jumat, 16 Desember 2016 | 21:07 WIB -->
						<?php echo nice_date($news_detail['NEWS_DT'], 'l, d F Y | h:i'); ?>
					</h4>
					<div class="news_content">
						<?php if($news_detail['NEWS_IMAGE'] != "noimage.jpg") { ?>
						<img class="news_images" src="<?php echo base_url('assets/img/news-img/'. $news_detail['NEWS_IMAGE']); ?>">
						<?php } ?>
						<div class="text-justify news_text_content">
							<?php echo $news_detail['NEWS_CONTENT']; ?>
						</div>
						<p class="author">
							Author : <?php echo $news_detail['USER_NAME']; ?>
						</p>
					</div>
				</div>
				<div class="col-sm-4 details_adv">
					<img src="<?php echo base_url('assets/img/farmers.jpg'); ?>">
					<img src="<?php echo base_url('assets/img/farmers.jpg'); ?>">
					<img src="<?php echo base_url('assets/img/farmers.jpg'); ?>">
				</div>
			</div>
		</div>
	</section>

</body>
</html>