<!-- Meikelwis 18-12-16 Untuk forum detail -->
<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/forum/forum.css'); ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/forum/detail.js'); ?>"></script>
	<script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
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
						<!-- /.panel-heading -->
						<div class="panel-body">
							<p><?php echo $forum_header['FORUM_CONTENT']; ?></p>
							<div class="header">
								<strong class="primary-font"><?php echo $forum_header['USER_NAME']; ?></strong>
								<button class="btn btn-warning pull-right btn-reply">Reply</button>
								<div class="clearfix"></div>
							</div>

							<div class="reply">
								<input type="hidden" class="f_id" value="<?php echo $forum_header['FORUM_ID']; ?>">
								<textarea class="f_content form-control" rows="6" name="content"></textarea>
								<br>
								<button class="btn btn-success btn-sm pull-right btn-submit">Submit</button>
								<div class="clearfix"></div>
							</div>

							<?php
								foreach($forum_detail as $fd):
							?>
								<blockquote>
									<h5 class="pull-right"><?php echo $fd['USER_DT']; ?>
									<?php echo $fd['USER_ID']; ?></h5>
									<p><?php echo $fd['FORUM_CONTENT']; ?></p>

									<div class="btn-wrapper">
										<button class="btn btn-warning pull-right btn-reply">Reply</button>
										<div class="clearfix"></div>
									</div>

									<div class="reply">
										<input type="hidden" class="f_id" value="<?php echo $forum_header['FORUM_ID']; ?>">
										<textarea class="f_content form-control" rows="6" name="content"></textarea>
										<br>
										<button class="btn btn-success btn-sm pull-right btn-submit">Submit</button>
										<div class="clearfix"></div>
									</div>
								</blockquote>
							<?php endforeach; ?>
						</div>
						<!-- /.panel-body -->
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