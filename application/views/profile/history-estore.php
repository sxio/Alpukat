<!DOCTYPE html>
<html>
<head>
	<title>AvoStore History</title>
	<?php echo $header; ?>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<?php echo link_tag('assets/css/profile/history-estore.css'); ?>

</head>
<body>
	<?php echo $nav; ?>

	<div class="container-fluid margintop">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-8">
						<h3>Order Detail</h3>
					</div>
					<div class="col-sm-4">
						<span class="pull-right"><?php echo nice_date($estore_hist[0]['ORDER_DATE'], 'l, d F Y | H:i:s'); ?></span>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<h3 class="text-center">Order #<?php echo $estore_hist[0]['ORDER_ID']; ?></h3>
			</div>
			<div class="panel-footer">

			</div>
		</div>
	</div>
</body>
</html>
