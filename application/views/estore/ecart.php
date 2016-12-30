<!DOCTYPE HTML>
<html>
<head>
	<title>AvoStore | Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>

	<?php echo link_tag('assets/css/estore/estore.css') ?>
	<?php echo link_tag('assets/css/flatbutton.css') ?>

	<script src="<?php echo base_url('assets/js/estore/estore.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/cart.js'); ?>"></script>
</head>
<body>
	<?php echo $enav; ?>

	<div class="container margintop-20">
		<div class="row">
			<ul class="breadcrumb">
				<li><a href="<?php echo base_url('estore'); ?>">E-Home</a></li>
				<li class="active">Cart</li>
			</ul>
		</div>
	</div>

	<div class="container">
		<?php if ($total_items > 0) { ?>
		<h3>My Cart (<?php echo $total_items; ?> items)</h3>
		<br>
		<table class="table table-responsive table-condensed table-bordered text-center" id="table-cart">
			<tr>
				<th>Image</th>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Price / Unit (RP)</th>
				<th>Price (RP)</th>
				<th>Action</th>
			</tr>
			<?php
				foreach($cart as $items) { ?>

				<tr>
					<td><img src="<?php echo base_url('assets/img/estore-img/'. $items['img']); ?>" class="img-responsive img-cart"></td>
					<td><a href="<?php echo base_url('estore/detail/'.$items['id']); ?>"><?php echo $items['name']; ?></a></td>
					<td>
						<?php if($items['qty'] == 1) { ?>
							<button class="btn btn-link" disabled><i class="fa fa-minus fa-fw"></i></button>
						<?php } else { ?>
							<a href="<?php echo base_url('estore/dec-qty/'. $items['rowid']); ?>" class="btn btn-link"><i class="fa fa-minus fa-fw"></i></a>
						<?php } ?>
						<?php echo $items['qty']; ?>
						<?php if($items['qty'] == 5) { ?>
							<button class="btn btn-link" disabled><i class="fa fa-plus fa-fw"></i></button>
						<?php }  else { ?>
							<a href="<?php echo base_url('estore/inc-qty/'. $items['rowid']); ?>" class="btn btn-link"><i class="fa fa-plus fa-fw"></i></a>
						<?php } ?>
					</td>
					<td><?php echo number_format($items['price'], 0, ',', '.'); ?></td>
					<td><?php echo number_format($items['subtotal'], 0, ',', '.'); ?></td>
					<td><a href="<?php echo base_url('estore/removeitem/'.$items['rowid']); ?>" class="btn btn-warning"><i class="fa fa-trash fa-fw"></i> Remove</a></td>
				</tr>

			<?php } ?>
			<tr>
				<td colspan="4" class="text-right">Total: </td>
				<td><?php echo number_format($total, 0, ',', '.'); ?></td>
				<td><a href="<?php echo base_url('estore/purchase'); ?>" class="btn btn-success">Purchase <i class="fa fa-opencart fa-fw"></i></a></td>
			</tr>
		</table>
		<?php } else { ?>
			<h1 class="text-center">Cart is empty</h1>
			<br>
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<a href="<?php echo base_url('estore'); ?>" class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">Go Back Shopping</a>
				</div>
				<div class="col-sm-4"></div>
			</div>
			<br>
		<?php } ?>
	</div>

	<?php echo $efooter; ?>
</body>
</html>