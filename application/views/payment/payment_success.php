<!DOCTYPE HTML>
<html>
<head>
	<title>Avocado | Payment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>
	<?php echo link_tag('assets/css/payment/payment.css') ?>
	<?php echo link_tag('assets/css/payment/pay_success.css') ?>
	<?php echo link_tag('assets/css/nav.css') ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>

	<?php
		if($this->session->flashdata('estore_pay') !== NULL){
	?>
	<!-- ESTORE PAYMENT -->
	<br>
	<div class="container payment">
		<div class="row">
		</div>
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 class="text-center">Order Completed Successfully</h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-3">
						<span class="fa-stack fa-lg" id="check_logo">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-check fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					<div class="col-sm-9">
						<h2>Thankyou for purchasing - we appreciate your business.</h2>
						<h2>You will receive a confirmation email shortly.</h2>
					</div>
					<a href="<?php echo base_url('home'); ?>" class="btn btn-default" id="btn_home"><i class="fa fa-home fa-fw"></i> Home</a>
				</div>
			</div>
		</div>
	</div>
	<br>
	<!-- ESTORE PAYMENT -->
	<?php } elseif ($this->session->flashdata('booking_pay') !== NULL) { ?>
	<!-- BOOKING PAYMENT -->
	<br>
	<div class="container payment">
		<div class="row">
		</div>
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 class="text-center">Booking Completed Successfully</h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-3">
						<span class="fa-stack fa-lg" id="check_logo">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-check fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					<div class="col-sm-9">
						<h2>Thank you for booking.</h2>
						<h2>You will receive a confirmation email shortly.</h2>
					</div>
					<a href="<?php echo base_url('home'); ?>" class="btn btn-default" id="btn_home"><i class="fa fa-home fa-fw"></i> Home</a>
				</div>
			</div>
		</div>
	</div>
	<br>
	<!-- BOOKING PAYMENT -->
	<?php } elseif($this->session->flashdata('donate_pay') !== NULL) { ?>
	<!-- DONATE PAYMENT -->
	<br>
	<div class="container payment">
		<div class="row">
		</div>
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 class="text-center">Donation Completed Successfully</h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-3">
						<span class="fa-stack fa-lg" id="check_logo">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-check fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					<div class="col-sm-9">
						<h2>Thankyou for donating - we appreciate your business.</h2>
						<h2>You will receive a confirmation email shortly.</h2>
					</div>
					<a href="<?php echo base_url('home'); ?>" class="btn btn-default" id="btn_home"><i class="fa fa-home fa-fw"></i> Home</a>
				</div>
			</div>
		</div>
	</div>
	<br>

	<!-- DONATE PAYMENT -->
	<?php }; ?>
</body>
</html>