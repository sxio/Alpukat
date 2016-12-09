<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Avocado | Avocado`s Store</title>
	<?php echo $header; ?>

	<!--CSS-->
	<?php echo link_tag('assets/css/estore/estore.css') ?>
	<?php echo link_tag('assets/css/estore/jstarbox.css') ?>
	<?php echo link_tag('assets/css/estore/coreSlider.css') ?>

	<!-- SCRIPT -->
	<script src="<?php echo base_url('assets/js/estore/jstarbox.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/simpleCart.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/responsiveslides.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/estore.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/estore/coreSlider.js'); ?>"></script>

	<script type="application/x-javascript">
		addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			} , false);
			function hideURLbar(){
				window.scrollTo(0,1);
			}
	</script>

	<script>
		$(function () {
			$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true
		});
	});
	</script>
	<script type="text/javascript">
		jQuery(function() {
		jQuery('.starbox').each(function() {
			var starbox = jQuery(this);
				starbox.starbox({
				average: starbox.attr('data-start-value'),
				changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
				ghosting: starbox.hasClass('ghosting'),
				autoUpdateAverage: starbox.hasClass('autoupdate'),
				buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
				stars: starbox.attr('data-star-count') || 5
				}).bind('starbox-value-changed', function(event, value) {
				if(starbox.hasClass('random')) {
				var val = Math.random();
				starbox.next().text(' '+val);
				return val;
				}
			})
		});
	});
	</script>
<!--//End-rate-->
</head>
<body>
	<?php echo $enav; ?>
	<!--header-->
	<!--banner-->
	<div class="banner-w3">
		<div class="demo-1">
			<div id="example1" class="core-slider core-slider__carousel example_1">
				<div class="core-slider_viewport">
					<div class="core-slider_list">
						<div class="core-slider_item">
							<img src="<?php echo base_url('assets/img/e-img') ?>/b1.jpg" class="img-responsive" alt="">
						</div>
						 <div class="core-slider_item">
							 <img src="<?php echo base_url('assets/img/e-img') ?>/b2.jpg" class="img-responsive" alt="">
						 </div>
						<div class="core-slider_item">
							  <img src="<?php echo base_url('assets/img/e-img') ?>/b3.jpg" class="img-responsive" alt="">
						</div>
						<div class="core-slider_item">
							  <img src="<?php echo base_url('assets/img/e-img') ?>/b4.jpg" class="img-responsive" alt="">
						</div>
					 </div>
				</div>
				<div class="core-slider_nav">
					<div class="core-slider_arrow core-slider_arrow__right"></div>
					<div class="core-slider_arrow core-slider_arrow__left"></div>
				</div>
				<div class="core-slider_control-nav"></div>
			</div>
		</div>

		<script>
		$('#example1').coreSlider({
			pauseOnHover: false,
			interval: 3000,
			controlNavEnabled: true
		});

		</script>

	</div>
	<!--banner-->
		<!--content-->
	<div class="content">
		<!--banner-bottom-->
			<div class="ban-bottom-w3l">
				<div class="container">
					<h3 class="tittle1">TRENDING</h3>
					<div class="col-md-6 ban-bottom">
						<div class="ban-top">
							<img src="<?php echo base_url('assets/img/e-img') ?>/p1.jpg" class="img-responsive" alt=""/>
							<div class="ban-text">
								<h4>GYM Equipment</h4>
							</div>
							<div class="ban-text2 hvr-sweep-to-top">
								<h4>50% <span>Off/-</span></h4>
							</div>
						</div>
					</div>
					<div class="col-md-6 ban-bottom3">
						<div class="ban-top">
							<img src="<?php echo base_url('assets/img/e-img') ?>/p2.jpg" class="img-responsive" alt=""/>
							<div class="ban-texttreatment">
								<h4>Apparel</h4>
							</div>
						</div>
						<div class="ban-img">
							<div class=" ban-bottom1">
								<div class="ban-top">
									<img src="<?php echo base_url('assets/img/e-img') ?>/p3.jpg" class="img-responsive" alt=""/>
									<div class="ban-textsupplement">
										<h4>Supplement</h4>
									</div>
								</div>
							</div>
							<div class="ban-bottom2">
								<div class="ban-top">
									<img src="<?php echo base_url('assets/img/e-img') ?>/p4.jpg" class="img-responsive" alt=""/>
									<div class="ban-text1">
										<h4>Nutrition</h4>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		<!--banner-bottom-->
		<!--new-arrivals-->
			<div class="new-arrivals-w3agile">
				<div class="container">
					<h2 class="tittle">New Arrivals</h2>
					<div class="arrivals-grids">
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
							<div class="grid-arr">
								<div class="grid-arrival">
									<figure>
										<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p6.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p5.jpg" class="img-responsive"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
								<div class="ribben1">
									<p>SALE</p>
								</div>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="women">
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<span class="size">XL / XXL / S </span>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
								</div>
							</div>
						</div>
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
							<div class="grid-arr">
								<div class="grid-arrival">
									<figure>
										<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal2">
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p7.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p8.jpg" class="img-responsive"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="ribben2">
									<p>OUT OF STOCK</p>
								</div>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="women">
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<span class="size">XL / XXL / S </span>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
								</div>
							</div>
						</div>
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
							<div class="grid-arr">
								<div class="grid-arrival">
									<figure>
										<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p10.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p9.jpg" class="img-responsive"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="ribben1">
									<p>SALE</p>
								</div>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="women">
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<span class="size">XL / XXL / S </span>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
								</div>
							</div>
						</div>
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
							<div class="grid-arr">
								<div class="grid-arrival">
									<figure>
										<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p11.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p12.jpg" class="img-responsive"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="women">
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<span class="size">XL / XXL / S </span>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--new-arrivals-->
			<!--accessories-->
		<div class="accessories-w3l">
			<div class="container">
				<h3 class="tittle">20% Discount on</h3>
				<span>TRENDING FITNESS APPAREL</span>
				<div class="button">
					<a href="#" class="button1"> Shop Now</a>
					<a href="#" class="button1"> Quick View</a>
				</div>
			</div>
		</div>
		<!--accessories-->
		<!--Products-->
			<div class="product-agile">
				<div class="container">
					<h3 class="tittle1"> New Products</h3>
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides" id="slider">
								<li>
									<div class="caption">
										<div class="col-md-3 cap-left simpleCart_shelfItem">
											<div class="grid-arr">
												<div class="grid-arrival">
													<figure>
														<a href="single.html">
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p14.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p13.jpg" class="img-responsive" alt="">
															</div>
														</a>
													</figure>
												</div>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="women">
													<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
													<span class="size">XL / XXL / S </span>
													<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
													<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
												</div>
											</div>
										</div>
										<div class="col-md-3 cap-left simpleCart_shelfItem">
											<div class="grid-arr">
												<div class="grid-arrival">
													<figure>
														<a href="single.html">
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p15.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p16.jpg" class="img-responsive" alt="">
															</div>
														</a>
													</figure>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="women">
													<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
													<span class="size">XL / XXL / S </span>
													<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
													<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
												</div>
											</div>
										</div>
										<div class="col-md-3 cap-left simpleCart_shelfItem">
											<div class="grid-arr">
												<div class="grid-arrival">
													<figure>
														<a href="single.html">
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p18.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p17.jpg" class="img-responsive" alt="">
															</div>
														</a>
													</figure>
												</div>
												<div class="ribben1">
													<p>SALE</p>
												</div>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="women">
													<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
													<span class="size">XL / XXL / S </span>
													<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
													<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
												</div>
											</div>
										</div>
										<div class="col-md-3 cap-left simpleCart_shelfItem">
											<div class="grid-arr">
												<div class="grid-arrival">
													<figure>
														<a href="single.html">
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p20.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p19.jpg" class="img-responsive" alt="">
															</div>
														</a>
													</figure>
												</div>
												<div class="ribben">
													<p>-20%</p>
												</div>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="women">
													<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
													<span class="size">XL / XXL / S </span>
													<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
													<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</li>
								<li>
									<div class="caption">
										<div class="col-md-3 cap-left simpleCart_shelfItem">
											<div class="grid-arr">
												<div class="grid-arrival">
													<figure>
														<a href="single.html">
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p21.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p22.jpg" class="img-responsive" alt="">
															</div>
														</a>
													</figure>
												</div>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="women">
													<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
													<span class="size">XL / XXL / S </span>
													<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
													<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
												</div>
											</div>
										</div>
										<div class="col-md-3 cap-left simpleCart_shelfItem">
											<div class="grid-arr">
												<div class="grid-arrival">
													<figure>
														<a href="single.html">
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p24.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p23.jpg" class="img-responsive" alt="">
															</div>
														</a>
													</figure>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="women">
													<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
													<span class="size">XL / XXL / S </span>
													<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
													<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
												</div>
											</div>
										</div>
										<div class="col-md-3 cap-left simpleCart_shelfItem">
											<div class="grid-arr">
												<div class="grid-arrival">
													<figure>
														<a href="single.html">
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p26.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p25.jpg" class="img-responsive" alt="">
															</div>
														</a>
													</figure>
												</div>
												<div class="ribben">
													<p>-75%</p>
												</div>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="women">
													<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
													<span class="size">XL / XXL / S </span>
													<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
													<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
												</div>
											</div>
										</div>
										<div class="col-md-3 cap-left simpleCart_shelfItem">
											<div class="grid-arr">
												<div class="grid-arrival">
													<figure>
														<a href="single.html">
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p10.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img src="<?php echo base_url('assets/img/e-img') ?>/p9.jpg" class="img-responsive" alt="">
															</div>
														</a>
													</figure>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="women">
													<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
													<span class="size">XL / XXL / S </span>
													<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
													<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		<!--Products-->
		<div class="latest-w3">
			<div class="container">
				<h3 class="tittle1">Most Favourite Category</h3>
				<div class="latest-grids">
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img') ?>/l1.jpg" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>Men`s Apparel</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-50%</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img') ?>/l2.jpg" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>Bottles</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-20%</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img') ?>/l3.jpg" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>Women`s Apparel</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-50%</h4>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="latest-grids">
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img') ?>/l4.jpg" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>Sport Watch</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-45%</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img') ?>/l5.jpg" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>Sport Bag</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-10%</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 latest-grid">
						<div class="latest-top">
							<img src="<?php echo base_url('assets/img/e-img') ?>/l6.jpg" class="img-responsive"  alt="">
							<div class="latest-text">
								<h4>Medical Equipment</h4>
							</div>
							<div class="latest-text2 hvr-sweep-to-top">
								<h4>-30%</h4>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
			<div class="new-arrivals-w3agile">
				<div class="container">
					<h3 class="tittle1">Best Sellers</h3>
					<div class="arrivals-grids">
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
							<div class="grid-arr">
								<div class="grid-arrival">
									<figure>
										<a href="single.html">
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p28.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p27.jpg" class="img-responsive"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
								<div class="ribben1">
									<p>SALE</p>
								</div>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="women">
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<span class="size">XL / XXL / S </span>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
								</div>
							</div>
						</div>
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
							<div class="grid-arr">
								<div class="grid-arrival">
									<figure>
										<a href="single.html">
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p30.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/p29.jpg" class="img-responsive"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="ribben2">
									<p>OUT OF STOCK</p>
								</div>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="women">
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<span class="size">XL / XXL / S </span>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
								</div>
							</div>
						</div>
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
							<div class="grid-arr">
								<div class="grid-arrival">
									<figure>
										<a href="single.html">
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/s2.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/s1.jpg" class="img-responsive"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="ribben1">
									<p>SALE</p>
								</div>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="women">
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<span class="size">XL / XXL / S </span>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
								</div>
							</div>
						</div>
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
							<div class="grid-arr">
								<div class="grid-arrival">
									<figure>
										<a href="single.html">
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/s4.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img src="<?php echo base_url('assets/img/e-img') ?>/s3.jpg" class="img-responsive"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="women">
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<span class="size">XL / XXL / S </span>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--new-arrivals-->
	</div>
	<!--content-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="news-gr">
								<div class="col-md-5 new-grid1">
								<img src="<?php echo base_url('assets/img/e-img') ?>/p5.jpg" class="img-responsive" alt="">
								</div>
									<div class="col-md-7 new-grid">
										<h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
										<h6>Quick Overview</h6>
										<span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
										<div class="color-quality">
											<div class="color-quality-left">
												<h6>Color : </h6>
												<ul>
													<li><a href="#"><span></span>Red</a></li>
													<li><a href="#" class="brown"><span></span>Yellow</a></li>
													<li><a href="#" class="purple"><span></span>Purple</a></li>
													<li><a href="#" class="gray"><span></span>Violet</a></li>
												</ul>
											</div>
											<div class="color-quality-right">
												<h6>Quality :</h6>
												<div class="quantity">
													<div class="quantity-select">
														<div class="entry value-minus1">&nbsp;</div>
														<div class="entry value1"><span>1</span></div>
														<div class="entry value-plus1 active">&nbsp;</div>
													</div>
												</div>
												<!--quantity-->
														<script>
														$('.value-plus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
															divUpd.text(newVal);
														});

														$('.value-minus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
															if(newVal>=1) divUpd.text(newVal);
														});
														</script>
													<!--quantity-->
											</div>
											<div class="clearfix"> </div>
										</div>
									<div class="women">
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
										<div class="add">
										<button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="<?php echo base_url('assets/img/e-img') ?>/of2.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<?php echo $efooter; ?>
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-info">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="news-gr">
							<div class="col-md-5 new-grid1">
							<img src="<?php echo base_url('assets/img/e-img') ?>/p7.jpg" class="img-responsive" alt="">
							</div>
								<div class="col-md-7 new-grid">
									<h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
									<h6>Quick Overview</h6>
									<span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
									<div class="color-quality">
										<div class="color-quality-left">
											<h6>Color : </h6>
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
										<div class="color-quality-right">
											<h6>Quality :</h6>
											<div class="quantity">
												<div class="quantity-select">
													<div class="entry value-minus1">&nbsp;</div>
													<div class="entry value1"><span>1</span></div>
													<div class="entry value-plus1 active">&nbsp;</div>
												</div>
											</div>
											<!--quantity-->
													<script>
													$('.value-plus1').on('click', function(){
														var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
														divUpd.text(newVal);
													});

													$('.value-minus1').on('click', function(){
														var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
														if(newVal>=1) divUpd.text(newVal);
													});
													</script>
												<!--quantity-->
										</div>
										<div class="clearfix"> </div>
									</div>
								<div class="women">
									<span class="size">XL / XXL / S </span>
									<p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
									<div class="add">
									<button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="<?php echo base_url('assets/img/e-img') ?>/of2.png">Add to Cart</button>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-info">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="news-gr">
							<div class="col-md-5 new-grid1">
							<img src="<?php echo base_url('assets/img/e-img') ?>/p10.jpg" class="img-responsive" alt="">
							</div>
								<div class="col-md-7 new-grid">
									<h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
									<h6>Quick Overview</h6>
									<span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
									<div class="color-quality">
										<div class="color-quality-left">
											<h6>Color : </h6>
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
										<div class="color-quality-right">
											<h6>Quality :</h6>
											<div class="quantity">
												<div class="quantity-select">
													<div class="entry value-minus1">&nbsp;</div>
													<div class="entry value1"><span>1</span></div>
													<div class="entry value-plus1 active">&nbsp;</div>
												</div>
											</div>
											<!--quantity-->
													<script>
													$('.value-plus1').on('click', function(){
														var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
														divUpd.text(newVal);
													});

													$('.value-minus1').on('click', function(){
														var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
														if(newVal>=1) divUpd.text(newVal);
													});
													</script>
												<!--quantity-->
										</div>
										<div class="clearfix"> </div>
									</div>
								<div class="women">
									<span class="size">XL / XXL / S </span>
									<p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
									<div class="add">
									<button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="<?php echo base_url('assets/img/e-img') ?>/of2.png">Add to Cart</button>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-info">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="news-gr">
							<div class="col-md-5 new-grid1">
							<img src="<?php echo base_url('assets/img/e-img') ?>/p12.jpg" class="img-responsive" alt="">
							</div>
								<div class="col-md-7 new-grid">
									<h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
									<h6>Quick Overview</h6>
									<span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
									<div class="color-quality">
										<div class="color-quality-left">
											<h6>Color : </h6>
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
										<div class="color-quality-right">
											<h6>Quality :</h6>
											<div class="quantity">
												<div class="quantity-select">
													<div class="entry value-minus1">&nbsp;</div>
													<div class="entry value1"><span>1</span></div>
													<div class="entry value-plus1 active">&nbsp;</div>
												</div>
											</div>
											<!--quantity-->
													<script>
													$('.value-plus1').on('click', function(){
														var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
														divUpd.text(newVal);
													});

													$('.value-minus1').on('click', function(){
														var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
														if(newVal>=1) divUpd.text(newVal);
													});
													</script>
												<!--quantity-->
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="women">
									<span class="size">XL / XXL / S </span>
									<p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
									<div class="add">
									<button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image=<?php echo base_url('assets/img/e-img') ?>of2.png">Add to Cart</button>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>