<!DOCTYPE HTML>
<html>
<head>
	<title>AvoStore | Purchase</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>

	<?php echo link_tag('assets/css/estore/estore.css') ?>
	<?php echo link_tag('assets/css/estore/epayment.css') ?>

	<script src="<?php echo base_url('assets/js/estore/estore.js'); ?>"></script>
</head>
<body>
	<?php echo $enav; ?>
	<!--banner-->
	<div class="banner1">
		<div class="container">
			<h3><a href="<?php echo base_url('estore'); ?>">Home</a> / <a href="<?php echo base_url('estore/ecart'); ?>">Cart</a> / <span>Payment</span></h3>
		</div>
	</div>
	<!--banner-->
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<form action="" method="post" class="form-horizontal">
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
							<div class="panel-heading"><h3 style="margin:0">Important !</h3></div>
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
					<button name="payValidateBtn" type="submit" class="col-md-4 btn btn-primary"><b>Proceed</b></button>
					<div class="col-md-4" id="message"></div>
				</form>
			</div>
		</div>
	</div>
	<br>

	<?php echo $efooter; ?>
</body>
</html>