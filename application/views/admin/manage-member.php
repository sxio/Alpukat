<!DOCTYPE html>
<html>
<head>
	<title>Admin | Manage Member</title>
	<?php echo $admin_header; ?>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li class="active">Manage Member</li>
		</ol>
		<h2 class="text-center"><i class="fa fa-user fa-fw"></i> MEMBER</h2>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/member/addmember'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-user-plus fa-5x fa-fw"></i><br><h2>Add Staff</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/member/addrole'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-plus-circle fa-5x fa-fw"></i><br><h2>Add Role</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/member/listmember'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-list fa-5x fa-fw"></i><br><h2>Staff List</h2></button>
				</a>
			</div>
		</div>
		<br>
	</div>
</body>
</html>