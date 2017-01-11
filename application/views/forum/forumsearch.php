<!DOCTYPE html>
<html>
<head>
	<title>Forum Search</title>
	<?php echo $header; ?>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<?php echo link_tag('assets/css/forum/forum.css'); ?>
</head>
<body>
	<?php echo $nav; ?>
		<?php echo $forumnav; ?>
		<div id="forum-list" class="container">
			<h3>Forums</h3>
			<?php foreach($f_search as $f_search) { ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
									<div class="col-sm-3">
										<h2><a href="<?php echo base_url('forum/detail/'. $f_search['FORUM_ID']); ?>"><?php echo $f_search['FORUM_TITLE']; ?></a></h2>
										<h4>Topic : <?php echo $f_search['CAT_NAME']; ?></h4>
									</div>
									<div class="col-sm-9">
										<h5 class="pull-right">by <a href="<?php echo base_url('profile/view/'. $f_search['USER_ID']); ?>"><?php echo $f_search['USER_ID']; ?></a> -- <?php echo nice_date($f_search['USER_DT'], 'l, d F Y, h:i A'); ?><br><span class="pull-right"><?php echo timespan(mysql_to_unix($f_search['USER_DT']), now(), 1); ?> ago</span></h4>
									</div>
								</div>
							</div>
							<div class="panel-body">
								<p><?php echo $f_search['FORUM_CONTENT'];?></p>
							</div>
						</div>
					</div>
				</div>
				<br>
			<?php } ?>
		</div>
	</div>
</body>
</html>