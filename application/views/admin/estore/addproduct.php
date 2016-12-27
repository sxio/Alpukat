<!DOCTYPE html>
<html>
<head>
	<title>Admin | Add Product</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>
	<?php echo link_tag('assets/css/admin/news/editnews.css'); ?>

	<script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-estore'); ?>">Manage E-Store</a></li>
			<li class="active">Add Product</li>
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
				echo form_open_multipart('admin/estore/addproduct', $attrib);
			?>
				<div class="panel panel-primary">
					<div class="panel-heading"><h2 class="text-center"><i class="fa fa-plus fa-fw"></i> Add Product</h2></div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label col-sm-2" for="prodID">Product ID:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="prodID" id="prodID" placeholder="Product ID" autofocus value="<?php echo set_value('prodID'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="prodName">Product Name:</label>
							<div class="col-sm-10">
								<input type="text" name="prodName" id="prodName" class="form-control" placeholder="Product Name" value="<?php echo set_value('prodName'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="cat">Category:</label>
							<div class="col-sm-10">
								<select name="prodCat" id="cat" class="form-control">
									<option value="" hidden>-- Category --</option>
									<?php foreach($categories as $category){ ?>
										<option value="<?php echo $category['CAT_ID']; ?>"><?php echo $category['CAT_NAME']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="prodQuant">Quantity:</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="prodQuant" id="prodQuant" placeholder="Quantity" value="<?php echo set_value('prodQuant'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="prodPrice">Price:</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="prodPrice" id="prodPrice" placeholder="Price" autofocus value="<?php echo set_value('prodPrice'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="prodDesc">Descrption:</label>
							<div class="col-sm-10">
								<textarea name="prodDesc" id="prodDesc" class="form-control"><?php echo set_value('prodDesc'); ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="image">Image:</label>
							<div class="col-sm-10">
								<?php
									if($estore_img == "noimage.jpg" || $estore_img == '' || !isset($estore_img)){
										$estore_img = '';
									} else{
										$estore_img = base_url('assets/img/estore-img/'.$estore_img);
									}
								?>
								<input type="file" name="userfile" id="image" class="form-control">
								<br>
								<img src="<?php echo $estore_img; ?>" alt="noimage" class="img-thumbnail img-responsive" id="preview">
							</div>
						</div>
					</div>
					<div class="panel-footer text-right">
						<a href="<?php echo base_url('admin/estore/addproduct'); ?>" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i> Reset</a>
						<button class="btn btn-success"><i class="fa fa-paper-plane fa-fw"></i> Submit</button>
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
	<script type="text/javascript">
		CKEDITOR.replace('prodDesc');

		document.getElementById('image').onchange = function(event){
			var img = document.getElementById('preview');
			img.src = URL.createObjectURL(event.target.files[0]);
		}
	</script>
</body>
</html>