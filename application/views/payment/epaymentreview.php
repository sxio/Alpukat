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
	<div class="container">
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
                            <p>: <?php echo $form_input['grandtotal']; ?></p>
                        </div>
                    </li>
				</ol>
				<code>If you have mistaken set the value or have any changes <a href="<?php echo base_url('estore/payment/form'); ?>">click here</a> to back before proceed</code>

				<br>
                <br>
            </div>
            <div class="panel-footer text-right">
                <a href="<?php echo base_url('payment/success/estore'); ?>" class="btn btn-success"><i class="fa fa-check fa-fw"></i> Proceed</a>
			</div>
		</div>
	</div>
    <br>
    <br>
	<br>
</body>
</html>
