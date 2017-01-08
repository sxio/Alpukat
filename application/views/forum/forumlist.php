<!-- Meikelwis 18-12-16 Untuk forum detail -->
<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php echo $header; ?>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<?php echo link_tag('assets/css/forum/forum.css'); ?>
</head>
<body>
	<?php echo $nav; ?>
		<?php echo $forumnav; ?>
		<div id="forum-detail" class="container">
			<h3>Forums</h3>
			<?php
				foreach($forum_list as $forum_list){
				?>
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
									<div class="col-sm-3">
										<h3>Topic : <?php echo $forum_list['CAT_NAME']; ?></h4>
										<h4>Title : <?php echo $forum_list['FORUM_TITLE']; ?></h4>
									</div>
									<div class="col-sm-9">
										<h5 class="pull-right">Posted by : <?php echo $forum_list['USER_ID']; ?> <?php echo $forum_list['USER_DT']; ?></h4>
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
			
		</div>
	</div>
</body>
</html>