<!-- Meikelwis 18-12-16 Untuk forum detail -->
<!DOCTYPE html>
<html>
<head>
	<title>Create Forum</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/forum/forum.css'); ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>
	<?php echo $nav; ?>
	<?php echo $forumnav; ?>
	<div id ="forum-create" class="container">
		<h3>Forums</h3>
		<div class="panel">
			<div class="row">
				<div class="col-sm-8">
					<?php echo form_open('forum/create'); ?>
                        <h4>Forum Topics</h4>
                        <?php echo form_dropdown('category', $category_list, set_value('category','1'),'class="category form-control"');?>
						<br>
                        <h4>Forum Title</h4>
                        <textarea class="form-control" rows="2" name="title"></textarea>
                        <h4>Forum Content</h4>
						<textarea class="form-control" rows="8" name="content"></textarea>
						<br>
						<span class="input-group-btn">
							<button class="btn btn-info btn-sm pull-right" id="btn-submit">
								Submit
							</button>
						</span>
					<?php echo form_close(); ?>
				</div>
                <div class="col-sm-4">
	                <?php
	                	if($this->session->flashdata('msg') != NULL){
            		?>
                		<div class="alert alert-danger">
                			<?php echo $this->session->flashdata('msg');?>
                		</div>
            		<?php
	                } ?>
	            </div>
            </div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<script type="text/javascript">
		CKEDITOR.replace('content');
	</script>
</body>
</html>