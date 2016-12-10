<!DOCTYPE HTML>
<html>
<head>
	<title>AvoStore | Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php echo $header; ?>

	<?php echo link_tag('assets/css/estore/estore.css') ?>
	<?php echo link_tag('assets/css/estore/jquery-ui.css') ?>

	<script type="application/x-javascript">
		addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			} , false);
			function hideURLbar(){
				window.scrollTo(0,1);
			}
	</script>

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
			<h2 class="tittle">Women's Wear</h2>
			<div class="container">
				<div class="product-agileinfo-grids w3l">
					<div class="col-md-3 product-agileinfo-grid">
						<!-- <div class="categories">
							<h3>Categories</h3>
							<ul class="tree-list-pad">
								<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>Women's Wear</label>
									<ul>
										<li><input type="checkbox" id="item-0-0" /><label for="item-0-0">Ethnic Wear</label>
											<ul>
												<li><a href="estore/products">Shirts</a></li>
												<li><a href="estore/products">Caps</a></li>
												<li><a href="estore/products">Shoes</a></li>
												<li><a href="estore/products">Pants</a></li>
												<li><a href="estore/products">SunGlasses</a></li>
												<li><a href="estore/products">Trousers</a></li>
											</ul>
										</li>
										<li><input type="checkbox"  id="item-0-1" /><label for="item-0-1">Party Wear</label>
											<ul>
												<li><a href="estore/products">Shirts</a></li>
												<li><a href="estore/products">Caps</a></li>
												<li><a href="estore/products">Shoes</a></li>
												<li><a href="estore/products">Pants</a></li>
												<li><a href="estore/products">SunGlasses</a></li>
												<li><a href="estore/products">Trousers</a></li>
											</ul>
										</li>
										<li><input type="checkbox"  id="item-0-2" /><label for="item-0-2">Casual Wear</label>
											<ul>
												<li><a href="estore/products">Shirts</a></li>
												<li><a href="estore/products">Caps</a></li>
												<li><a href="estore/products">Shoes</a></li>
												<li><a href="estore/products">Pants</a></li>
												<li><a href="estore/products">SunGlasses</a></li>
												<li><a href="estore/products">Trousers</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1">Best Collections</label>
									<ul>
										<li><input type="checkbox" checked="checked" id="item-1-0" /><label for="item-1-0">New Arrivals</label>
											<ul>
												<li><a href="estore/products">Shirts</a></li>
												<li><a href="estore/products">Shoes</a></li>
												<li><a href="estore/products">Pants</a></li>
												<li><a href="estore/products">SunGlasses</a></li>
											</ul>
										</li>

									</ul>
								</li>
								<li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2">Best Offers</label>
									<ul>
										<li><input type="checkbox"  id="item-2-0" /><label for="item-2-0">Summer Discount Sales</label>
											<ul>
												<li><a href="estore/products">Shirts</a></li>
												<li><a href="estore/products">Shoes</a></li>
												<li><a href="estore/products">Pants</a></li>
												<li><a href="estore/products">SunGlasses</a></li>
											</ul>
										</li>
										<li><input type="checkbox" id="item-2-1" /><label for="item-2-1">Exciting Offers</label>
											<ul>
												<li><a href="estore/products">Shirts</a></li>
												<li><a href="estore/products">Shoes</a></li>
												<li><a href="estore/products">Pants</a></li>
												<li><a href="estore/products">SunGlasses</a></li>
											</ul>
										</li>
										<li><input type="checkbox" id="item-2-2" /><label for="item-2-2">Flat Discounts</label>
											<ul>
												<li><a href="estore/products">Shirts</a></li>
												<li><a href="estore/products">Shoes</a></li>
												<li><a href="estore/products">Pants</a></li>
												<li><a href="estore/products">SunGlasses</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div> -->
						<!-- <div class="price">
							<h3>Price Range</h3>
							<ul class="dropdown-menu6">
								<li>
									<div id="slider-range"></div>
									<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
								</li>
							</ul>
							<script type='text/javascript'>
							$(window).load(function(){
								$( "#slider-range" ).slider({
									range: true,
									min: 0,
									max: 9000,
									values: [ 1000, 7000 ],
									slide: function( event, ui ) {
										$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
									}
								});
								$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
							});

							</script>
						</div> -->
						<div class="top-rates">
							<h3>Top Rates products</h3>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="<?php echo base_url('assets/img/e-img'); ?>/r.jpg" alt=""></a>
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
									<p><del>$100.00</del> <em class="item_price">$09.00</em></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="<?php echo base_url('assets/img/e-img'); ?>/r1.jpg" alt=""></a>
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
									<p><del>$100.00</del> <em class="item_price">$19.00</em></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="<?php echo base_url('assets/img/e-img'); ?>/r2.jpg" alt=""></a>
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
									<p><del>$100.00</del> <em class="item_price">$39.00</em></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="<?php echo base_url('assets/img/e-img'); ?>/r3.jpg" alt=""></a>
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
									<p><em class="item_price">$39.00</em></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="brand-w3l">
							<h3>Brands Filter</h3>
							<ul>
								<li><a href="#">Ralph Lauren</a></li>
								<li><a href="#">adidas</a></li>
								<li><a href="#">Bottega Veneta</a></li>
								<li><a href="#">Valentino</a></li>
								<li><a href="#">Nike</a></li>
								<li><a href="#">Burberry</a></li>
								<li><a href="#">Michael Kors</a></li>
								<li><a href="#">Louis Vuitton</a></li>
								<li><a href="#">Jimmy Choo</a></li>
							</ul>
						</div>
						<div class="cat-img">
							<img class="img-responsive " src="<?php echo base_url('assets/img/e-img'); ?>/45.jpg" alt="">
						</div>
					</div>
					<div class="col-md-9 product-agileinfon-grid1 w3l">
						<div class="product-agileinfon-top">
							<div class="col-md-6 product-agileinfon-top-left">
								<img class="img-responsive " src="<?php echo base_url('assets/img/e-img'); ?>/img1.jpg" alt="">
							</div>
							<div class="col-md-6 product-agileinfon-top-left">
								<img class="img-responsive " src="<?php echo base_url('assets/img/e-img'); ?>/img2.jpg" alt="">
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="mens-toolbar">
							<p >Showing 1–9 of 21 results</p>
							 <p class="showing">Sorting By
								<select>
									  <option value=""> Name</option>
									  <option value="">  Rate</option>
										<option value=""> Color </option>
										<option value=""> Price </option>
								</select>
							  </p>
							  <p>Show
								<select>
									  <option value=""> 9</option>
									  <option value="">  10</option>
										<option value=""> 11 </option>
										<option value=""> 12 </option>
								</select>
							  </p>
							<div class="clearfix"></div>
						</div>
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
								<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="<?php echo base_url('assets/img/e-img'); ?>/menu1.png"></a></li>
							<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="<?php echo base_url('assets/img/e-img'); ?>/menu.png"></a></li>
							</ul>
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="product-tab">
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/p6.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/p5.jpg" class="img-responsive"  alt="">
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
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/p21.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/p22.jpg" class="img-responsive"  alt="">
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
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/p14.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/p13.jpg" class="img-responsive"  alt="">
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
									<div class="product-tab prod1">
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i2.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i1.jpg" class="img-responsive"  alt="">
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
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i4.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i3.jpg" class="img-responsive"  alt="">
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
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i6.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i5.jpg" class="img-responsive"  alt="">
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
									<div class="product-tab">
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i8.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i7.jpg" class="img-responsive"  alt="">
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
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i10.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i9.jpg" class="img-responsive"  alt="">
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
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i12.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i11.jpg" class="img-responsive"  alt="">
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
									<div class="product-tab prod2">
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i8.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i7.jpg" class="img-responsive"  alt="">
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
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i14.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i13.jpg" class="img-responsive"  alt="">
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
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i2.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i1.jpg" class="img-responsive"  alt="">
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
								<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									<div class="product-tab1">
										<div class="col-md-4 product-tab1-grid">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/p6.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/p5.jpg" class="img-responsive"  alt="">
															</div>
														</a>
													</figure>
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
												<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="product-tab1 prod3">
										<div class="col-md-4 product-tab1-grid">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i2.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i1.jpg" class="img-responsive"  alt="">
															</div>
														</a>
													</figure>
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
												<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="product-tab1">
										<div class="col-md-4 product-tab1-grid">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i4.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i3.jpg" class="img-responsive"  alt="">
															</div>
														</a>
													</figure>
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
												<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="product-tab1 prod3">
										<div class="col-md-4 product-tab1-grid">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i6.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i5.jpg" class="img-responsive"  alt="">
															</div>
														</a>
													</figure>
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
												<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="product-tab1">
										<div class="col-md-4 product-tab1-grid">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>
														<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i8.jpg" class="img-responsive" alt="">
															</div>
															<div class="grid-img">
																<img  src="<?php echo base_url('assets/img/e-img'); ?>/i7.jpg" class="img-responsive"  alt="">
															</div>
														</a>
													</figure>
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
												<button href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</button>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>

								</div>
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