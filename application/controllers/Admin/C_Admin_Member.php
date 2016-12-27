<?php
	class C_Admin_Member extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('admin_username') == null){
				redirect('admin/login');
			}
			$this->load->helper('date');
			$this->load->model('Member_model');
		}

		public function listmember(){
			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			$data['user'] = $this->Member_model->listmember(1);
			$data['doctor'] = $this->Member_model->listmember(2);
			$data['staff'] = $this->Member_model->listmember(0);
			$this->load->view('admin/member/listmember', $data);
		}

		public function addmember(){
			$this->form_validation->set_rules('userId', 'Member ID', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean|is_unique[MSTUSER.USER_ID]');
			$this->form_validation->set_rules('userName', 'Full Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('userPass', 'Password', 'trim|required|min_length[6]');
			$this->form_validation->set_rules('retypePass', 'Retype Password', 'trim|required|matches[userPass]');
			$this->form_validation->set_rules('userBirth', 'Birthday', 'required');
			$this->form_validation->set_rules('userEmail', 'Email', 'trim|required|valid_email|is_unique[MSTUSER.EMAIL]');
			$this->form_validation->set_rules('userHP', 'Handphone', 'trim|required');
			$this->form_validation->set_rules('userTel', 'Telephone', 'trim|required');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
			} else {
				$res = $this->Member_model->add_member();
				if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Staff added to database.</div>';
				} else{
					$data['msg'] = '<div class="alert alert-danger">Oops! Something went wrong. Please try again later.</div>';
				}
			}

			$this->load->view('admin/member/addmember', $data);
		}

		public function addrole(){
			$this->form_validation->set_rules('roleID', 'Role ID', 'trim|required|min_length[1]|max_length[20]|is_unique[MSTUSERLEVEL.USER_LEVEL]|xss_clean');
			$this->form_validation->set_rules('roleName', 'Role Name', 'trim|required|min_length[2]|max_length[10]');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
			} else {
				$res = $this->Member_model->add_role();
				if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Role added to database.</div>';
				} else{
					$data['msg'] = '<div class="alert alert-danger">Oops! Something went wrong. Please try again later.</div>';
				}
			}

			$data['curr_role'] = $this->Member_model->get_all_roles()['data'];
			$data['num_row_role'] = $this->Member_model->get_all_roles()['num_rows'];

			$this->load->view('admin/member/addrole', $data);
		}
	}
?>