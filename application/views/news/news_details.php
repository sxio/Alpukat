<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<?php echo $header; ?>

	<?php echo link_tag('assets/css/nav.css') ?>
	<?php echo link_tag('assets/css/news/news_details.css') ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>
	<section id="news_head">
		<h1 class="avohealthnews">Avo Health News</h1>
	</section>

</body>
</html>