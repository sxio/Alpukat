<!-- Stephen 27 Nov 16 -->
<!DOCTYPE html>
<html>
<head>
	<title><?php echo ucfirst($title) ?></title>
	<?php require_once __DIR__.'/templates/header.php'; ?>

	<?php echo link_tag('assets/css/main.css') ?>
	<?php echo link_tag('assets/css/login.css') ?>
	<?php echo link_tag('assets/css/register.css') ?>
	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
	<script src="<?php echo base_url() ?>assets/js/user.js"></script>
</head>
<body>
	<?php require_once __DIR__."/templates/nav.php"; ?>
	<!-- Tab -->
	<div class="container text-center" id="user">
		<ul class="nav nav-pills">
			<li class="active"><a  href="#logIn" data-toggle="tab"><i class="fa fa-sign-in fa-fw"></i> Log In</a></li>
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
			<!--  -->
			<div class="tab-pane" id="register">
				<!-- Meikelwis 27 Nov 16 -->
				<form action="index.html" method="post" class="register" id="formRegister">
					<h1>Sign Up</h1>
					<div class="row">
						<div class="col-sm-6">
							<fieldset class="register" id="basic">
							  <legend><span class="number">1</span>Your basic info</legend>
							  <label for="name">Name:</label>
							  <input type="text" id="name" name="user_name">

							  <label for="mail">Email:</label>
							  <input type="email" id="mail" name="user_email">

							  <label for="password">Password:</label>
							  <input type="password" id="password" name="user_password">

							  <label for="date_birth">Date Time:</label>
							  <input type="date" id="date_birth" name="date_birth">


							  <label>Age:</label>
							  <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Under 13</label><br>
							  <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13" class="light">13 or older</label>
							</fieldset>
						</div>
						<div class="col-sm-6">
							<fieldset class="register" id="profile">
							  <legend><span class="number">2</span>Your profile</legend>
							  <label for="bio">Biography:</label>
							  <textarea id="bio" name="user_bio"></textarea>

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
							  <optgroup label="Administrator">
							    <option value="admin">Addministrator</option>
							  </optgroup>
							</select>
							  <label>Interests:</label>
							  <input type="checkbox" id="health" value="health" name="user_interest"><label class="light" for="health">Health</label><br>
							    <input type="checkbox" id="charity" value="charity" name="user_interest"><label class="light" for="donate">Charity</label><br>
							  <input type="checkbox" id="business" value="business" name="user_interest"><label class="light" for="business">Business</label>
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