<?php if($this->session->tempdata('username') != NULL) redirect() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Avocado | Reset Password</title>
	<?php echo $header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/forgotPassword.css'); ?>
	<script src="<?php echo base_url('assets/js/user.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body id="bckimg">
	<?php echo $nav; ?>
	<div class="container" id="fpass_wrapper">
		<?php echo form_open('forgotPassword/requestReset'); ?>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-info">
					<?php if(!isset($msg)) { ?>
					<div class="panel-heading">
						<h3 class="text-center">Reset Your Password</h3>
					</div>
					<div class="panel-body text-center">
						<?php
							if(isset($err_reset) && $err_reset != NULL){
								$validError = "<div class='alert alert-danger text-center'>". $err_reset. "</div>";
								echo $validError;
							}
						?>
						<?php echo form_hidden('email_hash', $email_hash); ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span><input type="password" name="password" class="form-control" placeholder="New Password" autofocus>
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span><input type="password" name="cpassword" class="form-control" placeholder="Retype New Password">
						</div>
						<br>
					</div>
					<div class="panel-footer text-right">
						<button class="btn btn-success form-control"><i class="fa fa-check fa-fw"></i> Submit</button>
					</div>
					<?php } else { ?>
					<div class="panel-heading">
						<h3 class="text-center">Reset Your Password</h3>
					</div>
					<div class="panel-body text-center">
						<h5><?php echo $msg; ?></h5>
					</div>
					<div class="panel-footer text-right">
						<a href="<?php echo base_url('user'); ?>" class="btn btn-success form-control"><i class="fa fa-arrow-left fa-fw"></i> Login</a>
					</div>
					<?php }; ?>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
		<?php echo form_close(); ?>
	</div>
</body>
</html>