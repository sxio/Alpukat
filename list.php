<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php require __DIR__."/PARTIAL/head.php"; ?>

	<link rel="stylesheet" type="text/css" href="CSS/list.css">
	<!-- <script src="../JS/main.js"></script> -->
</head>
<body>
	<?php require __DIR__."/PARTIAL/nav.php" ?>

	<section id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<div class="left">
						<input class="form-control filter" type="text" placeholder="Type your location" name="location"><i class="fa fa-map-marker fa-fw" id="icon-map"></i>

						<!-- dropdown list -->
						<div class="dropdown" id="drop">
						    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
						    <span class="caret"></span></button>
						    <ul class="dropdown-menu">
						      <li><a href="#">HTML</a></li>
						      <li><a href="#">CSS</a></li>
						      <li><a href="#">JavaScript</a></li>
						    </ul>
						</div>

						<!-- collapse list -->
						 <div class="panel-group" id="accordion">
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
						        Collapsible Group 1</a>
						      </h4>
						    </div>
						    <div id="collapse1" class="panel-collapse collapse in">
						      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
						      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
						      commodo consequat.</div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
						        Collapsible Group 2</a>
						      </h4>
						    </div>
						    <div id="collapse2" class="panel-collapse collapse">
						      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
						      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
						      commodo consequat.</div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
						        Collapsible Group 3</a>
						      </h4>
						    </div>
						    <div id="collapse3" class="panel-collapse collapse">
						      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
						      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
						      commodo consequat.</div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="right">
						asdfsdafsadfsafdsaf
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>