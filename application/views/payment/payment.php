<!DOCTYPE HTML>
<html>
<head>
	<title>Avocado | Payment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>
	<?php echo link_tag('assets/css/payment/payment.css') ?>
	<?php echo link_tag('assets/css/nav.css') ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>

	<?php
		if($this->session->flashdata('estore_pay') !== NULL){
	?>
	<!-- ESTORE PAYMENT -->
	<br>
	<div class="container payment">
		<div class="row">

		</div>
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 class="text-center">Payment Form</h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<form method="post" class="form-horizontal">
							<ul class="list-unstyled">
								<li class="form-group">
									<label class="col-md-4 control-label" for="banktype">Bank Name</label>
									<div class="col-md-8">
										<select class="form-control" name="banktype">
											<option value=""></option>
											<option value="BCA">BCA</option>
											<option value="BNI">BNI</option>
											<option value="BRI">BRI</option>
											<option value="Mandiri">Bank Mandiri</option>
											<option value="Maybank">Bank Maybank Indonesia</option>
											<option value="CIMB">CIMB Niaga</option>
											<option value="Danamon">Danamon</option>
										</select>
									</div>
								</li>
								<li class="form-group">
									<label class="col-md-4 control-label" for="banknumber">Bank Account Number</label>
									<div class="col-md-8">
										<input class="form-control" type="text" name="banknumber" placeholder="Your bank account number">
									</div>
								</li>
								<li class="form-group">
									<label class="col-md-4 control-label" for="bankAccName">Bank Account Name</label>
									<div class="col-md-8">
										<input class="form-control" type="text" name="bankAccName" id="bankAccName" placeholder="Your bank account name">
									</div>
								</li>
								<li class="form-group">
									<label for="transport" class="col-md-4 control-label">Transport By</label>
									<div class="col-md-8">
										<select class="form-control" name="transport">
											<option value=""></option>
											<option value="JNE">JNE</option>
											<option value="TIKI">TIKI</option>
										</select>
									</div>
								</li>
								<li class="form-group">
									<label for="date_tf" class="col-md-4 control-label">Date Transfer</label>
									<div class="col-md-8 date">
										<select name="date_tf" class="form-control">
											<option value=""></option>
											<option value=""><?php echo date('d-m-Y'); ?></option>
										</select>
									</div>
								</li>
							</ul>
							<div class="col-md-8">
								<div class="panel panel-danger">
									<div class="panel-heading"><h3>Important !</h3></div>
									<div class="panel-body">
										To transfer, please transfer to this account :
										<ul>
											<li>Bank Name : <b>BCA</b></li>
											<li>Bank Account Number : <b>1253152536714</b></li>
											<li>Bank Account Name : <b>AvoStore</b></li>
										</ul>
										<hr>
										<div>
											After transfer, You need to attach the transfer receipt to <b>avocado.mails@yahoo.com</b>, within following subject format, <br>"AvoOrder - [Order Code]".<br>
											Example : AvoOrder - [12345678]
										</div>
									</div>
								</div>
							</div>
							<a href="<?php echo base_url('payment/success/estore') ?>" name="btn_estore_pay" class="col-md-4 btn btn-primary"><b>Proceed</b></a>
							<div class="col-md-4" id="message"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<!-- ESTORE PAYMENT -->
	<?php } elseif ($this->session->flashdata('booking_pay') !== NULL) { ?>
	<!-- BOOKING PAYMENT -->
	<br>
	<div class="container payment">
		<div class="row"></div>
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 class="text-center">Payment Form</h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-3">
						<img src="<?php echo base_url('assets/img/doctor.jpg'); ?>" id="fotoDokter">
					</div>
					<div class="col-sm-8">
						<form method="post" class="form-horizontal">
							<ul class="list-unstyled">
								<li class="form-group">
									<label class="col-md-3 control-label" for="book_no">Booking No</label>
									<div class="col-md-8">
										<input class="form-control" type="text" name="book_no">
									</div>
								</li>
								<li class="form-group">
									<label class="col-md-3 control-label" for="doctorName">Doctor Name</label>
									<div class="col-md-8">
										<input class="form-control" type="text" name="doctorName">
									</div>
								</li>
								<li class="form-group">
									<label class="col-md-3 control-label" for="serviceName">Service Name</label>
									<div class="col-md-8">
										<input class="form-control" type="text" name="serviceName">
									</div>
								</li>
								<li class="form-group">
									<label class="col-md-3 control-label" for="amount">Amount</label>
									<div class="col-md-8">
										<input class="form-control" type="text" name="amount">
									</div>
								</li>
								<li class="form-group">
									<label class="col-md-3 control-label" for="date">Booking Date</label>
									<div class="col-md-8">
										<input class="form-control" type="text" name="date">
									</div>
								</li>
							</ul>
							<a href="<?php echo base_url('payment/success/booking'); ?>" name="btn_booking_pay" class="col-md-12 btn btn-primary"><b>Proceed</b></a>
							<div class="col-md-4" id="message"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<!-- BOOKING PAYMENT -->
	<?php } elseif($this->session->flashdata('donate_pay') !== NULL) { ?>
	<!-- DONATE PAYMENT -->
	<br>
	<div class="container payment">
		<div class="row">

		</div>
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 class="text-center">Payment Form</h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<form method="post" class="form-horizontal">
							<ul class="list-unstyled">
								<li class="form-group">
									<label class="col-md-4 control-label" for="banktype">Bank Name</label>
									<div class="col-md-8">
										<select class="form-control" name="banktype">
											<option value=""></option>
											<option value="BCA">BCA</option>
											<option value="BNI">BNI</option>
											<option value="BRI">BRI</option>
											<option value="Mandiri">Bank Mandiri</option>
											<option value="Maybank">Bank Maybank Indonesia</option>
											<option value="CIMB">CIMB Niaga</option>
											<option value="Danamon">Danamon</option>
										</select>
									</div>
								</li>
								<li class="form-group">
									<label class="col-md-4 control-label" for="banknumber">Bank Account Number</label>
									<div class="col-md-8">
										<input class="form-control" type="text" name="banknumber" placeholder="Your bank account number">
									</div>
								</li>
								<li class="form-group">
									<label class="col-md-4 control-label" for="bankAccName">Bank Account Name</label>
									<div class="col-md-8">
										<input class="form-control" type="text" name="bankAccName" id="bankAccName" placeholder="Your bank account name">
									</div>
								</li>
								<li class="form-group">
									<label for="number" class="col-md-4 control-label">Amount</label>
									<div class="col-md-8">
										<input type="number" name="number" class="form-control" min="10000" step="10000" onkeydown="return false">
									</div>
								</li>
								<li class="form-group">
									<label for="behalf" class="col-md-4 control-label">Name</label>
									<div class="col-md-8">
										<input type="text" name="behalf" class="form-control">
									</div>
								</li>
								<li class="form-group">
									<label for="date_tf" class="col-md-4 control-label">Date Transfer</label>
									<div class="col-md-8 date">
										<select name="date_tf" class="form-control">
											<option value=""></option>
											<option value=""><?php echo date('d-m-Y'); ?></option>
										</select>
									</div>
								</li>
							</ul>
							<a href="<?php echo base_url('payment/success/donate'); ?>" name="btn_donate_pay" class="col-md-12 btn btn-primary"><b>Proceed</b></a>
							<div class="col-md-4" id="message"></div>
						</form>
					</div>
				</div>
				<div class="btn-group pull-right">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle text-center" data-toggle="dropdown"><h2>Donate List</h2><i class="fa fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <div class="col-sm-12">
                            <div class="container">
								<div class="panel-heading">
									<h2>Donate List</h2>
								</div>
								<div class="panel-body">
									<div class="list-payment">
										<div class="row">
											<table class="table donate-list table-bordered table-responsive">
												<tr>
													<th class="col-sm-3">Donate Name</th>
													<th class="col-sm-3">Total Amount</th>
												</tr>
												<tr>
													<td class="col-sm-3">John</td>
													<td class="col-sm-3">2000000</td>
												</tr>
												<tr>
													<td class="col-sm-3">Mary</td>
													<td class="col-sm-3">35000000</td>
												</tr>
												<tr>
													<td class="col-sm-3">July</td>
													<td class="col-sm-3">400000000</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
                			</div>
	                    </div>
                    </ul>
                </div>
			</div>
		</div>
	</div>
	<br>

	<!-- DONATE PAYMENT -->
	<?php }; ?>
</body>
</html>