<?php
	class C_News extends CI_Controller{
		public function view(){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$this->load->helper('html');
			$this->load->view('news/news', $data);
		}

		public function news_details(){
			$data['title'] = 'Avocado | AvoNews';
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$this->load->view('news/news_details', $data);

		}
	}
?>