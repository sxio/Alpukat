<!DOCTYPE html>
<html>
<head>
	<title>Admin | Add Role</title>
	<?php echo $admin_header; ?>
	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>
	<?php echo link_tag('assets/css/admin/news/addcategory.css'); ?>

</head>
<body>
	<?php echo $admin_nav; ?>
	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-member'); ?>">Manage Member</a></li>
			<li class="active">Add Role</li>
		</ol>
	</div>
	<div class="container">
		<div class="row">
			<?php if(isset($form_error) && $form_error != null) { ?>
				<div class="alert alert-danger text-center"><?php echo $form_error; ?></div>
			<?php } ?>
			<?php if(isset($msg) && $msg != null) echo $msg; ?>
			<?php
				$attrib = array('class' => 'form-horizontal');
				echo form_open('admin/member/addrole', $attrib);
			?>
				<div class="panel panel-primary">
					<div class="panel-heading"><h2 class="text-center"><i class="fa fa-list fa-fw"></i> Add Category</h2></div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label col-sm-2" for="roleID">Role ID :</label>
							<div class="col-sm-10">
								<input type="number" name="roleID" class="form-control" id="roleID" autofocus placeholder="Role ID (ex: 1)">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="roleName">Role Name :</label>
							<div class="col-sm-10">
								<input type="text" name="roleName" class="form-control" id="roleName" placeholder="Role Name">
							</div>
						</div>
					</div>
					<div class="panel-footer text-right">
						<button class="btn btn-success"><i class="fa fa-paper-plane fa-fw"></i> Submit</button>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
		<div class="row">
			<table class="table table-condensed header-fixed">
				<caption>Current Role ( <?php echo $num_row_role; ?> )</caption>
				<thead>
					<tr>
						<th>Role ID</th>
						<th>Role</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($curr_role as $role){ ?>
						<tr>
							<td><?php echo $role['USER_LEVEL']; ?></td>
							<td><?php echo $role['USER_DESC']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>