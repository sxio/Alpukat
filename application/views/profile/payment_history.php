<!DOCTYPE html>
<html>
<head>
	<title>Avocado | Payment History</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/profile/dashboard.css'); ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>
	<div class="container margintop">
		<div class="row" id="paymentHistory">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 class="text-center"><i class="fa fa-history fa-fw"></i> Payment History</h2>
				</div>
				<div class="panel-body">
					<!-- TABLE ESTORE -->
					<div class="tableoverflow">
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
							<?php foreach($estore as $elist) { ?>
							<tr>
								<td><?php echo $elist->ORDER_ID; ?></td>
								<td><?php echo $elist->ORDER_ADDRESS; ?></td>
								<td><?php echo $elist->BANK_TYPE; ?></td>
								<td><?php echo $elist->BANK_ACC_NUM; ?></td>
								<td><?php echo $elist->TRANSPORT; ?></td>
								<?php
									if    ($elist->STATUS == 'PENDING')    $label = 'warning';
									elseif($elist->STATUS == 'ACCEPTED')   $label = 'success';
									elseif($elist->STATUS == 'REJECTED')   $label = 'danger';
									elseif($elist->STATUS == 'ONTHEWAY')   $label = 'info';
								?>
								<td><span class="label label-<?php echo $label; ?>"><?php echo $elist->STATUS; ?></span></td>
								<td>
								<a href="<?php echo base_url('profile/dashboard/history/estore/'. $elist->ORDER_ID); ?>" target="_blank" class="btn btn-info" value="<?php echo $elist->ORDER_ID; ?>"><i class="fa fa-list fa-fw"></i></a>
								</td>
							</tr>
							<?php } ?>
						</table>
					</div>

					<!-- TABLE BOOKING -->
					<div class="tableoverflow">
						<table class="table table-bordered booking-history">
							<caption>Booking History</caption>
							<tr>
								<th>Booking No</th>
								<th>Total Other Payment</th>
								<th>Total Amount</th>
								<th>Booking Date</th>
							</tr>
							<?php foreach($hist as $hist){ ?>
							<tr>
								<td><?php echo $hist->BOOKING_ID;?></td>
								<td><?php echo $hist->OTHER_PAYMENT;?></td>
								<td><?php echo $hist->TOTAL_PAYMENT;?></td>
								<td><?php echo $hist->BOOKING_DT;?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<!-- TABLE DONATE -->
					<div class="tableoverflow">
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
	</div>
</body>
</html>