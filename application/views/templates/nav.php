<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>">Avocado</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<?php
					$path = $_SERVER['REQUEST_URI'];
					$filename = basename($path);
					$news = "";
					if($filename == "index" || $filename == "Alpukat"){
						$news = "#startchange";
					}
					else if($filename == "list"){
						$news = "#about";
					}
				?>
				<li><a href="<?php echo base_url('user') ?>"><i class="fa fa-user fa-fw"></i> USER</a></li>
				<li><a href="<?php echo base_url('news') ?>"><i class="fa fa-newspaper-o fa-fw"></i> NEWS</a></li>
				<li><a href="http://alpukat.indonesianforum.net/" target="_blank"><i class="fa fa-commenting-o fa-fw"></i> FORUM</a></li>
				<li><a href="#contact"><i class="fa fa-shopping-cart fa-fw"></i> E-STORE</a></li>
				<li><a href="<?php echo base_url('about_us') ?>"><i class="fa fa-question-circle fa-fw"></i> ABOUT</a></li>
			</ul>
		</div>
	</div>
</nav>