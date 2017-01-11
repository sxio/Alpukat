<!-- Meikelwis 18-12-16 Untuk forum detail -->
<!DOCTYPE html>
<html>
<head>
	<title>Forum List</title>
	<?php echo $header; ?>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<?php echo link_tag('assets/css/forum/forum.css'); ?>
</head>
<body>
	<?php echo $nav; ?>
		<?php echo $forumnav; ?>
		<div id="forum-list" class="container">
			<h3>Forums</h3>
			<?php if($count_all > 10) { ?>
			<div class="text-center">
				<div class="row">
					<?php echo $pagination; ?>
				</div>
				<div class="row">
					<div class="label label-primary">
						Showing <?php echo ($offset+1) . ' to ' .(count($forum_list) + $offset) . ' from ' . $count_all . ' records'; ?>
					</div>
				</div>
			</div>
			<?php } ?>
			<br>
			<?php
				foreach($forum_list as $forum_list){
				?>
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
									<div class="col-sm-8 forum_list_headline">
										<h2><a href="<?php echo base_url('forum/detail/'. $forum_list['FORUM_ID']); ?>"><?php echo $forum_list['FORUM_TITLE']; ?></a></h2>
										<h4>Topic : <?php echo $forum_list['CAT_NAME']; ?></h4>
									</div>
									<div class="col-sm-4">
										<h5 class="pull-right">by <a href="<?php echo base_url('profile/view/'. $forum_list['USER_ID']); ?>"><?php echo $forum_list['USER_ID']; ?></a> -- <?php echo nice_date($forum_list['USER_DT'], 'l, d F Y, h:i A'); ?><br><span class="pull-right"><?php echo timespan(mysql_to_unix($forum_list['USER_DT']), now(), 1); ?> ago</span></h4>
									</div>
								</div>
							</div>
							<div class="panel-body">
								<p><?php echo $forum_list['FORUM_CONTENT'];?></p>
							</div>
						</div>
					</div>
				</div>
				<br>
				<?php
				}
			?>

			<div class="text-center">
				<?php echo $pagination; ?>
			</div>
		</div>
	</div>
</body>
</html>