<!DOCTYPE html>
<html>
<head>
	<title>Admin | Manage News</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li class="active">Manage News</li>
		</ol>
		<h2 class="text-center"><i class="fa fa-newspaper-o fa-fw"></i> NEWS</h2>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/news/addnews'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-plus fa-5x fa-fw"></i><br><h2>Add News</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/news/listnews'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-edit fa-5x fa-fw"></i><br><h2>Edit News</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/news/listnews'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-trash fa-5x fa-fw"></i><br><h2>Delete News</h2></button>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="<?php echo base_url('admin/news/addcategory'); ?>"><button class="flat-butt flat-double-butt flat-info-butt flat-info-double-butt">
					<i class="fa fa-list fa-5x fa-fw"></i><br><h2>Add Category</h2></button>
				</a>
			</div>
		</div>
		<br>
	</div>
</body>
</html>