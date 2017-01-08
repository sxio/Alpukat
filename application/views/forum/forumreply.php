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
								<span class="pull-right"><?php echo nice_date($forum_parent['USER_DT'], 'd F Y, H:i:s'); ?></span>
								<h3><?php echo $forum_parent['FORUM_CONTENT']; ?></h3>
							</div>
							<div class="panel-body">
								<textarea name="f_content"></textarea>
							</div>
							<div class="panel-footer clearfix">
								<button class="btn btn-success pull-right" name="btnSubmit">Submit</button>
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