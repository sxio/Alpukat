<!DOCTYPE html>
<html>
<head>
	<title>Admin | Read More</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>
	<?php echo link_tag('assets/css/admin/news/readmore.css'); ?>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-news'); ?>">Manage News</a></li>
			<li><a href="<?php echo base_url('admin/news/listnews'); ?>">List News</a></li>
			<li class="active">Read More</li>
		</ol>
	</div>

	<div class="container">
		<div class="row">
			<a href="<?php echo base_url('admin/news/editnews/'. $news_detail['NEWS_ID']); ?>" class="btn btn-warning"><i class="fa fa-pencil fa-fw"></i> Edit</a>
			<a href="<?php echo base_url('admin/news/deletenews/'. $news_detail['NEWS_ID']); ?>" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i> Delete</a>

			<h1><?php echo $news_detail['NEWS_TITLE']; ?></h1>
			<h4><span class="label label-default"><?php echo nice_date($news_detail['NEWS_DT'], 'l, d m Y | h : i : s') ?></span> Author: <?php echo $news_detail['USER_NAME']; ?></h4>
		</div>
		<div class="row">
			<?php if($news_detail['NEWS_IMAGE'] != "noimage.jpg") { ?>
				<img src="<?php echo base_url('assets/img/news-img/'. $news_detail['NEWS_IMAGE']); ?>">
			<?php }; ?>

			<div class="news_content">
				<?php echo $news_detail['NEWS_CONTENT']; ?>
			</div>
		</div>
	</div>
</body>
</html>