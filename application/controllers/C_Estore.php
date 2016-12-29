<?php
	class C_Estore extends CI_Controller{
		public function view($page = 'index'){
			$data['header']  = $this->load->view('templates/header','',TRUE);
			$data['enav']    = $this->load->view('estore/templates/enav','',TRUE);
			$data['efooter']    = $this->load->view('estore/templates/efooter','',TRUE);

			$this->load->view('estore/'. $page, $data);
		}
	}
?>