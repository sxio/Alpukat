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
			// $data['hist'] = $this->load->Forum_model->get_booking_hist();//13-Dec-16 Meikelwis get data

			$this->load->view('forum/'.$page, $data);

		}
		public function create_forum(){
			$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[150]|xss_clean');
			$this->form_validation->set_rules('content', 'Content', 'trim|required');

			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
			} else{
				// insert to database
			 	$res = $this->Forum_model->add_forum();
			 	if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Forum Created</div>';
			 	} else{
					$data['msg'] = '<div class="alert alert-success">'. $res['message'] .'</div>';
			 	}
			}
			$this->load->view('forum/forumcreate', $data);
		}
	}
?>