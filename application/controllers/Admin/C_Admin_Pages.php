<?php
	class C_Admin_Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'/views/admin/'.$page.'.php')){
				show_404();
			}

			$data['title']        = ucfirst($page);
			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			$this->load->helper('html');
			$this->load->view('admin/'.$page, $data);
		}
	}
?>