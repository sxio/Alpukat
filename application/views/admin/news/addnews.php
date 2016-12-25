<!DOCTYPE html>
<html>
<head>
	<title>Admin | Add News</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>

	<script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-news'); ?>">Manage News</a></li>
			<li class="active">Add News</li>
		</ol>
	</div>

	<div class="container">
		<div class="row">
			<?php if(isset($form_error) && $form_error != null) { ?>
				<div class="alert alert-danger text-center"><?php echo $form_error; ?></div>
			<?php }; ?>
			<?php
				$attrib = array('class' => 'form-horizontal');
				echo form_open('admin/news/addnews', $attrib);
			?>
				<div class="panel panel-primary">
					<div class="panel-heading"><h2 class="text-center"><i class="fa fa-plus fa-fw"></i> Add News</h2></div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label col-sm-2" for="newsID">News ID:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="newsID" id="newsID" placeholder="News ID" autofocus value="<?php echo set_value('newsID'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="cat">Category:</label>
							<div class="col-sm-10">
								<select name="newsCategory" id="cat" class="form-control">
									<option>Abortion</option>
									<option>Acid Reflux / GERD</option>
									<option>Addiction</option>
									<option>ADHD / ADD</option>
									<option>Aid / Disasters</option>
									<option>Alcohol / Illegal Drugs</option>
									<option>Allergy</option>
									<option>Alternative Medicine</option>
									<option>Alzheimer's / Dementia</option>
									<option>Anxiety / Stress</option>
									<option>Arthritis / Rheumatology</option>
									<option>Asbestos / Mesothelioma</option>
									<option>Asthma</option>
									<option>Autism</option>
									<option>Back Pain</option>
									<option>Bio-terrorism / Terrorism</option>
									<option>Biology / Biochemistry</option>
									<option>Bipolar</option>
									<option>Bird Flu / Avian Flu</option>
									<option>Blood / Hematology</option>
									<option>Body Aches</option>
									<option>Bones / Orthopedics</option>
									<option>Breast Cancer</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="title">Title:</label>
							<div class="col-sm-10">
								<input type="text" name="newsTitle" id="title" class="form-control" placeholder="News Title" value="<?php echo set_value('newsTitle'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="content">Content:</label>
							<div class="col-sm-10">
								<textarea name="newsContent" id="content" class="form-control" placeholder="News Content"><?php echo set_value('newsContent'); ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="author">Author:</label>
							<div class="col-sm-10">
								<input type="text" name="newsAuthor" id="author" class="form-control" readonly value="<?php echo $this->session->userdata('admin_username'); ?>">
							</div>
						</div>
					</div>
					<div class="panel-footer text-right">
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
		CKEDITOR.replace('newsContent');
	</script>
</body>
</html>