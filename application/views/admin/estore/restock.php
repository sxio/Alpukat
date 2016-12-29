<!DOCTYPE html>
<html>
<head>
	<title>Admin | Restock</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/admin/news/addcategory.css'); ?>

	<script src="<?php echo base_url('assets/js/admin/restock.js'); ?>"></script>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-estore'); ?>">Manage E-Store</a></li>
			<li class="active">Restock</li>
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
				echo form_open('admin/estore/restock', $attrib);
			?>
				<div class="panel panel-primary">
					<div class="panel-heading"><h2 class="text-center"><i class="fa fa-list fa-fw"></i> Add Category</h2></div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label col-sm-2" for="catID">Category:</label>
							<div class="col-sm-10">
								<select name="catID" id="catID" class="form-control" autofocus>
									<option value="" hidden>-- Category --</option>
									<?php foreach($categories as $category) { ?>
									<option value="<?php echo $category['CAT_ID']; ?>"><?php echo $category['CAT_NAME']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="prodID">Product ID:</label>
							<div class="col-sm-10">
								<select name="prodID" id="prodID" class="form-control">
									<option value="" hidden>-- Product --</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="prodQuan">Quantity:</label>
							<div class="col-sm-10">
								<input type="number" name="prodQuan" id="prodQuan" class="form-control" placeholder="Quantity">
							</div>
						</div>
					</div>
					<div class="panel-footer text-right">
						<label class="control-label pull-left" id="curr_quan"></label>
						<input type="hidden" id="baseURL" name="baseURL" value="<?php echo base_url(); ?>">
						<button class="btn btn-success"><i class="fa fa-paper-plane fa-fw"></i> Submit</button>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</body>
</html>