<?php
	class C_Forum extends CI_Controller{
		public function view(){
			$data['title'] = "forum-home";
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav'] = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['chat'] = $this->load->view('templates/chat','',TRUE);

			$this->load->view('forum/forum-home', $data);
		}
	}
?>