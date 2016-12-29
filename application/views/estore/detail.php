<!DOCTYPE html>
<html>
<head>
	<title>AvoStore | Detail</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/estore/estore.css') ?>
	<?php echo link_tag('assets/css/estore/detail.css') ?>
	<?php echo link_tag('assets/css/flatbutton.css') ?>

	<script src="<?php echo base_url('assets/js/estore/cart.js'); ?>"></script>
</head>
<body>
	<?php echo $enav; ?>
	<div class="container margintop-20">
		<div class="row">
			<ul class="breadcrumb">
				<li><a href="<?php echo base_url('estore'); ?>">E-Home</a></li>
				<li><a href="#"><?php echo $product['CAT_NAME']; ?></a></li>
				<li class="active"><?php echo $product['PROD_NAME']; ?></li>
			</ul>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<img src="<?php echo base_url('assets/img/estore-img/'. $product['PROD_IMG']); ?>" class="img-responsive">
			</div>
			<div class="col-sm-8">
				<h1><?php echo $product['PROD_NAME']; ?></h1>
				<br>
				<h3><?php echo 'RP '. number_format($product['PROD_PRICE'],2,',','.'); ?></h3>
				<br>
				<div class="product-desc text-justify"><?php echo $product['PROD_DESC']; ?></div>
				<br>
				<div class="row">
					<div class="col-sm-4">
						<input type="hidden" id="prod_id" name="prod_id" value="<?php echo $product['PROD_ID']; ?>">
						<button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt text-center" id="addtocart"><i class="fa fa-opencart fa-fw"></i> Add to Cart</button>
					</div>
					<div class="col-sm-4">
						<a href="" class="btn btn-link"><b>How to buy</b><i class="fa fa-question fa-fw"></i></a>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>

	<?php echo $efooter; ?>
</body>
</html>