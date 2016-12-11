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
			<div id="search" class="col-sm-6">
				<form class="navbar-form" role="search">
			        <div class="input-group">
			            <input type="text" class="form-control" placeholder="Search" name="q">
			            <div class="input-group-btn">
			                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			            </div>
			        </div>
		        </form>
			</div>
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
				<!-- CART -->
				
			</ul>
		</div>
	</div>
</nav>