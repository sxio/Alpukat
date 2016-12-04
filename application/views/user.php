<!-- Stephen 27 Nov 16 -->
<!DOCTYPE html>
<html>
<head>
	<title>Avocado | User</title>
	<?php require_once __DIR__.'/templates/header.php'; ?>

	<?php echo link_tag('assets/css/login.css') ?>
	<?php echo link_tag('assets/css/register.css') ?>
	<?php echo link_tag('assets/css/nav.css') ?>
	<script src="<?php echo base_url() ?>assets/js/user.js"></script>
</head>
<body id="bckimg">		
	<?php require_once __DIR__."/templates/nav.php"; ?>
	<?php 
		if($this->session->flashdata('msgRegis') != NULL || validation_errors() != null){
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
			<li class="<?php echo $activeL; ?>"><a href="#logIn" data-toggle="tab"><i class="fa fa-sign-in fa-fw"></i> Log In</a></li>
			<li class="<?php echo $activeR; ?>"><a href="#register" data-toggle="tab"><i class="fa fa-sign-out fa-fw"></i> Register</a></li>
		</ul>
	</div>
	<!-- Tab Content -->
	<div id="account" class="container">
		<div class="tab-content clearfix">
			<div class="tab-pane <?php echo $activeL; ?>" id="logIn">
				<div class="wrapper">
					<form class="login">
						<h1>Log In</h1>
						<input type="text" placeholder="Username" name="LuserName">
						<i class="fa fa-user"></i>

						<input type="password" placeholder="Password" name="Lpassword">
						<i class="fa fa-key"></i>

						<a href="#" id="forgotPass">Forgot your password <i class="fa fa-question-circle fa-fw"></i></a>
						<button id="btnLogIn">
							<i class="spinner"></i>
							<span class="state">Log in</span>
						</button>
					</form>
				</div>
			</div>
			<!--	-->
			<div class="tab-pane <?php echo $activeR; ?>" id="register">
				<!-- Meikelwis 27 Nov 16 -->
				<!-- <form action="index.html" method="post" class="register" id="formRegister"> -->
				<?php
					$attrib = array('class' => 'register');
					echo form_open('register/regis', $attrib);
				?>
					<h1>Sign Up</h1>
					<?php
						if($this->session->flashdata('msgRegis') != NULL){
							echo $this->session->flashdata('msgRegis');
						}
						if(validation_errors() != NULL){
							$validError = "<div class='alert alert-danger text-center'>". validation_errors(). "</div>";
							echo $validError;
						}
					?>
					<div class="row">
						<div class="col-sm-6">
							<fieldset class="register" id="basic">
								<legend><span class="number">1</span>Your basic info</legend>
								<label for="userid">Username:</label>
								<input type="text" name="user_id" value="<?php echo set_value('user_id') ?>">

								<label for="name">Full Name:</label>
								<input type="text" name="user_name" value="<?php echo set_value('user_name') ?>">

								<label for="mail">Email:</label>
								<input type="email" name="user_email" value="<?php echo set_value('user_email') ?>">

								<label for="password">Password:</label>
								<input type="password" name="user_password" value="<?php echo set_value('user_password') ?>">
							</fieldset>
						</div>
						<div class="col-sm-6">
							<fieldset class="register" id="profile">
								<legend><span class="number">2</span>Your profile</legend>
								<label for="date_birth">Birthday:</label>
								<input type="date" name="date_birth"  value="<?php echo set_value('date_birth') ?>">

								<label for="handphone">Handphone</label>
								<input type="tel" name="handphone" value="<?php echo set_value('handphone') ?>">

								<label for="telephone">Telephone</label>
								<input type="tel" name="telephone" value="<?php echo set_value('telephone') ?>">

								<label for="job">Role:</label>
								<select name="user_role" value="<?php echo set_value('user_role') ?>">
									<optgroup label="Doctor">
										<option value="2">Doctor</option>
										<option value="3">Specialist Doctor</option>
									</optgroup>
									<optgroup label="Pacient">
										<option value="1">Pacient</option>
									</optgroup>
								</select>
							</fieldset>
							<button type="submit">Sign Up</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
	<!-- end tab content -->
</body>
</html>