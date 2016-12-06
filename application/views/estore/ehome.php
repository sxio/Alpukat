<!DOCTYPE html>
<html>
<head>
	<title>Avocado | Avocado`s Store</title>
	<?php require_once __DIR__.'/../templates/header.php'; ?>
	<?php echo link_tag('assets/css/ehome.css') ?>
	<?php echo link_tag('assets/css/nav.css') ?>
	<?php echo link_tag('assets/css/efooter.css') ?>
	
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
					  	<a class="left_fa carousel-control" href="#eCarousel" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
					  	</a>
					  	<a class="right_fa carousel-control" href="#eCarousel" role="button" data-slide="next">
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
		<h1 class="tpromo text-left">Today`s promo</h1>
		<div class="container-fluid">
			<div class="col-sm-2 cleft">
				<img src="<?php echo base_url() ?>assets/img/bklpk.jpg">
			</div>
			<div class="col-sm-8 ccenter">
				<div class="row">
					<div class="col-sm-12">
						<img src="<?php echo base_url() ?>assets/img/lzd2.jpg">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php echo base_url() ?>assets/img/bklpk2.jpg">
					</div>
					<div class="col-sm-4">
						<img src="<?php echo base_url() ?>assets/img/bklpk2.jpg">
					</div>
					<div class="col-sm-4">
						<img src="<?php echo base_url() ?>assets/img/bklpk2.jpg">
					</div>
				</div>
			</div>
			<div class="col-sm-2 cright">
				<img src="<?php echo base_url() ?>assets/img/bklpk.jpg">
			</div>
		</div>
	</section>
	<section id="slider">
       	<div class="container">
		  <div class="row" class="slider-text">
		    <div class="col-md-12" >
		      <h2>NEW COLLECTION</h2>
		    </div>
		  </div>
		</div>

		<!-- Item slider-->
		<div class="container-fluid">

		  <div class="row">
		    <div class="col-xs-10 col-sm-10 col-md-10 hcarousel">
		      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
		        <div class="carousel-inner">

		          <div class="item active">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/655583bx9/item_1_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAYORAL SUKNJA</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/41uq0fc4d/item_2_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAYORAL KOŠULJA</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/dawwajl0d/item_3_180x200.png" class="img-responsive center-block"></a>
		              <span class="badge">10%</span>
		              <h4 class="text-center">PANTALONE TERI 2</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		              <h6 class="text-center">5000,00 RSD</h6>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/5w7ki5z4t/item_4_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">CVETNA HALJINA</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/e2zk9qp7h/item_5_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAJICA FOTO</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/46yha3jfh/item_6_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAJICA MAYORAL</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		        </div>

		        <div class="slider-control">
		        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
		        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
		      </div>
		      </div>
		    </div>
		    <div class="col-xs-2 col-sm-2 col-md-2 sidead">
		    	<img src="<?php echo base_url() ?>assets/img/lzd3.jpg">
		    </div>
		  </div>
		</div>
		<!-- Item slider end-->

	<!-- <section id="sale"> -->
		<div class="container">
		  <div class="row" class="slider-text">
		    <div class="col-md-12" >
		      <h2>SALE</h2>
		    </div>
		  </div>
		</div>

		<!-- Item slider-->
		<div class="container-fluid">

		  <div class="row">
		  	<div class="col-xs-2 col-sm-2 col-md-2 sidead">
		    	<img src="<?php echo base_url() ?>assets/img/lzd3.jpg">
		    </div>
		    <div class="col-xs-10 col-sm-10 col-md-10 hcarousel">
		      <div class="carousel carousel-showmanymoveone slide" id="saleslider">
		        <div class="carousel-inner">

		          <div class="item active">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/655583bx9/item_1_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAYORAL SUKNJA</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/41uq0fc4d/item_2_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAYORAL KOŠULJA</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/dawwajl0d/item_3_180x200.png" class="img-responsive center-block"></a>
		              <span class="badge">10%</span>
		              <h4 class="text-center">PANTALONE TERI 2</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		              <h6 class="text-center">5000,00 RSD</h6>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/5w7ki5z4t/item_4_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">CVETNA HALJINA</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/e2zk9qp7h/item_5_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAJICA FOTO</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/46yha3jfh/item_6_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAJICA MAYORAL</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		        </div>

		        <div class="slider-control">
		        <a class="left carousel-control" href="#saleslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
		        <a class="right carousel-control" href="#saleslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
		      </div>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Item slider end-->

		<div class="container">
		  <div class="row" class="slider-text">
		    <div class="col-md-12" >
		      <h2>TOP PRODUCT</h2>
		    </div>
		  </div>
		</div>

		<!-- Item slider-->
		<div class="container-fluid">

		  <div class="row">
		    <div class="col-xs-10 col-sm-10 col-md-10 hcarousel">
		      <div class="carousel carousel-showmanymoveone slide" id="topslider">
		        <div class="carousel-inner">

		          <div class="item active">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/655583bx9/item_1_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAYORAL SUKNJA</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/41uq0fc4d/item_2_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAYORAL KOŠULJA</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/dawwajl0d/item_3_180x200.png" class="img-responsive center-block"></a>
		              <span class="badge">10%</span>
		              <h4 class="text-center">PANTALONE TERI 2</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		              <h6 class="text-center">5000,00 RSD</h6>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/5w7ki5z4t/item_4_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">CVETNA HALJINA</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/e2zk9qp7h/item_5_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAJICA FOTO</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-2">
		              <a href="#"><img src="https://s12.postimg.org/46yha3jfh/item_6_180x200.png" class="img-responsive center-block"></a>
		              <h4 class="text-center">MAJICA MAYORAL</h4>
		              <h5 class="text-center">4000,00 RSD</h5>
		            </div>
		          </div>

		        </div>

		        <div class="slider-control">
		        <a class="left carousel-control" href="#topslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
		        <a class="right carousel-control" href="#topslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
		      </div>
		      </div>
		    </div>
		    <div class="col-xs-2 col-sm-2 col-md-2 sidead">
		    	<img src="<?php echo base_url() ?>assets/img/lzd3.jpg">
		    </div>
		  </div>
		</div>
		<!-- Item slider end-->
	</section>
	<section id="topsale">
		<h1 class="topproduct">Top Product</h1>
		<div class="container">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3">
					<img src="<?php echo base_url() ?>assets/img/bklpk3.jpg">
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
					<img src="<?php echo base_url() ?>assets/img/bklpk3.jpg">
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
					<img src="<?php echo base_url() ?>assets/img/bklpk3.jpg">
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
					<img src="<?php echo base_url() ?>assets/img/bklpk3.jpg">
				</div>
			</div>
		</div>
	</section>
	<?php require_once __DIR__.'/../templates/efooter.php'; ?>
	<script src="<?php echo base_url() ?>assets/js/slider.js"></script>
</body>
</html>