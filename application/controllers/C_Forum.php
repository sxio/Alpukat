<?php
	class C_Forum extends CI_Controller{
		public function __construct(){
			parent:: __construct();
		 	$this->load->model('Forum_model');
		}

		public function view($page = "forumhome"){
			$data['title']    = "forumhome";
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);

			$data['category_list'] = $this->Forum_model->get_category();
			$this->load->view('forum/'.$page, $data);

		}

		public function create_forum(){
			$username = $this->session->userdata('username');
			$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[150]|xss_clean');
			$this->form_validation->set_rules('content', 'Content', 'trim|required');
			;
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
			} else{
				// insert to database
			 	$res = $this->Forum_model->add_forum($username);
			 	if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Forum Created</div>';
			 	} else{
					$data['msg'] = '<div class="alert alert-success">'. $res['message'] .'</div>';
			 	}
			}

			$data['category_list'] = $this->Forum_model->get_category();
			$this->load->view('forum/forumcreate', $data);
		}
	}
?>