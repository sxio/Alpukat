<!-- Meikelwis 18-12-16 Untuk navigation yang ada di forum -->

<div id="forum-nav" class="container">
	<div class="page-header">
		<ul class="list-unstyled list-inline">
		  <li><a href="<?php echo base_url('profile/dashboard/'. $this->session->userdata('username')); ?>" >Profile</a></li>
		  <li><a href="<?php echo base_url('forum'); ?>" >Home</a></li>
		  <li><a href="<?php echo base_url('forum/create'); ?>" >Create Forum</a></li>
		  <li><a href="<?php echo base_url('forum/list'); ?>" >List of Topics</a></li>
		  <!-- <li><a href="<?php echo base_url('forum/detail'); ?>" >Forums</a></li> -->
		</ul>
	</div>
</div>