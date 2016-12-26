<!DOCTYPE HTML>
<html>
<head>
	<title>AvoStore | Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>

	<?php echo link_tag('assets/css/estore/estore.css') ?>

	<script src="<?php echo base_url('assets/js/estore/estore.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/ecart.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/simpleCart.min.js'); ?>"></script>
</head>
<body>
	<?php echo $enav; ?>
	<!--banner-->
	<div class="banner1">
		<div class="container">
			<h3><a href="<?php echo base_url('estore'); ?>">Home</a> / <span>Cart</span></h3>
		</div>
	</div>
	<!--banner-->

	<!--content-->
	<div class="content">
		<div class="cart-items">
			<div class="container">
				<h2>My Shopping Bag (3)</h2>
				<table class="table table-responsive table-condensed table-bordered text-center" id="table-cart">
					<tr>
						<th>Image</th>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Price / Unit (IDR)</th>
						<th>Price (IDR)</th>
						<th>Action</th>
					</tr>
					<?php
						// $imgList = array('p15.jpg', 's1.jpg', 'i7.jpg');
						for($i = 0 ; $i < 3 ; $i++) { ?>

						<tr>
							<td><img src="<?php echo base_url('assets/img/e-img/s1.jpg'); ?>" class="img-responsive img-cart"></td>
							<td><a href="#">Black Backpack Multipurpose</a></td>
							<td>1</td>
							<td><?php echo number_format(85000, 2, ',', '.'); ?></td>
							<td><?php echo number_format(85000, 2, ',', '.'); ?></td>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-trash fa-fw"></i> Remove</a></td>
						</tr>

					<?php } ?>
					<tr>
						<td colspan="4" class="text-right">Total: </td>
						<td><?php echo number_format(85000*3, 2, ',', '.'); ?></td>
						<td><a href="<?php echo base_url('estore/epurchase'); ?>" class="btn btn-success">Purchase <i class="fa fa-opencart fa-fw"></i></a></td>
					</tr>
				</table>
			</div>
		</div>

	</div>

	<?php echo $efooter; ?>
</body>
</html>