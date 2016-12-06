<!DOCTYPE html>
<html>
<head>
	<title>Avocado | Avocado`s Store</title>
	<?php require_once __DIR__.'/../templates/header.php'; ?>
	<?php echo link_tag('assets/css/ehome.css') ?>
	<?php echo link_tag('assets/css/nav.css') ?>

</head>
<body>
	<?php require_once __DIR__.'/../templates/nav.php'; ?>
	<section id="enav">
		<div class="container">
			<div class="row">
				<div id="search" class="col-sm-8">
					<form class="navbar-form" role="search">
				        <div class="input-group">
				            <input type="text" class="form-control" placeholder="Search" name="q">
				            <div class="input-group-btn">
				                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				            </div>
				        </div>
			        </form>
				</div>
				<div id="search" class="col-sm-4">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><i class="fa fa-compass fa-fw"></i> Tracking Info</a></li>

						<?php
							if($this->session->tempdata('nama') != NULL){
								$loginUser = $this->session->tempdata('nama');
							} else{
								$loginUser = "USER";
							}
						?>
						<?php
							if($this->session->tempdata('username') == NULL){
						?>
								<li><a href="<?php echo base_url('user'); ?>"><i class="fa fa-user fa-fw"></i> <?php echo $loginUser; ?></a></li>
						<?php } else { ?>
								<li class="dropdown">
									<a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i> <?php echo $loginUser; ?>
									<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="<?php base_url()?>logout/log_out"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
									</ul>
								</li>
						<?php
							}
						?>

						<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> 7 - Items<span class="caret"></span></a>
				          <ul class="dropdown-menu dropdown-cart" role="menu">
				              <li>
				                  <span class="item">
				                    <span class="item-left">
				                        <img src="<?php echo base_url() ?>assets/img/poster.jpg" alt="" />
				                        <span class="item-info">
				                            <span>Item name</span>
				                            <span>23$</span>
				                        </span>
				                    </span>
				                    <span class="item-right">
				                        <button class="btn btn-xs btn-danger pull-right">x</button>
				                    </span>
				                </span>
				              </li>
				              <li>
				                  <span class="item">
				                    <span class="item-left">
				                        <img src="<?php echo base_url() ?>assets/img/poster.jpg" alt="" />
				                        <span class="item-info">
				                            <span>Item name</span>
				                            <span>23$</span>
				                        </span>
				                    </span>
				                    <span class="item-right">
				                        <button class="btn btn-xs btn-danger pull-right">x</button>
				                    </span>
				                </span>
				              </li>
				              <li>
				                  <span class="item">
				                    <span class="item-left">
				                        <img src="<?php echo base_url() ?>assets/img/poster.jpg" alt="" />
				                        <span class="item-info">
				                            <span>Item name</span>
				                            <span>23$</span>
				                        </span>
				                    </span>
				                    <span class="item-right">
				                        <button class="btn btn-xs btn-danger pull-right">x</button>
				                    </span>
				                </span>
				              </li>
				              <li>
				                  <span class="item">
				                    <span class="item-left">
				                        <img src="<?php echo base_url() ?>assets/img/poster.jpg	" alt="" />
				                        <span class="item-info">
				                            <span>Item name</span>
				                            <span>23$</span>
				                        </span>
				                    </span>
				                    <span class="item-right">
				                        <button class="btn btn-xs btn-danger pull-right">x</button>
				                    </span>
				                </span>
				              </li>
				              <li class="divider"></li>
				              <li><a class="text-center" href="">View Cart</a></li>
				          </ul>

				        </li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="firstpart">
		<div class="container-fluid">
			<div class="row ehead">
				<div class="col-sm-3">
					<img src="<?php echo base_url() ?>assets/img/ali.jpg">
				</div>
				<div class="col-sm-6">
					<div id="eCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  						<div class="carousel-inner" role="listbox">
    						<div class="item active">
      							<img src="<?php echo base_url() ?>assets/img/ali2.jpg" alt="Chania">
    						</div>
	    					<div class="item">
	      						<img src="<?php echo base_url() ?>assets/img/ali3.jpg" alt="Chania">
	   						</div>
	    					<div class="item">
						      	<img src="<?php echo base_url() ?>assets/img/ali4.jpg" alt="Flower">
						    </div>
	    					<div class="item">
	      						<img src="<?php echo base_url() ?>assets/img/ali5.jpg" alt="Flower">
	    					</div>
  						</div>
 						<!-- Left and right controls -->
					  	<a class="left carousel-control" href="#eCarousel" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
					  	</a>
					  	<a class="right carousel-control" href="#eCarousel" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
					  	</a>
					</div>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo base_url() ?>assets/img/la.jpg">
				</div>
			</div>
		</div>
	</section>
	<section id="secondpart">
		<div class="container-fluid">
			<div class="col-sm-2">
				<img src="<?php echo base_url() ?>assets/img/bklpk.jpg">
			</div>
			<div class="col-sm-7">
				<div class="row">
					<div class="col-sm-6">
						<img src="<?php echo base_url() ?>assets/img/bklpk2.jpg">
					</div>
					<div class="col-sm-6">
						<img src="<?php echo base_url() ?>assets/img/bklpk2.jpg">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<img src="<?php echo base_url() ?>assets/img/bklpk2.jpg">
					</div>
					<div class="col-sm-6">
						<img src="<?php echo base_url() ?>assets/img/bklpk2.jpg">
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<img src="<?php echo base_url() ?>assets/img/bklpk.jpg">
			</div>
		</div>
	</section>
	
</body>
</html>