<!DOCTYPE HTML>
<html>
<head>
	<title>AvoStore | Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>

	<?php echo link_tag('assets/css/estore/estore.css') ?>

	<script src="<?php echo base_url('assets/js/estore/estore.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/cart.js'); ?>"></script>
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
				<h2>My Cart (<?php echo $total_items; ?>)</h2>
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
						foreach($cart as $items) { ?>

						<tr>
							<td><img src="<?php echo base_url('assets/img/estore-img/'. $items['img']); ?>" class="img-responsive img-cart"></td>
							<td><a href="<?php echo base_url('estore/detail/'.$items['id']); ?>"><?php echo $items['name']; ?></a></td>
							<td><?php echo $items['qty']; ?></td>
							<td><?php echo number_format($items['price'], 2, ',', '.'); ?></td>
							<td><?php echo number_format($items['subtotal'], 2, ',', '.'); ?></td>
							<td><a href="<?php echo base_url('estore/removeitem/'.$items['rowid']); ?>" class="btn btn-warning"><i class="fa fa-trash fa-fw"></i> Remove</a></td>
						</tr>

					<?php } ?>
					<tr>
						<td colspan="4" class="text-right">Total: </td>
						<td><?php echo number_format($total, 2, ',', '.'); ?></td>
						<td><a href="<?php echo base_url('estore/epurchase'); ?>" class="btn btn-success">Purchase <i class="fa fa-opencart fa-fw"></i></a></td>
					</tr>
				</table>
			</div>
		</div>

	</div>

	<?php echo $efooter; ?>
</body>
</html>