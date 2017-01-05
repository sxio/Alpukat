<!DOCTYPE html>
<html>
<head>
	<title>Avocado | User</title>
	<?php echo $header; ?>

	<?php echo link_tag('assets/css/login.css') ?>
	<?php echo link_tag('assets/css/register.css') ?>
	<?php echo link_tag('assets/css/verify-doctor.css') ?>
	<?php echo link_tag('assets/css/nav.css') ?>
	<script src="<?php echo base_url('assets/js/user.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body id="bckimg">
	<?php echo $nav; ?>
	<?php
		if(isset($err_regis) || $this->session->flashdata('msgRegis') != NULL){
			$activeL = '';
			$activeR = 'active';
		} else{
			$activeL = 'active';
			$activeR = '';
		}
	?>
	<!-- Tab -->
	<div class="container text-center" id="user">
		<ul class="nav nav-pills">
			<!-- <li class="<?php echo $activeL; ?> pill"><a href="#logIn" data-toggle="tab"><i class="fa fa-sign-in fa-fw"></i> Log In</a></li> -->
			<!-- <li class="<?php echo $activeL; ?> pill"><a href="#register" data-toggle="tab"><i class="fa fa-sign-out fa-fw"></i> Register</a></li> -->
		</ul>
	</div>
	<!-- Tab Content -->
	<div id="account" class="container">
		<div class="tab-content clearfix">
			<div class="tab-pane <?php echo $activeL; ?>" id="register">
				<!-- Meikelwis 27 Nov 16 -->
				<?php
					$attrib = array('class' => 'register');
					echo form_open('register/regis', $attrib);
				?>
					<h1>Document Submit</h1>
					<?php
						if($this->session->flashdata('msgRegis') != NULL){
							echo $this->session->flashdata('msgRegis');
						}
						if(isset($err_regis) && $err_regis != NULL){
							$validError = "<div class='alert alert-danger text-center'>". $err_regis. "</div>";
							echo $validError;
						}
					?>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<fieldset class="register" id="basic">
								<legend>Your Documents</legend>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="form-group">
										<label class="control-label" for="image">Photo (a px x b px)</label>
										<textarea>Place the picture here</textarea>
										<input type="file" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="image">Certificate of Competence</label>
										<textarea>Place the picture here</textarea>
										<input type="file" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="image">Practice License</label>
										<textarea>Place the picture here</textarea>
										<input type="file" name="">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="form-group">
										<label class="control-label" for="image">Proof of Registration</label>
										<textarea>Place Your Photo here</textarea>
										<input type="file" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="image">Consultation Fee</label>
										<input type="number" name="" min="50000" step="5000">
									</div>
									<div class="form-group">
										<label class="control-label" for="image">Booking Fee</label>
										<input type="number" name="" min="100000" step="5000">
									</div>
								</div>
								<!-- <label for="name">Full Name:</label>
								<input type="text" name="user_name" value="<?php echo set_value('user_name') ?>">

								<label for="mail">Email:</label>
								<input type="email" name="user_email" value="<?php echo set_value('user_email') ?>">

								<label for="password">Password:</label>
								<input type="password" name="user_password">

								<label for="password">Confirm Password:</label>
								<input type="password" name="user_password_conf"> -->
								<button type="submit" id="docsubmit">Sign Up</button>
							</fieldset>
						</div>
					</div>
				<?php echo form_close(); ?>

			</div>
		</div>
	</div>
	<!-- end tab content -->
</body>
</html>
