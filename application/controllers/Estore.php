<?php 
	class Estore extends CI_Controller{
		public function view(){
			$data['header']  = $this->load->view('templates/header','',TRUE);
			$data['nav']     = $this->load->view('templates/nav','',TRUE);
			$data['efooter'] = $this->load->view('templates/efooter','',TRUE);
			$data['chat']    = $this->load->view('templates/chat','',TRUE);

			$this->load->view('estore/ehome', $data);
		}
	}
?>