<!DOCTYPE HTML>
<html>
<head>
	<title>AvoStore | Purchase</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>

	<?php echo link_tag('assets/css/estore/estore.css') ?>
	<?php echo link_tag('assets/css/estore/epurchase.css') ?>

	<script src="<?php echo base_url('assets/js/estore/estore.js'); ?>"></script>
</head>
<body>
	<?php echo $enav; ?>
	<!--banner-->
	<div class="banner1">
		<div class="container">
			<h3><a href="<?php echo base_url('estore'); ?>">Home</a> / <a href="<?php echo base_url('estore/ecart'); ?>">Cart</a> / <span>Purchase</span></h3>
		</div>
	</div>
	<!--banner-->
	<br>
	<div class="container">
		<div class="panel panel-info">
			<div class="panel-heading text-center">
				<h2>Review Item</h2>
			</div>
			<div class="panel-body">
				<p>You've Ordered :</p>
				<ol class="list-group" id="review">
					<li class="list-group-item list-group-item-info">Black Backpack Multipurpose <span class="badge">1</span></li>
					<li class="list-group-item list-group-item-info">Black Backpack Multipurpose <span class="badge">1</span></li>
					<li class="list-group-item list-group-item-info">Black Backpack Multipurpose <span class="badge">1</span></li>
				</ol>
				<h3>Total: <b><?php echo 'IDR '. number_format(85000*3, 2, ',', '.'); ?></b></h3>
				<code>If you have mistaken set the quantity or have any changes <a href="<?php echo base_url('estore/ecart'); ?>">click here</a> to back before proceed</code>

				<br>
				<p>Your order will be deliver to you address: <u><i>Jalan Thamrin Kampus T lantai 3 paling ujung</i></u></p>
				<p>Transport Fee: IDR 0,00</p>
			</div>
			<div class="panel-footer">
				<div class="panel panel-primary">
					<div class="panel-heading">Grand Total</div>
					<div class="panel-body">
						<kbd><?php echo 'IDR '. number_format(85000*3, 2, ',', '.'); ?></kbd>
					</div>
					<div class="panel-footer clearfix">
						<a href="<?php echo base_url('estore/epayment'); ?>" class="btn btn-success pull-right"><i class="fa fa-check fa-fw"></i> Proceed</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>

	<?php echo $efooter; ?>
</body>
</html>