<!DOCTYPE html>
<html>
<head>
	<title>Admin | Category</title>
	<?php echo $admin_header; ?>
	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>
	<?php echo link_tag('assets/css/admin/news/addcategory.css'); ?>

</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-news'); ?>">Manage News</a></li>
			<li class="active">Add Category</li>
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
				echo form_open('', $attrib);
			?>
				<div class="panel panel-primary">
					<div class="panel-heading"><h2 class="text-center"><i class="fa fa-list fa-fw"></i> Add Category</h2></div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label col-sm-2" for="catID">Category ID:</label>
							<div class="col-sm-10">
								<input type="text" name="categoryID" class="form-control" id="catID" autofocus value="<?php echo set_value('categoryID'); ?>" placeholder="Category ID">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="catName">Category Name:</label>
							<div class="col-sm-10">
								<input type="text" name="categoryName" class="form-control" id="catName" autofocus value="<?php echo set_value('categoryName'); ?>" placeholder="Category Name">
							</div>
						</div>
					</div>
					<div class="panel-footer text-right">
						<button class="btn btn-success"><i class="fa fa-paper-plane fa-fw"></i> Submit</button>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
		<div class="row">
			<table class="table table-condensed header-fixed">
				<caption>Current Categories ( <?php echo $num_row_cat; ?> )</caption>
				<thead>
					<tr>
						<th>ID</th>
						<th>NAME</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($curr_cat as $category){ ?>
						<tr>
							<td><?php echo $category['CAT_ID']; ?></td>
							<td><?php echo $category['CAT_NAME']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>