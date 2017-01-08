<?php
	class C_Forum extends CI_Controller{
		function __construct(){
			parent:: __construct();
		 	$this->load->model('Forum_model');
		}

		function view($page = "forumhome"){
			$data['title']    = "forumhome";
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);

			$data['category_list'] = $this->Forum_model->get_category();
			$this->load->view('forum/'.$page, $data);

		}
		//header
		function forum(){
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);

			$data['forum_list'] = $this->Forum_model->get_forum(1);
			$this->load->view('forum/forumlist', $data);
		}		

		function create_forum(){
			if($this->session->userdata('username') == NULL){
				redirect('user');
			}
			$username = $this->session->userdata('username');
			$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[150]|xss_clean');
			$this->form_validation->set_rules('content', 'Content', 'trim|required');
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);

		 	$data['category_list'] = $this->Forum_model->get_category();
			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('msg',validation_errors());
				$this->load->view('forum/forumcreate',$data);
			} else{
				// insert to database
			 	$res = $this->Forum_model->add_forum($username);
			 	if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Forum Created</div>';
			 	} else{
					$data['msg'] = '<div class="alert alert-success">'. $res['message'] .'</div>';
			 	}
				redirect('forum/forumlist');
			}
		//detail	
		function detail_forum($forum_id){
				$data['header']   = $this->load->view('templates/header','',TRUE);
				$data['nav']      = $this->load->view('templates/nav','',TRUE);
				$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
				$data['footer']   = $this->load->view('templates/footer','',TRUE);

				$data['forum_list'] = $this->Forum_model->get_forum_by_id($forum_id);
				$this->load->view('forum/forumdetail', $data);
			}
		}
	}
?>