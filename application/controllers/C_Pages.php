<?php
	class C_Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'/views/'.$page.'.php')){
				show_404();
			}

			$data['title']  = ucfirst($page);
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['chat']   = $this->load->view('templates/chat','',TRUE);

			$this->load->helper('html');
			$this->load->view($page, $data);
		}
	}
?>