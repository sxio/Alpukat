<?php 
	class C_Forumdashboard extends CI_Controller{
		public function view(){
			$data['title'] = "forumdashboard";
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav'] = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['chat'] = $this->load->view('templates/chat','',TRUE);

			$this->load->view('forum/forumdashboard', $data);
		}
	}
?>