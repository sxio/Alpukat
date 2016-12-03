<!-- Stephen 27 Nov 16 -->
<!DOCTYPE html>
<html>
<head>
	<title><?php echo ucfirst($title) ?></title>
	<?php require_once __DIR__.'/templates/header.php'; ?>

	<?php echo link_tag('assets/css/login.css') ?>
	<?php echo link_tag('assets/css/register.css') ?>
	<?php echo link_tag('assets/css/nav.css') ?>
	<script src="<?php echo base_url() ?>assets/js/user.js"></script>
</head>
<body>
	<?php require_once __DIR__."/templates/nav.php"; ?>
	<!-- Tab -->
	<div class="container text-center" id="user">
		<ul class="nav nav-pills">
			<li class="active"><a href="#logIn" data-toggle="tab"><i class="fa fa-sign-in fa-fw"></i> Log In</a></li>
			<li><a href="#register" data-toggle="tab"><i class="fa fa-sign-out fa-fw"></i> Register</a></li>
		</ul>
	</div>
	<!-- Tab Content -->
	<div id="account" class="container">
		<div class="tab-content clearfix">
			<div class="tab-pane active" id="logIn">
				<div class="wrapper">
					<form class="login">
						<h1>Log In</h1>
						<input type="text" placeholder="Username" autofocus/>
						<i class="fa fa-user"></i>
						<input type="password" placeholder="Password" />
						<i class="fa fa-key"></i>
						<a href="#" id="forgotPass">Forgot your password <i class="fa fa-question-circle fa-fw"></i></a>
						<button id="btnLogIn">
							<i class="spinner"></i>
							<span class="state">Log in</span>
						</button>
					</form>
					</p>
				</div>
			</div>
			<!--	-->
			<div class="tab-pane" id="register">
				<!-- Meikelwis 27 Nov 16 -->
				<form action="index.html" method="post" class="register" id="formRegister">
					<h1>Sign Up</h1>
					<div class="row">
						<div class="col-sm-6">
							<fieldset class="register" id="basic">
								<legend><span class="number">1</span>Your basic info</legend>
								<label for="userid">Username:</label>
								<input type="text" id="userid" name="user_id">

								<label for="name">Full Name:</label>
								<input type="text" id="name" name="user_name">

								<label for="mail">Email:</label>
								<input type="email" id="mail" name="user_email">

								<label for="password">Password:</label>
								<input type="password" id="password" name="user_password">


							</fieldset>
						</div>
						<div class="col-sm-6">
							<fieldset class="register" id="profile">
								<legend><span class="number">2</span>Your profile</legend>
								<label for="date_birth">Birthday:</label>
								<input type="date" id="date_birth" name="date_birth">

								<label for="handphone">Handphone</label>
								<input type="tel" id="handphone" name="handphone">

								<label for="telephone">Telephone</label>
								<input type="tel" id="telephone" name="telephone">

								<label for="job">Role:</label>
								<select id="job" name="user_role">
									<optgroup label="Doctor">
										<option value="doctor">Doctor</option>
										<option value="specialict_doctor">Specialist Doctor</option>
									</optgroup>
									<optgroup label="Pacient">
										<option value="pacient">Pacient</option>
									</optgroup>
									<optgroup label="User">
										<option value="user">User</option>
									</optgroup>
									<!-- <optgroup label="Administrator">
										<option value="admin">Addministrator</option>
									</optgroup> -->
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