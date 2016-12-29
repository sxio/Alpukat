<?php
	if($this->session->userdata('EXPIRE') != null && (time() - $this->session->userdata('EXPIRE') > 3600)){
		redirect('logout/log_out');
	}
	if($this->session->userdata('admin_username') != null){
		$this->session->set_userdata('EXPIRE', time());
	}
?>
<?php echo link_tag('assets/css/bootstrap.min.css') ?>
	<?php echo link_tag('assets/css/font-awesome.min.css') ?>
	<?php echo link_tag('assets/css/main.css') ?>
	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>
	<?php echo link_tag('assets/css/flatbutton.css'); ?>
	<?php echo link_tag('assets/img/avocado.png', 'shortcut icon', 'image/ico') ?>
	<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<!-- HEADER END -->
