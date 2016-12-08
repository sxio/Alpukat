<?php
	class C_Estore extends CI_Controller{
		public function view($page = 'index'){
			$data['header']  = $this->load->view('templates/header','',TRUE);
			// $data['nav']     = $this->load->view('templates/nav','',TRUE);
			// $data['efooter'] = $this->load->view('templates/efooter','',TRUE);
			// $data['chat']    = $this->load->view('templates/chat','',TRUE);
			$data['enav']    = $this->load->view('estore/templates/enav','',TRUE);
			$data['efooter']    = $this->load->view('estore/templates/efooter','',TRUE);

			$this->load->view('estore/'. $page, $data);
		}
	}
?>