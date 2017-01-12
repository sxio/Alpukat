<!DOCTYPE html>
<html>
<head>
	<title>Admin | Manage Doctor</title>
	<?php echo $admin_header; ?>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li class="active">Manage Doctor</li>
		</ol>
		<h2 class="text-center"><i class="fa fa-user-md fa-fw"></i> Doctor</h2>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/doctor/add-category'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-plus fa-5x fa-fw"></i><br><h2>Add Category</h2></button>
				</a>
			</div>
		</div>
		<br>
	</div>
</body>
</html>