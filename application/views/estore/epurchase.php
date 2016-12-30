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

	<br>
	<div class="container">
		<div class="panel panel-info">
			<div class="panel-heading text-center">
				<h2>Review Item</h2>
			</div>
			<div class="panel-body">
				<p>You've Ordered :</p>
				<ol class="list-group" id="review">
					<?php foreach($cart as $item): ?>
						<li class="list-group-item list-group-item-info"><?php echo $item['name']; ?> <span class="badge"><?php echo $item['qty']; ?></span></li>
					<?php endforeach; ?>
				</ol>
				<h3>Total: <b><?php echo 'RP '. number_format($total, 0, ',', '.'); ?></b></h3>
				<code>If you have mistaken set the quantity or have any changes <a href="<?php echo base_url('estore/ecart'); ?>">click here</a> to back before proceed</code>

				<br>
				<!-- <p>Your order will be deliver to you address: <u><i><?php echo $user_info['USER_ADDRESS']; ?></i></u></p> -->
				<!-- <p>Transport Fee: RP 0</p> -->
			</div>
			<div class="panel-footer">
				<div class="panel panel-primary">
					<div class="panel-heading">Grand Total</div>
					<div class="panel-body">
						<kbd><?php echo 'RP '. number_format($total, 0, ',', '.'); ?></kbd>
					</div>
					<div class="panel-footer clearfix">
						<a href="<?php echo base_url('payment/estore/form-payment'); ?>" class="btn btn-success pull-right"><i class="fa fa-check fa-fw"></i> Proceed</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>

	<?php echo $efooter; ?>
</body>
</html>
