<!DOCTYPE html>
<html>
<head>
	<title>Admin | List Member</title>
	<?php echo $admin_header; ?>
	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>

</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-member'); ?>">Manage Member</a></li>
			<li class="active">Member List</li>
		</ol>
	</div>

	<div class="container">
		<div class="row">

		</div>
	</div>
</body>
</html>