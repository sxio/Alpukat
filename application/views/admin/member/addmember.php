<!DOCTYPE html>
<html>
<head>
	<title>Admin | Add Member</title>
	<?php echo $admin_header; ?>
</head>
<body>
	<?php echo $admin_nav; ?>
	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-member'); ?>">Manage Member</a></li>
			<li class="active">Add Member</li>
		</ol>
	</div>
	<div class="container">
			<?php if(isset($form_error) && $form_error != null) { ?>
				<div class="alert alert-danger text-center"><?php echo $form_error; ?></div>
			<?php } ?>
			<?php if(isset($msg) && $msg != null) echo $msg; ?>
			<?php
				$attrib = array('class' => 'form-horizontal');
				echo form_open('admin/member/addmember', $attrib);
			?>
			<div class="panel panel-primary">
				<div class="panel-heading"><h2 class="text-center"><i class="fa fa-user-plus fa-fw"></i> Add Member</h2></div>
				<div class="panel-body">
					<div class="form-group">
						<label class="control-label col-sm-2" for="userId">Member ID :</label>
						<div class="col-sm-10">
							<input type="text" name="userId" id="userId" class="form-control" placeholder="Member ID" autofocus value="<?php echo set_value('userId'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="userName">Full Name :</label>
						<div class="col-sm-10">
							<input type="text" name="userName" id="userName" class="form-control" placeholder="Full Name" value="<?php echo set_value('userName'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="userPass">Password :</label>
						<div class="col-sm-10">
							<input type="password" name="userPass" id="userPass" class="form-control" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="retypePass">Retype Password :</label>
						<div class="col-sm-10">
							<input type="password" name="retypePass" id="retypePass" class="form-control" placeholder="Retype Password">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="userEmail">Email :</label>
						<div class="col-sm-10">
							<input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="Email" value="<?php echo set_value('userEmail'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="userAddr">Address</label>
						<div class="col-sm-10">
							<input type="tel" name="userAddr" id="userAddr" class="form-control" placeholder="Address" value="<?php echo set_value('userAddr'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="userBirth">Birthday :</label>
						<div class="col-sm-10">
							<input type="date" name="userBirth" id="userBirth" class="form-control" value="<?php echo set_value('userBirth'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="userHP">Phone Number</label>
						<div class="col-sm-10">
							<input type="tel" name="userHP" id="userHP" class="form-control" placeholder="Phone Number" value="<?php echo set_value('userHP'); ?>">
						</div>
					</div>
				</div>
				<div class="panel-footer text-right">
					<a href="<?php echo base_url('admin/member/addmember'); ?>" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i> Reset</a>
					<button class="btn btn-success"><i class="fa fa-user-plus fa-fw"></i> Submit</button>
				</div>
			</div>
			<?php echo form_close(); ?>
	</div>
	<br>
	<br>
	<br>
</body>
</html>