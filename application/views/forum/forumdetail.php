<!-- Meikelwis 18-12-16 Untuk forum detail -->
<!DOCTYPE html>
<html>
<head>
	<title>Forum List</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/forum/forum.css'); ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>
		<?php echo $forumnav; ?>
		<div id="forum-detail" class="container">
			<h3>Forums</h3>
			<div class="row">
				<div class="col-sm-12">
					<div class="chat-panel panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-sm-3">
									<h4><?php echo $forum_header['FORUM_TITLE']; ?></h4>
								</div>
								<div class="col-sm-9">
									<span class="pull-right"><?php echo nice_date($forum_header['USER_DT'], 'd F Y, H:i:s'); ?></span>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>

						<div class="panel-body">
							<p><?php echo $forum_header['FORUM_CONTENT']; ?></p>
							<strong class="primary-font"><?php echo $forum_header['USER_NAME']; ?></strong>
							<a href="<?php echo base_url('forum/reply/' . $forum_header['FORUM_ID']); ?>" class="btn btn-warning pull-right btn-reply">Reply</a>
							<div class="clearfix"></div>
						</div>
						<div class="panel-footer">
							<?php
								function print_tree($forum_detail){
									foreach($forum_detail as $key => $value):
										// if(is_array($key)){
										// 	print_tree($value);
										// }
							?>
								<blockquote>
									<h5 class="pull-right"><?php echo $value['USER_DT']; ?> <?php echo $value['USER_ID']; ?></h5>
									<p><?php echo $value['FORUM_CONTENT']; ?></p>

									<div class="btn-wrapper">
										<a href="<?php echo base_url('forum/reply/'. $value['DETAIL_ID']); ?>" class="btn btn-warning pull-right btn-reply">Reply</a>
										<div class="clearfix"></div>
									</div>
								</blockquote>
							<?php
									endforeach;
								}
								print_tree($forum_detail);
							?>
						</div>

						<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<script type="text/javascript">
		CKEDITOR.replace('content');
	</script>
</body>
</html>