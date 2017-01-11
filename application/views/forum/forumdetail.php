<!-- Meikelwis 18-12-16 Untuk forum detail -->
<!DOCTYPE html>
<html>
<head>
	<title>Forum Detail</title>
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
									<span class="pull-right">by <a href="<?php echo base_url('profile/view/'. $forum_header['USER_ID']); ?>"><?php echo $forum_header['USER_ID']; ?></a> -- <?php echo nice_date($forum_header['USER_DT'], 'd F Y, H:i:s'); ?></span>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>

						<div class="panel-body">
							<p><?php echo $forum_header['FORUM_CONTENT']; ?></p>
							<strong class="primary-font"></strong>
							<a href="<?php echo base_url('forum/reply/' . $forum_header['FORUM_ID']); ?>" class="btn btn-link pull-right">Reply</a>
							<div class="clearfix"></div>
						</div>
						<div class="panel-footer">
							<?php
								function print_tree($forum_detail){
									foreach ($forum_detail as $fd):
										for($i = 0; $i < $fd['LEVEL']; $i++) { ?>
											<div class="forum-margin"><?php
										} ?>
										<blockquote id="<?php echo $fd['DETAIL_ID']; ?>">
											<h5>by <a href="<?php echo base_url('profile/view/'. $fd['USER_ID']); ?>"><?php echo $fd['USER_ID']; ?></a> -- <?php echo nice_date($fd['USER_DT'], 'l, d F Y, h:i A'); ?></h5>
											<h4 class="text-justify"><?php echo $fd['FORUM_CONTENT']; ?></h4>

											<div class="btn-wrapper clearfix">
												<a href="<?php echo base_url('forum/reply/'. $fd['DETAIL_ID']); ?>" class="btn btn-link pull-right">Reply</a>
											</div>
										</blockquote><?php
										for($i = 0; $i < $fd['LEVEL']; $i++) { ?>
											</div><?php
										}
										print_tree($fd['CHILDREN']);
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