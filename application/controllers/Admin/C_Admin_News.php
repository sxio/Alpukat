<?php
	class C_Admin_News extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
			$this->load->model('News_model');
		}

		public function view($page = null){
			if(!file_exists(APPPATH.'/views/admin/news/'.$page.'.php')){
				show_404();
			}

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			$this->load->helper('html');
			$this->load->view('admin/news/'.$page, $data);
		}

		public function addnews(){
			$this->form_validation->set_rules('newsID', 'News ID', 'trim|required|alpha_numeric|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('newsCategory', 'Category', 'required');
			$this->form_validation->set_rules('newsTitle', 'News Title', 'trim|required|alpha_numeric|min_length[10]');
			$this->form_validation->set_rules('newsContent', 'News Content', 'trim|required');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
				$this->load->view('admin/news/addnews', $data);
			} else{

			}
		}

		public function editnews(){
			$this->form_validation->set_rules('newsID', 'News ID', 'trim|required|alpha_numeric|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('newsCategory', 'Category', 'required');
			$this->form_validation->set_rules('newsTitle', 'News Title', 'trim|required|alpha_numeric|min_length[10]');
			$this->form_validation->set_rules('newsContent', 'News Content', 'trim|required');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
				$this->load->view('admin/news/editnews', $data);
			} else{

			}
		}
	}
?>