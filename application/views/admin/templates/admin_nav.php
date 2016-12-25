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
					if($this->session->tempdata('admin_username') != NULL){
						$loginAdmin = $this->session->tempdata('admin_username');
					} else{
						$loginAdmin = "ACCOUNT";
					}
				?>
				<?php
					if($this->session->tempdata('admin_username') == NULL){
				?>
						<li class="navli" id="user_li"><a href="<?php echo base_url('admin/admin_login'); ?>"><i class="fa fa-user fa-fw"></i> <?php echo $loginAdmin; ?></a></li>
				<?php } else { ?>
						<li class="dropdown">
							<a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i> <?php echo $loginAdmin; ?>
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url('logout/log_out');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
							</ul>
						</li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
</nav>