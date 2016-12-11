<!DOCTYPE HTML>
<html>
<head>
	<title>AvoStore | Checkout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>

	<?php echo link_tag('assets/css/estore/estore.css') ?>

	<script src="<?php echo base_url('assets/js/estore/estore.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/echeckout.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/simpleCart.min.js'); ?>"></script>
</head>
<body>
	<?php echo $enav; ?>
	<!--banner-->
	<div class="banner1">
		<div class="container">
			<h3><a href="<?php echo base_url('estore'); ?>">Home</a> / <span>Checkout</span></h3>
		</div>
	</div>
	<!--banner-->

	<!--content-->
	<div class="content">
		<div class="cart-items">
			<div class="container">
				<h2>My Shopping Bag (3)</h2>
				<?php
					$imgList = array('p15.jpg', 's1.jpg', 'i7.jpg');
					for($i = 0 ; $i < 3 ; $i++) { ?>
				<div class="cart-header">
					<i class="fa fa-remove fa-fw close"> </i>
					<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							<img src="<?php echo base_url('assets/img/e-img'). '/' . $imgList[$i]; ?>" class="img-responsive" alt="">
						</div>
						<div class="cart-item-info">
							<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
							<ul class="qty">
								<li><p>Min. order value:</p></li>
								<li><p>FREE delivery</p></li>
							</ul>
							<div class="delivery">
								<p>Service Charges : $10.00</p>
								<span>Delivered in 1-1:30 hours</span>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	<!-- checkout -->
	</div>

	<?php echo $efooter; ?>
</body>
</html>