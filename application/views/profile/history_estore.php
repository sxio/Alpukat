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
					<div class="col-xs-12 col-sm-12 col-xs-8 col-lg-8 centering_text">
						<h3>Order Detail</h3>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 centering_text">
						<span class="pull-right"><?php echo nice_date($estore_hist[0]['ORDER_DATE'], 'l, d F Y | H:i:s'); ?></span>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<h3 class="text-center orderid">Order #<?php echo $estore_hist[0]['ORDER_ID']; ?></h3>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<ul class="listorderdetail list-unstyled">
								<li>
									<label class="col-xs-6 control-label">Customer Name </label>
									<div class="col-xs-6">
										<p>: <?php echo $estore_hist[0]['USER_NAME']; ?></p>
									</div>
								</li>
								<li>
									<label class="col-xs-6 control-label">Order date </label>
									<div class="col-xs-6">
										<p>: <?php echo nice_date($estore_hist[0]['ORDER_DATE'], 'd / m / Y'); ?></p>
									</div>
								</li>
								<li>
									<label class="col-xs-6 control-label">Bank Name </label>
									<div class="col-xs-6">
										<p>: <?php echo $estore_hist[0]['BANK_TYPE']; ?></p>
									</div>
								</li>
								<li>
									<label class="col-xs-6 control-label">Transfer Date </label>
									<div class="col-xs-6">
										<p>: <?php echo nice_date($estore_hist[0]['TRANSFER_DATE'], 'd / m / Y'); ?></p>
									</div>
								</li>
							</ol>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<ul class="listorderdetail list-unstyled">
								<li>
									<label class="col-xs-6 control-label">Transport By </label>
									<div class="col-xs-6">
										<p>: <?php echo $estore_hist[0]['TRANSPORT']; ?></p>
									</div>
								</li>
								<li>
									<label class="col-xs-6 control-label">Transport Fee </label>
									<div class="col-xs-6">
										<p>:  <?php echo $estore_hist[0]['TRANSPORT_FEE']; ?></p>
									</div>
								</li>
								<li>
									<label class="col-xs-6 control-label">Address </label>
									<div class="col-xs-6">
										<p>:  <?php echo $estore_hist[0]['ORDER_ADDRESS']; ?></p>
									</div>
								</li>
								<!-- <li>
									<label class="col-xs-6 control-label">Province </label>
									<div class="col-xs-6">
										<p>: North Sumatra</p>
									</div>
								</li>
								<li>
									<label class="col-xs-6 control-label">City </label>
									<div class="col-xs-6">
										<p>: Medan</p>
									</div>
								</li>
								<li>
									<label class="col-xs-6 control-label">Zip Code </label>
									<div class="col-xs-6">
										<p>: 9814709184</p>
									</div>
								</li> -->
							</ol>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h4 class="headfortablehover">Product Detail</h4>
							<div class="tableoverflow">
								<table class="table table-hover table-condensed table-responsive table-bordered">
								    <thead>
										<tr>
											<th>Product ID</th>
											<th>Product name</th>
											<th>Unit Price</th>
											<th>Quantity</th>
											<th>Category</th>
											<th>Subtotal</th>
										</tr>
								    </thead>
								    <tbody>
								    	<?php
								    		$quan = 0;
								    		$subtotal = 0;
								    		$gtotal = 0;
								    		foreach($estore_hist as $items) {
								    			$quan += $items['QUANTITY'];
								    			$subtotal = $items['PRICE'] * $items['QUANTITY'];
								    			$gtotal += $subtotal;
								    	?>
								    	<tr>
								    		<td><?php echo $items['PROD_ID']; ?></td>
								    		<td><?php echo $items['PROD_NAME']; ?></td>
								    		<td>RP <?php echo number_format($items['PRICE'],0,',','.'); ?></td>
								    		<td><?php echo $items['QUANTITY']; ?></td>
								    		<td><?php echo $items['CAT_NAME']; ?></td>
								    		<td>RP <?php echo number_format($subtotal,0,',','.'); ?></td>
								    	</tr>
								    	<?php } ?>
								    </tbody>
								  </table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col-sm-12">
						<ol class="listonpanelfooter">
							<li>
								<label class="col-xs-6 control-label">Total Items </label>
								<div class="col-xs-6">
									<p>: <?php echo $quan; ?></p>
								</div>
							</li>
							<li>
								<label class="col-xs-6 control-label">Grand Total </label>
								<div class="col-xs-6">
									<p>: RP <?php echo number_format($gtotal,0,',','.'); ?></p>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
