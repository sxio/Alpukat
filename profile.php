<!DOCTYPE html>
<html>
<head>
	<title>Doctor Profile</title>
	<?php require __DIR__."/PARTIAL/head.php"; ?>

	<link rel="stylesheet" type="text/css" href="CSS/profile.css">
	<script src="JS/main.js"></script>
</head>
<body>
	<?php require __DIR__."/PARTIAL/nav.php" ?>

	<section id="content">
		<div class="container-fluid">
			<div id="exTab3" class="container">
				<ul class="nav nav-pills">
					<li class="active"><a href="#1b" data-toggle="tab">Overview</a></li>
					<li><a href="#2b" data-toggle="tab">Using nav-pills</a></li>
					<li><a href="#3b" data-toggle="tab">Applying clearfix</a></li>
					<li><a href="#4a" data-toggle="tab">Background color</a></li>
				</ul>

				<div class="tab-content clearfix">
					<div class="tab-pane active" id="1b">
						<h3>Same as example 1 but we have now styled the tab's corner</h3>
					</div>
					<div class="tab-pane" id="2b">
						<h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
					</div>
					<div class="tab-pane" id="3b">
						<h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
					</div>
					<div class="tab-pane" id="4b">
						<h3>We use css to change the background color of the content to be equal to the tab</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>