<!DOCTYPE html>
<html>
<head>
	<title>Admin | Avocado</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li class="active">Home</li>
		</ol>
		<div class="row">
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/manage-news'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-newspaper-o fa-5x fa-fw"></i><br><h2>News</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href=""><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-commenting-o fa-5x fa-fw"></i><br><h2>Forum</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/manage-estore'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-opencart fa-5x fa-fw"></i><br><h2>E-store</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href=""><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-dollar fa-5x fa-fw"></i><br><h2>Donation</h2></button>
				</a>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<a href=""><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-bell-o fa-5x fa-fw"></i><br><h2>Reminder</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/manage-member'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-user fa-5x fa-fw"></i><br><h2>Member</h2></button>
				</a>
			</div>
		</div>
		<br>
	</div>
</body>
</html>