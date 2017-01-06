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

			$this->load->view('forum/'.$page, $data);

		}
		public function validate_dropdown($str){
			return $str == '0' ? FALSE : TRUE;
		}

		public function create_forum(){
			$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[150]|xss_clean');
			//$this->form_validation->set_rules('category','Category','callback_validate_dropdown');
			//$this->form_validation->set_message('select_validate', 'This %s is a default value');
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