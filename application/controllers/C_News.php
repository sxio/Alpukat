<?php
	class C_News extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('News_model');
		}
		public function view(){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$data['news_lists'] = $this->News_model->get_list(0, 0);

			$this->load->helper('html');
			$this->load->view('news/news', $data);
		}

		public function news_details($news_id){
			$data['title'] = 'Avocado | AvoNews';
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$data['news_detail'] = $this->News_model->get_news($news_id)[0];

			$this->load->view('news/news_details', $data);
		}
	}
?>