<!DOCTYPE html>
<html>
<head>
	<title>Admin | Manage Category</title>
	<?php echo $admin_header; ?>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li class="active">Manage Category</li>
		</ol>
		<h2 class="text-center"><i class="fa fa-list fa-fw"></i> Master Category</h2>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/category/addmastercategory'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-plus fa-5x fa-fw"></i><br><h2>Add Category</h2></button>
				</a>
			</div>
		</div>
		<br>
	</div>
</body>
</html>