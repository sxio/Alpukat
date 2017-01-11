<?php
	class C_Forum extends CI_Controller{
		public function __construct(){
			parent:: __construct();
		 	$this->load->model('Forum_model');
			$this->load->library('pagination');
		}

		public function view(){
			$username = $this->session->userdata('username');
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);

			$data['hot_topics'] = $this->Forum_model->get_forum_header_by_num_post(7);
			$data['my_forum'] = $this->Forum_model->get_forum_header_by_username($username);


			for($i = 0; $i < count($data['hot_topics']); $i++){
				$detail = $this->Forum_model->get_forum_detail($data['hot_topics'][$i]['FORUM_ID'], 0);
				if(count($detail) == 0){
					$data['hot_topics'][$i]['REPLY_NUM'] = 0;
				} else {
					$data['hot_topics'][$i]['REPLY_NUM'] = count($detail, COUNT_RECURSIVE) / (count($detail[0]) + 1);
				}
			}

			$this->load->view('forum/forumhome', $data);
		}
		//header
		public function list_forum(){
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);

			// CONFIGURE PAGINATION
			$this->config->load('pagination');
			$config                = $this->config->item('pagination');
			$config['base_url']    = base_url(). 'forum/list';
			$config['total_rows']  = $this->Forum_model->count_all();
			$config['per_page']    = 10;
			$config['uri_segment'] = 3;

			$this->pagination->initialize($config);
			$data['pagination']   = $this->pagination->create_links();

			$offset               = $this->uri->segment(3);
			$limit                = $config['per_page'];
			//
			$data['offset']       = $offset;
			$data['count_all']    = $config['total_rows'];

			$data['forum_list'] = $this->Forum_model->get_forum_header($limit, $offset);
			$this->load->view('forum/forumlist', $data);
		}

		public function create_forum(){
			if($this->session->userdata('username') == NULL){
				redirect('user');
			}
			$username = $this->session->userdata('username');
			$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[150]|xss_clean');
			$this->form_validation->set_rules('content', 'Content', 'trim|required');
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);

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
		public function detail_forum($parent_id){
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);

			$data['forum_header'] = $this->Forum_model->get_forum_header_by_id($parent_id)[0];
			$data['forum_detail'] = $this->Forum_model->get_forum_detail($parent_id, 0);

			$this->load->view('forum/forumdetail', $data);
		}

		public function reply($parent_id){ // VIEW
			if($this->session->userdata('username') == NULL){
				redirect('user');
			}
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);

			$data['header_id'] = $this->Forum_model->get_id_header_by_nested_child_id($parent_id);
			$data['forum_parent'] = $this->Forum_model->get_forum_parent_by_id($parent_id);

			$this->load->view('forum/forumreply', $data);
		}

		public function add_reply($parent_id){
			$username = $this->session->userdata('username');
			$content = $this->input->post('f_content');

			$reply_id = $this->Sequences_model->concat(3, mdate('%Y-%m-%d %H:%i:%s',now()));
			$res = $this->Forum_model->add_forum_detail($parent_id, $content, $username);
			$header_id = $this->Forum_model->get_id_header_by_nested_child_id($parent_id);

			redirect('forum/detail/'. $header_id. '#'. $reply_id);
		}
	}
?>