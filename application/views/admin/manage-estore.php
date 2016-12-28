<!DOCTYPE html>
<html>
<head>
	<title>Admin | Manage E-Store</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li class="active">Manage E-Store</li>
		</ol>
		<h2 class="text-center"><i class="fa fa-user fa-fw"></i> E-STORE</h2>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/estore/addproduct'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-plus fa-5x fa-fw"></i><br><h2>Add Product</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/estore/restock'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-cubes fa-5x fa-fw"></i><br><h2>Restock</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/estore/paymentlist'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-check-square-o fa-5x fa-fw"></i><br><h2>Payment List</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/estore/addcategory'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-list fa-5x fa-fw"></i><br><h2>Add Category</h2></button>
				</a>
			</div>
		</div>
		<br>
	</div>
</body>
</html>