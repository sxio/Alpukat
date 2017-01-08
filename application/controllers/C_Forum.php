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
				redirect('forum/list');
			}
		}
		//detail
		function detail_forum($parent_id){
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);

			$data['forum_header'] = $this->Forum_model->get_forum_header_by_id($parent_id)[0];
			$data['forum_detail'] = $this->Forum_model->get_forum_detail($parent_id);

			$this->load->view('forum/forumdetail', $data);
		}

		function reply($parent_id){
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);

			$data['forum_parent'] = $this->Forum_model->get_forum_parent_by_id($parent_id);

			$this->load->view('forum/forumreply', $data);
		}

		function add_reply($parent_id){
			$username = $this->session->userdata('username');
			$content = $this->input->post('f_content');

			$res = $this->Forum_model->add_forum_detail($parent_id, $content, $username);
			$header_id = $this->Forum_model->get_header_id_by_grandchild_id($parent_id);

			redirect('forum/detail/'. $header_id);
		}

		// function tes($id){
		// 	print_r($this->Forum_model->get_header_id_by_grandchild_id($id));
		// 	return;
		// }
	}
?>