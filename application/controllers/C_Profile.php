<?php
	class C_Profile extends CI_Controller{
		public function view(){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['chat']   = $this->load->view('templates/chat','',TRUE);

			$this->load->helper('html');
			$this->load->view('profile/profile', $data);
		}

		public function view_history(){
			$data['header']     = $this->load->view('templates/header','',TRUE);
			$data['nav']        = $this->load->view('templates/nav','',TRUE);
			$data['footer']     = $this->load->view('templates/footer','',TRUE);

			$this->load->view('profile/paymentHistory', $data);
		}
	}
?>