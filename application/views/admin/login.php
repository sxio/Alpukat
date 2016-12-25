<?php if($this->session->tempdata('admin_username') != NULL) redirect('admin/home'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login | Avocado</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css') ?>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<?php
					echo form_open('Admin/C_Admin_Login/login');
				?>
					<div class="panel panel-info">
						<div class="panel-heading text-center"><h3>Admin Login</h3></div>
						<?php if(isset($err_login) && $err_login != null){ ?>
							<div class="alert alert-danger text-center err_login"><?php echo $err_login; ?></div>
						<?php } else if($this->session->flashdata('msgLogin') != null){ ?>
							<?php echo $this->session->flashdata('msgLogin'); ?>
						<?php }; ?>
						<div class="panel-body">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
								<input type="text" name="admin_username" class="form-control" placeholder="Admin username" autofocus>
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
								<input type="password" name="admin_password" class="form-control" placeholder="Admin password">
							</div>
						</div>
						<div class="panel-footer text-right">
							<button class="btn btn-success"><i class="fa fa-paper-plane fa-fw"></i> Submit</button>
						</div>
					</div>
				<?php echo form_close(); ?>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>