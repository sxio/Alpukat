<!DOCTYPE HTML>
<html>
<head>
	<title>Avocado | Payment History</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>
	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/profile/paymentHistory.css'); ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>

	<br>
	<div class="container history">
		<div class="row">
		</div>
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 class="text-center"><i class="fa fa-history fa-fw"></i> Payment History</h2>
				</div>
				<div class="panel-body">
					<table class="table table-condensed table-responsive table-bordered">
						<caption>AvoStore History</caption>
						<tr>
							<th>Payment ID</th>
							<th>Delivery Address</th>
							<th>Bank</th>
							<th>Account Number</th>
							<th>Delivery Type</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						<tr>
							<td>Avo-e-1</td>
							<td>Jalan Thamrin Kampus T Lantai 3 paling ujung</td>
							<td>BCA</td>
							<td>123</td>
							<td>JNE</td>
							<td><span class="label label-warning">Pending</span></td>
							<td><a href="#" class="btn btn-info"><i class="fa fa-list fa-fw"></i></a></td>
						</tr>
					</table>

					<table class="table table-condensed table-responsive table-bordered">
						<caption>Donate History</caption>
						<tr>
							<th>Donate ID</th>
							<th>Bank</th>
							<th>Account Number</th>
							<th>Amount</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						<tr>
							<td>Avo-d-1</td>
							<td>BCA</td>
							<td>123</td>
							<td>IDR 1.000.000,00</td>
							<td><span class="label label-success">Accepted</span></td>
							<td class="text-center"><a href="#" class="btn btn-info"><i class="fa fa-list fa-fw"></i></a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<br>
</body>
</html>