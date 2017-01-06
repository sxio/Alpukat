<?php
	class C_Admin_Comment extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('admin_username') == NULL){
				redirect('admin/login');
			}
			$this->load->library('pagination');
			$this->load->model('Comment_model');
		}

		public function listcomment(){
			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			// CONFIGURE PAGINATION
			$this->config->load('pagination');
			$config               = $this->config->item('pagination');
			$config['base_url']   = base_url(). 'admin/comment/listcomment';
			$config['total_rows'] = $this->Comment_model->count_all();
			$config['per_page']   = 5;

			$this->pagination->initialize($config);
			$data['pagination']   = $this->pagination->create_links();

			$offset               = $this->uri->segment(4);
			$limit                = $config['per_page'];
			//
			$data['offset']       = $offset;
			$data['count_all']    = $config['total_rows'];
			$data['lists']        = $this->Comment_model->get_list($limit, $offset);

			$this->load->view('admin/comment/listcomment', $data);
		}
	}
?>