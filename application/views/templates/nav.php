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
					if($this->session->tempdata('nama') != NULL){
						$loginUser = $this->session->tempdata('nama');
					} else{
						$loginUser = "USER";
					}
				?>
				<?php
					if($this->session->tempdata('username') == NULL){
				?>
						<li class="navli" id="user_li"><a href="<?php echo base_url('user'); ?>"><i class="fa fa-user fa-fw"></i> <?php echo $loginUser; ?></a></li>
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
				<li class="navli" id="news_li"><a href="<?php echo base_url('news') ?>"><i class="fa fa-newspaper-o fa-fw"></i> NEWS</a></li>
				<li class="navli" id="forum_li"><a href="<?php echo base_url('forum') ?>"><i class="fa fa-commenting-o fa-fw"></i> FORUM</a></li>
				<li class="navli" id="estore_li"><a href="<?php echo base_url('estore') ?>"><i class="fa fa-shopping-cart fa-fw"></i> E-STORE</a></li>
				<li class="navli" id="donation_li"><a class="donation_open"><i class="fa fa-usd fa-fw"></i> DONATION</a></li>
			</ul>
		</div>

		<div id="donation_popup">
			<div class="donation_wrapper">
				<?php
					$attrib = array('class' => 'donation_form');
					echo form_open('payment/form_payment/donate', $attrib);
				?>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span><input placeholder="Name" name="text" class="form-control">
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-usd fa-fw"></i></span><input placeholder="Amount" type="number" name="number" class="form-control" min="10000" step="10000" onkeydown="return false">
				</div>

				<button class="btn btn-info form-control"><i class="fa fa-paper-plane fa-fw"></i> Donate</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</nav>