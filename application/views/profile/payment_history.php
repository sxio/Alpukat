	<!DOCTYPE html>
<html>
<head>
	<title>Avocado | Payment History</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/profile/dashboard.css'); ?>
	<?php echo link_tag('assets/css/profile/paymentHistory.css'); ?>

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
							<caption>Estore History</caption>
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
					<?php
						// FOR USER
						if(!$is_doctor) {
					?>
					<div class="tableoverflow">
						<table class="table table-bordered booking-history">
							<caption>Booking History</caption>
							<thead>
								<tr>
									<th>Booking No</th>
									<th>Doctor</th>
									<th>Service</th>
									<th>Booking Date</th>
									<th>Fee</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($hist as $hist){ ?>
								<tr>
									<td><?php echo $hist['BOOKING_ID'];?></td>
									<td><a href="<?php echo base_url('profile/doctor/'.$hist['DCT_ID']); ?>"><?php echo $hist['DCT_ID'];?></a></td>
									<td><?php echo $hist['SERV_ID']; ?></td>
									<td><?php echo nice_date($hist['BOOKING_DT'],"d M Y"); ?></td>
									<td>Rp <?php echo number_format($hist['TOTAL_AMOUNT'],0,',','.');?></td>
									<?php
										if ($hist['STATUS'] == 'PENDING') $label = 'warning';
										elseif ($hist['STATUS'] == 'REJECTED') $label = 'danger';
										elseif ($hist['STATUS'] == 'ACCEPTED') $label = 'info';
										elseif ($hist['STATUS'] == 'DONE') $label = 'success';
									?>
									<td><span class="label label-<?php echo $label; ?>"><?php echo $hist['STATUS']; ?></span></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<?php } elseif ($is_doctor) {
							// FOR DOCTOR MANAGE BOOKING
					?>
					<div class="tableoverflow">
						<table class="table table-bordered booking-history">
							<caption>Booking History</caption>
							<thead>
								<tr>
									<th>Booking No</th>
									<th>Service</th>
									<th>Booking Date</th>
									<th>Fee</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($hist as $hist){ ?>
								<tr>
									<td><?php echo $hist['BOOKING_ID'];?></td>
									<td><?php echo $hist['SERV_ID']; ?></td>
									<td><?php echo nice_date($hist['BOOKING_DT'],"d M Y"); ?></td>
									<td>Rp <?php echo number_format($hist['TOTAL_AMOUNT'],0,',','.');?></td>
									<?php
										if ($hist['STATUS'] == 'PENDING') $label = 'warning';
										elseif ($hist['STATUS'] == 'REJECTED') $label = 'danger';
										elseif ($hist['STATUS'] == 'ACCEPTED') $label = 'info';
										elseif ($hist['STATUS'] == 'DONE') $label = 'success';
									?>
									<td><span class="label label-<?php echo $label; ?>"><?php echo $hist['STATUS']; ?></span></td>
									<td>
										<a href="<?php echo base_url('booking/manage/accepted/'.$hist['BOOKING_ID']); ?>" class="btn btn-info"><i class="fa fa-check fa-fw"></i></a>
										<a href="<?php echo base_url('booking/manage/rejected/'.$hist['BOOKING_ID']); ?>" class="btn btn-danger"><i class="fa fa-remove fa-fw"></i></a>
										<a href="<?php echo base_url('booking/manage/done/'.$hist['BOOKING_ID']); ?>" class="btn btn-success"><i class="fa fa-check-square-o fa-fw"></i></a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<?php
					} ?>
					<!-- TABLE DONATE -->
					<div class="tableoverflow">
						<table class="table table-condensed table-responsive table-bordered">
							<caption>Donate History</caption>
							<tr>
								<th>Donate ID</th>
								<th>Bank</th>
								<th>Account Number</th>
								<th>Amount</th>
							</tr>
							<?php foreach($donate as $don) { ?>
							<tr>
								<td><?php echo $don['DONATE_ID']; ?></td>
								<td><?php echo $don['BANK_TYPE']; ?></td>
								<td><?php echo $don['BANK_ACC_NUM']; ?></td>
								<td>Rp <?php echo number_format($don['AMOUNT'], 0, ',','.'); ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>