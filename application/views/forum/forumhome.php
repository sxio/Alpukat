<!-- Meikelwis 18-12-16 Untuk Forum home -->
<!DOCTYPE html>
<html>
<head>
	<title>Avocado Forum</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/forum/forum.css'); ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>
		<?php echo $forumnav; ?>
		<div id="forum-home" class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3>Home</h3>
					<h4>This is the right place to discuss any ideas, critics, feature requests and all the ideas regarding our website. Please follow the forum rules and always check FAQ before posting to prevent duplicate posts.</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<table class="table forum table-striped">
						<thead>
							<tr>
								<th class="cell-stat"></th>
								<th>
									<h3>Hot Topics</h3>
								</th>
								<th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
								<th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
								<th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($hot_topics as $ht): ?>
							<tr>
								<td></td>
								<td><a href="<?php echo base_url('forum/detail/'. $ht['FORUM_ID']); ?>"><?php echo $ht['FORUM_TITLE']; ?></a></td>
								<td class="text-center hidden-xs hidden-sm"><?php echo $ht['CAT_NAME']; ?></td>
								<td class="text-center hidden-xs hidden-sm"><?php echo $ht['REPLY_NUM']; ?></td>
								<td class="hidden-xs hidden-sm">by <a href="<?php echo base_url('forum/detail/'.$ht['FORUM_ID']. '#'. $ht['FORUM_LAST_POST']); ?>"><?php echo $ht['USER_ID']; ?></a><br><small><i class="fa fa-clock-o"></i> <?php echo timespan(mysql_to_unix($ht['USER_DT']), now(), 1) . ' ago'; ?></small></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<?php if($this->session->userdata('username') != NULL) { ?>
					<table class="table forum table-striped">
						<thead>
							<tr>
								<th class="cell-stat"></th>
								<th><h3>Created Forum</h3></th>
								<th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
								<th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
								<th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($my_forum as $forum): ?>
							<tr>
								<td></td>
								<td><a href="<?php echo base_url('forum/detail/'. $forum['FORUM_ID']); ?>"><?php echo $forum['FORUM_TITLE']; ?></a></td>
								<td class="text-center"><?php echo $forum['CAT_NAME']; ?></td>
								<td class="text-center"><?php echo $forum['REPLY_NUM']; ?></td>
								<td class="hidden-xs hidden-sm">by <a href="<?php echo base_url('forum/detail/'.$forum['FORUM_ID']. '#'. $forum['FORUM_LAST_POST']); ?>"><?php echo $forum['USER_ID']; ?></a><br><small><i class="fa fa-clock-o"></i> <?php echo timespan(mysql_to_unix($forum['USER_DT']), now(), 1) . ' ago'; ?></small></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<?php } ?>
				</div>
			</div>
		</div>
</body>
</html>
