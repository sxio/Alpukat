<!DOCTYPE html>
<html>
<head>
	<title>Forum Reply</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/forum/forum.css'); ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>
	<?php echo $nav; ?>
		<?php echo $forumnav; ?>
		<div id="forum-detail" class="container">
			<h3>Forums</h3>
			<div class="row">
				<div class="col-sm-12">
					<?php
						if(!isset($forum_parent['FORUM_ID'])){
							$parent_id = $forum_parent['DETAIL_ID'];
						} else {
							$parent_id = $forum_parent['FORUM_ID'];
						}
						echo form_open('forum/add-reply/'. $parent_id);
					?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h5><?php echo nice_date($forum_parent['USER_DT'], 'l, d F Y, h:i A'); ?></h5>
								<h4 class="text-justify"><?php echo $forum_parent['FORUM_CONTENT']; ?></h4>
							</div>
							<div class="panel-body">
								<textarea name="f_content" required></textarea>
							</div>
							<div class="panel-footer text-right">
								<a href="<?php echo base_url('forum/detail/'. $header_id); ?>" class="btn btn-warning" name="btnSubmit">Cancel</a>
								<button class="btn btn-success" name="btnSubmit">Submit</button>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<script type="text/javascript">
		CKEDITOR.replace('f_content');
	</script>
</body>
</html>