<?php if($this->session->tempdata('admin_username') == NULL) redirect('admin/login'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Remove News</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-news'); ?>">Manage News</a></li>
			<li class="active">Remove News</li>
		</ol>
	</div>

	<div class="container">
			<div class="row">
			<?php
				$attrib = array('class' => 'form-horizontal');
				echo form_open('', $attrib);
			?>
				<div class="panel panel-primary">
					<div class="panel-heading"><h2 class="text-center"><i class="fa fa-trash fa-fw"></i> Remove News</h2></div>
					<div class="panel-body">
						looping here fetch data from database
					</div>
					<div class="panel-footer text-right">
						<button class="btn btn-danger"><i class="fa fa-trash fa-fw"></i> Remove</button>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html>