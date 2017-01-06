<!DOCTYPE html>
<html>
<head>
	<title>Admin | List Comment</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/admin/news/listnews.css'); ?>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-comment'); ?>">Manage Comment</a></li>
			<li class="active">List Comment</li>
		</ol>
	</div>

	<div class="container">
		<div class="row">
			<div class="text-center">
				<?php echo $pagination; ?>
			</div>
		</div>
		<div class="row text-center">
			<div class="label label-primary">
				Showing <?php echo ($offset+1) . ' to ' .(count($lists) + $offset) . ' from ' . $count_all . ' records'; ?>
			</div>
		</div>
		<br>
		<div class="row">
			<?php foreach($lists as $list){ ?>
				<div class="well well-sm">
					<div class="row">
						<div class="col-sm-12">
						<span class="pull-right"><?php echo nice_date($list['CREATED_AT'], 'd F Y, H:i:s'); ?></span>
							<h1><?php echo $list['SUBJECT']; ?></h1>
							<h3><?php echo $list['EMAIL']; ?></h3>
							<p><?php echo $list['COMMENT']; ?></p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="row">
			<div class="text-center">
				<?php echo $pagination; ?>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html>