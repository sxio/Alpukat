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
				<h3 class="text-center orderid">Order #<?php echo $estore_hist[0]['ORDER_ID']; ?></h3>
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<ol class="listorderdetail">
								<li>
									<label class="col-md-4 control-label">Customer Name </label>
									<div class="col-md-8">
										<p>: Uvuvwevwevwe</p>
									</div>
								</li>
								<li>
									<label class="col-md-4 control-label">Order date </label>
									<div class="col-md-8">
										<p>: 01 / 01 / 0001</p>
									</div>
								</li>
								<li>
									<label class="col-md-4 control-label">Bank Name </label>
									<div class="col-md-8">
										<p>: Bank ABC</p>
									</div>
								</li>
								<li>
									<label class="col-md-4 control-label">Transfer Date </label>
									<div class="col-md-8">
										<p>: 02 / 02 / 0002</p>
									</div>
								</li>
								<li>
									<label class="col-md-4 control-label">Transport By </label>
									<div class="col-md-8">
										<p>: JNE</p>
									</div>
								</li>
								<li>
									<label class="col-md-4 control-label">Transport Fee </label>
									<div class="col-md-8">
										<p>: 100 M</p>
									</div>
								</li>
							</ol>
						</div>

						<div class="col-sm-6">
							<ol class="listorderdetail">
								<li>
									<label class="col-md-4 control-label">Address </label>
									<div class="col-md-8">
										<p>: Uvuvwevwevwe</p>
									</div>
								</li>
								<li>
									<label class="col-md-4 control-label">Province </label>
									<div class="col-md-8">
										<p>: North Sumatra</p>
									</div>
								</li>
								<li>
									<label class="col-md-4 control-label">City </label>
									<div class="col-md-8">
										<p>: Medan</p>
									</div>
								</li>
								<li>
									<label class="col-md-4 control-label">Zip Code </label>
									<div class="col-md-8">
										<p>: 9814709184</p>
									</div>
								</li>
							</ol>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h4 class="headfortablehover">Product Detail</h4>
							<table class="table table-hover">
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
									<tr>
										<td>12345</td>
										<td>Doe</td>
										<td>Rp 100.000.000,-</td>
										<td>2</td>
										<td>Apparel</td>
										<td>Rp 200.000.000,-</td>
									</tr>
									<tr>
										<td>67891</td>
										<td>Moe</td>
										<td>Rp 200.000.000,-</td>
										<td>3</td>
										<td>Fitness Products</td>
										<td>Rp 600.000.000,-</td>
									</tr>
									<tr>
										<td>01234</td>
										<td>Dooley</td>
										<td>Rp 300.000.000,-</td>
										<td>4</td>
										<td>Medical Supplies</td>
										<td>Rp 1.200.000.000,-</td>
									</tr>
							    </tbody>
							  </table>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col-sm-12">
						<ol class="listonpanelfooter">
							<li>
								<label class="col-md-4 control-label">Total Items </label>
								<div class="col-md-8">
									<p>: 9</p>
								</div>
							</li>
							<li>
								<label class="col-md-4 control-label">Grand Total </label>
								<div class="col-md-8">
									<p>: Rp 2.000.000.000,-</p>
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
