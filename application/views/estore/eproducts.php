<!DOCTYPE HTML>
<html>
<head>
	<title>AvoStore | Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>

	<?php echo link_tag('assets/css/estore/estore.css') ?>
	<?php echo link_tag('assets/css/estore/estore-custom.css') ?>
	<?php echo link_tag('assets/css/estore/jquery-ui.css') ?>

	<script src="<?php echo base_url('assets/js/estore/estore.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/simpleCart.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/jquery-ui.min.js'); ?>"></script>
</head>
<body>
	<?php echo $enav; ?>
	<!-- breadcrumb -->
	<div class="banner1">
		<div class="container">
			<h3><a href="index.html">Home</a> / <span>Products</span></h3>
		</div>
	</div>
	<!-- breadcrumb -->

	<div class="content">
		<div class="products-agileinfo">
			<h2 class="tittle">Products</h2>
			<div class="container">
				<div class="product-agileinfo-grids w3l">
					<div class="col-md-12 product-agileinfon-grid1 w3l">
						<!-- <div class="product-agileinfon-top">
							<div class="col-md-6 product-agileinfon-top-left">
								<img class="img-responsive" src="<?php echo base_url('assets/img/e-img/sport_shoes.jpg'); ?>" alt="">
							</div>
							<div class="col-md-6 product-agileinfon-top-left">
								<img class="img-responsive" src="<?php echo base_url('assets/img/e-img/sport_shoes.jpg'); ?>" alt="">
							</div>
							<div class="clearfix"></div>
						</div> -->
						<br>
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<!-- <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
								<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="<?php echo base_url('assets/img/e-img'); ?>/menu1.png"></a></li>
								<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="<?php echo base_url('assets/img/e-img'); ?>/menu.png"></a></li>
							</ul> -->
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="product-tab prod1">
										<?php foreach($product as $prod) { ?>
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div class="grid-arrival">
													<a href="<?php echo base_url('estore/detail/'. $prod['PROD_ID']); ?>" class="new-gri" data-toggle="modal" data-target="#myModal1">
														<div class="grid-img">
															<img src="<?php echo base_url('assets/img/estore-img/'. $prod['PROD_IMG']); ?>" class="img-responsive"  alt="">
														</div>
													</a>
												</div>

												<div class="desc">
													<h6><a href="#"><?php echo $prod['PROD_NAME']; ?></a></h6>
													<!-- <span class="size">XL / XXL / S </span> -->
													<p><em class="item_price">Rp <?php echo number_format($prod['PROD_PRICE'],0,',','.'); ?></em></p>
													<a href="<?php echo base_url('estore/detail/'. $prod['PROD_ID']); ?>" class="btn btn-primary">Details</a>
												</div>
											</div>
										</div>
										<?php } ?>
										<div class="clearfix"></div>
									</div>
								</div>
								<!-- <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									<?php for($i = 0; $i < 5; $i++) { ?>
									<div class="product-tab1 prod3">
										<div class="col-md-4 product-tab1-grid">
											<div class="grid-arr">
												<div class="grid-arrival">
													<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
														<div class="grid-img">
															<img src="<?php echo base_url('assets/img/e-img/treadmill.jpg'); ?>" class="img-responsive"  alt="">
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="women">
												<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
												<span class="size">XL / XXL / S </span>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Refert tamen, quo modo. Quod autem meum munus dicis non equidem recuso, sed te adiungo socium. </p>
												<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
												<button href="#" data-text="Add To Cart" class="btn btn-primary">Add To Cart</button>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<?php } ?>
								</div> -->
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>

	<?php echo $efooter; ?>
	</body>
</html>
