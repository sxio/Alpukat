<!DOCTYPE html>
<html>
<head>
	<title>Avocado | About Us</title>
	<?php require_once __DIR__.'/templates/header.php'; ?>
	<?php echo link_tag('assets/css/nav.css') ?>
	<?php echo link_tag('assets/css/about_us.css') ?>
	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
</head>
<body id="abt">
	<?php require_once __DIR__."/templates/nav.php"; ?>
	<section id="us">
		<h1 id="founder" class="text-center">FOUNDER</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 member">
					<img class="img-responsive" src="<?php echo base_url() ?>assets/img/141110043.jpg">
					<p class="text-center">Kenedy Lukito</p>
					<p class="text-center">141110043</p>
				</div>
				<div class="col-sm-4 member">
					<img class="img-responsive" src="<?php echo base_url() ?>assets/img/141112460.jpg">
					<p class="text-center">Meikelwis Wijaya</p>
					<p class="text-center">141112460</p>
				</div>
				<div class="col-sm-4 member">
					<img class="img-responsive" src="<?php echo base_url() ?>assets/img/141110868.jpg">
					<p class="text-center">Stephen</p>
					<p class="text-center">141110868</p>
				</div>
			</div>
		</div>
	</section>
</body>
</html>