<!DOCTYPE html>
<html>
<head>
	<title>Admin | List News</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>
	<?php echo link_tag('assets/css/admin/news/listnews.css'); ?>

</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-news'); ?>">Manage News</a></li>
			<li class="active">List News</li>
		</ol>
	</div>

	<div class="container">
		<div class="row">
			<div class="text-center">
				<?php echo $pagination; ?>
			</div>
		</div>
		<div class="row text-center">
			<div class="label label-primary">
				Showing <?php echo ($offset+1) . ' to ' .(count($lists) + $offset) . ' from ' . $count_all . ' records'; ?>
			</div>
		</div>
		<br>
		<div class="row">
			<?php foreach($lists as $list){ ?>
				<div class="well well-sm">
					<div class="row">
						<div class="col-sm-3">
							<img src="<?php echo base_url('assets/img/news-img/'.$list['NEWS_IMAGE']); ?>" class="img-responsive img-thumbnail" alt="noimage">
						</div>
						<div class="col-sm-9">
							<a href="<?php echo base_url('admin/news/readmore/'.$list['NEWS_ID']); ?>"><h3><?php echo $list['NEWS_TITLE']; ?></h3></a>
							<span class="label label-primary"><i class="fa fa-hashtag fa-fw"></i><?php echo $list['CAT_NAME']; ?></span>
							<span class="label label-default"><i class="fa fa-calendar fa-fw"></i> <?php echo nice_date($list['NEWS_DT'], 'd F Y | H:i:s'); ?></span>
							<p><?php echo word_limiter($list['NEWS_CONTENT'], 50); ?></p>
							<a href="<?php echo base_url('admin/news/editnews/'.$list['NEWS_ID']); ?>" class="btn btn-warning"><i class="fa fa-pencil fa-fw"></i> Edit</a>
							<a href="<?php echo base_url('admin/news/readmore/'.$list['NEWS_ID']); ?>" class="btn btn-info"><i class="fa fa-eye fa-fw"></i> Read More</a>
							<a href="<?php echo base_url('admin/news/deletenews/' .$list['NEWS_ID']); ?>" class="btn btn-danger pull-right"><i class="fa fa-trash fa-fw"></i> Delete</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="row">
			<div class="text-center">
				<?php echo $pagination; ?>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html>