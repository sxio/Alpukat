<!DOCTYPE HTML>
<html>
<head>
	<title>AvoStore | Review Your Items</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>

	<?php echo link_tag('assets/css/estore/estore.css') ?>
	<?php echo link_tag('assets/css/estore/epaymentreview.css') ?>

	<script src="<?php echo base_url('assets/js/estore/estore.js'); ?>"></script>
</head>
<body>
	<?php echo $enav; ?>

	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<div class="panel panel-info">
				<div class="panel-heading text-center">
					<h2>Review Payment</h2>
				</div>
				<div class="panel-body">
					<p>Your Payment details :</p>
					<ol class="list-group" id="review">
						<li class="list-group-item list-group-item-info">
							<label class="col-md-4 control-label">Shopping ID </label>
							<div class="col-md-8">
								<p>: <?php echo $form_input['shoppingid']; ?></p>
							</div>
						</li>
						<li class="list-group-item list-group-item-info">
							<label class="col-md-4 control-label">Name </label>
							<div class="col-md-8">
								<p>: <?php echo $form_input['buyername']; ?></p>
							</div>
						</li>
						<li class="list-group-item list-group-item-info">
							<label class="col-md-4 control-label">Address </label>
							<div class="col-md-8">
								<p>: <?php echo $form_input['buyeraddress']; ?></p>
							</div>
						</li>
						<li class="list-group-item list-group-item-info">
							<label class="col-md-4 control-label">Bank Name </label>
							<div class="col-md-8">
								<p>: <?php echo $form_input['banktype']; ?></p>
							</div>
						</li>
						<li class="list-group-item list-group-item-info">
							<label class="col-md-4 control-label">Bank Account Number </label>
							<div class="col-md-8">
								<p>: <?php echo $form_input['banknumber']; ?></p>
							</div>
						</li>
						<li class="list-group-item list-group-item-info">
							<label class="col-md-4 control-label">Bank Account Name </label>
							<div class="col-md-8">
								<p>: <?php echo $form_input['bankAccName']; ?></p>
							</div>
						</li>
						<li class="list-group-item list-group-item-info">
							<label class="col-md-4 control-label">Transport By </label>
							<div class="col-md-8">
								<p>: <?php echo $form_input['transport']; ?></p>
							</div>
						</li>
						<li class="list-group-item list-group-item-info">
							<label class="col-md-4 control-label">Transport Fee </label>
							<div class="col-md-8">
								<p>: <?php echo $form_input['transfee']; ?></p>
							</div>
						</li>
						<li class="list-group-item list-group-item-info">
							<label class="col-md-4 control-label">Date Transfer </label>
							<div class="col-md-8">
								<p>: <?php echo $form_input['date_tf']; ?></p>
							</div>
						</li>
						<li class="list-group-item list-group-item-info">
							<label class="col-md-4 control-label">Grand Total </label>
							<div class="col-md-8">
								<p>: <?php echo 'RP ' . $form_input['grandtotal']; ?></p>
							</div>
						</li>
					</ol>
					<code>If you have mistaken set the value or have any changes <a href="<?php echo base_url('estore/payment/form'); ?>">click here</a> to back before proceed</code>

					<br>
					<br>
				</div>
				<div class="panel-footer text-right">
					<?php echo form_open('payment/success/estore'); ?>
					<?php echo form_hidden('shoppingid', $form_input['shoppingid']); ?>
					<?php echo form_hidden('buyerid', $form_input['buyerid']); ?>
					<?php echo form_hidden('buyeraddress', $form_input['buyeraddress']); ?>
					<?php echo form_hidden('banktype', $form_input['banktype']); ?>
					<?php echo form_hidden('banknumber', $form_input['banknumber']); ?>
					<?php echo form_hidden('bankAccName', $form_input['bankAccName']); ?>
					<?php echo form_hidden('date_tf', $form_input['date_tf']); ?>
					<?php echo form_hidden('transport', $form_input['transport']); ?>
					<?php echo form_hidden('transfee', $form_input['transfee']); ?>
					<?php echo form_hidden('total', $form_input['total']); ?>
					<button class="btn btn-success"><i class="fa fa-check fa-fw"></i> Proceed</button>
					<?php echo form_close(); ?>
				</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="text-center">Your Order</h3>
					</div>
					<div class="panel-body">
						<p>You have ordered:</p>
						<ol class="items">
							<?php foreach($cart as $items) { ?>
								<li>
									<?php echo $items['name']; ?>
									<span class="pull-right">x<?php echo $items['qty']; ?> = RP <?php echo number_format($items['price'] * $items['qty'],0,',','.'); ?>
									</span>
								</li>
							<?php } ?>
						</ol>
					</div>
					<div class="panel-footer clearfix">
						<a href="<?php echo base_url('estore/ecart'); ?>"></a>
						<span class="pull-right total">Total: RP <?php echo number_format($total,0,',','.'); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
</body>
</html>
