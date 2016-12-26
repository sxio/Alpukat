<?php
	class C_Admin_Member extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('admin_username') == null){
				redirect('admin/login');
			}
			$this->load->model('Member_model');
		}

		public function listmember(){
			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			$data['member'] = $this->Member_model->listmember();
			$this->load->view('admin/member/listmember', $data);
		}
	}
?>