<!DOCTYPE HTML>
<html>
<head>
	<title>AvoStore | Purchase</title>
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
                            <p>: 979087fafasf9870987</p>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-info">
                        <label class="col-md-4 control-label">Name </label>
                        <div class="col-md-8">
                            <p>: Nama saya Budi</p>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-info">
                        <label class="col-md-4 control-label">Address </label>
                        <div class="col-md-8">
                            <p>: Alamat saya di Kutub Utara Jalan Penguin No.~ </p>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-info">
                        <label class="col-md-4 control-label">Bank Name </label>
                        <div class="col-md-8">
                            <p>: Bank Indonesia</p>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-info">
                        <label class="col-md-4 control-label">Bank Account Number </label>
                        <div class="col-md-8">
                            <p>: 1-0481209481-094812-098</p>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-info">
                        <label class="col-md-4 control-label">Bank Account Name </label>
                        <div class="col-md-8">
                            <p>: Uvuvwevwevwe</p>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-info">
                        <label class="col-md-4 control-label">Transport By </label>
                        <div class="col-md-8">
                            <p>: Ossas</p>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-info">
                        <label class="col-md-4 control-label">Transport Fee </label>
                        <div class="col-md-8">
                            <p>: 10 Jt</p>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-info">
                        <label class="col-md-4 control-label">Date Transfer </label>
                        <div class="col-md-8">
                            <p>: 01-01-0001</p>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-info">
                        <label class="col-md-4 control-label">Grand Total </label>
                        <div class="col-md-8">
                            <p>: 10 M</p>
                        </div>
                    </li>
				</ol>
				<!-- <h3>Total: <b><?php echo 'RP '. number_format($total, 0, ',', '.'); ?></b></h3> -->
				<code>If you have mistaken set the value or have any changes <a href="<?php echo base_url('payment/estore/form-payment'); ?>">click here</a> to back before proceed</code>

				<br>
                <br>
				<!-- <p>Your order will be deliver to you address: <u><i><?php echo $user_info['USER_ADDRESS']; ?></i></u></p> -->
				<!-- <p>Transport Fee: RP 0</p> -->
                <a href="<?php echo base_url('payment/success/estore'); ?>" class="btn btn-success pull-right"><i class="fa fa-check fa-fw"></i> Proceed</a>
			</div>
			<!-- <div class="panel-footer">
				<div class="panel panel-primary">
					<div class="panel-heading">Grand Total</div>
					<div class="panel-body">
						<kbd><?php echo 'RP '. number_format($total, 0, ',', '.'); ?></kbd>
					</div>
					<div class="panel-footer clearfix">
						<a href="<?php echo base_url('payment/estore/form-payment'); ?>" class="btn btn-success pull-right"><i class="fa fa-check fa-fw"></i> Proceed</a>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<br>

	<?php echo $efooter; ?>
</body>
</html>
