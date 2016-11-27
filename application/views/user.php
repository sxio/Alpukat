<!DOCTYPE html>
<html>
<head>
	<title><?php echo ucfirst($title) ?></title>
	<?php require_once __DIR__.'/templates/header.php'; ?>

	<?php echo link_tag('assets/css/user.css') ?>
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
						<p class="title">Log in</p>
						<input type="text" placeholder="Username" autofocus/>
						<i class="fa fa-user"></i>
						<input type="password" placeholder="Password" />
						<i class="fa fa-key"></i>
						<a href="#">Forgot your password?</a>
						<button id="btnLogIn">
							<i class="spinner"></i>
							<span class="state">Log in</span>
						</button>
					</form>
					</p>
				</div>
			</div>
			<div class="tab-pane" id="register">
				<form id="formRegister">

				</form>
			</div>
		</div>
	</div>
	<!-- end tab content -->
</body>
</html>