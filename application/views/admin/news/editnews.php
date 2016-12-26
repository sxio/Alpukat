<!DOCTYPE html>
<html>
<head>
	<title>Admin | Edit News</title>
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
			<li><a href="<?php echo base_url('admin/manage-news'); ?>">Manage News</a></li>
			<li><a href="<?php echo base_url('admin/news/listnews'); ?>">List News</a></li>
			<li class="active">Edit News</li>
		</ol>
	</div>

	<div class="container">
		<div class="row">
			<?php if(isset($form_error) && $form_error != null) { ?>
				<div class="alert alert-danger text-center"><?php echo $form_error; ?></div>
			<?php }; ?>
			<?php if(isset($msg) && $msg != null) echo $msg; ?>
			<?php
				$attrib = array('class' => 'form-horizontal');
				echo form_open_multipart('admin/news/editnews/'. $news['NEWS_ID'], $attrib);
			?>
				<div class="panel panel-primary">
					<div class="panel-heading"><h2 class="text-center"><i class="fa fa-pencil fa-fw"></i> Edit News</h2></div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label col-sm-2" for="newsID">News ID:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="newsID" id="newsID" placeholder="News ID" readonly value="<?php echo $news['NEWS_ID']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="cat">Category:</label>
							<div class="col-sm-10">
								<select name="newsCategory" id="cat" class="form-control" autofocus>
									<option value="" hidden>-- Category --</option>
									<?php foreach($categories as $category){
										if($news['NEWS_CAT'] == $category['CAT_ID']) $selected = ' selected';
										else $selected = '';
									?>
										<option value="<?php echo $category['CAT_ID']; ?>"<?php echo $selected; ?>><?php echo $category['CAT_NAME']; ?></option>
									<?php }; ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="title">Title:</label>
							<div class="col-sm-10">
								<input type="text" name="newsTitle" id="title" class="form-control" placeholder="News Title" value="<?php echo $news['NEWS_TITLE']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="image">Image:</label>
							<div class="col-sm-10">
								<img src="<?php echo base_url('assets/img/news-img/'.$news['NEWS_IMAGE']); ?>" alt="noimage" class="img-thumbnail img-responsive" id="preview">
								<input type="file" name="userfile" id="image" class="form-control">
								<?php echo form_hidden('prev_img', $news['NEWS_IMAGE']); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="content">Content:</label>
							<div class="col-sm-10">
								<textarea name="newsContent" id="content" class="form-control" placeholder="News Content"><?php echo $news['NEWS_CONTENT']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="newsSource">Source:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="newsSource" id="newsSource" placeholder="News Source" autofocus value="<?php echo $news['NEWS_SOURCE']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="postby">Posted By:</label>
							<div class="col-sm-10">
								<input type="text" name="newsPostedBy" id="postby" class="form-control" readonly value="<?php echo $news['USER_ID']; ?>">
							</div>
						</div>
					</div>
					<div class="panel-footer text-right">
						<button class="btn btn-success"><i class="fa fa-edit fa-fw"></i> Edit</button>
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

		document.getElementById('image').onchange = function(event){
			var img = document.getElementById('preview');
			img.src = URL.createObjectURL(event.target.files[0]);
		}
	</script>
</body>
</html>