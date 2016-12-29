<?php
	class C_Admin_Login extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('Login_model');
		}
		public function login(){
			if($this->session->userdata('admin_username') != null){
				redirect('admin');
			}
			$this->form_validation->set_rules('admin_username', 'Username', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('admin_password', 'Password', 'trim|required');

			if($this->form_validation->run() == FALSE){
				$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
				$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);
				$data['err_login']    = validation_errors();
				$this->load->view('admin/login', $data);
			} else{
				//insert data do database
				$res = $this->Login_model->admin_login();
				if($res === 1){
					sleep(1);
					redirect('admin/home');
				} else{
					// error => duplicate
					$this->session->set_flashdata('msgLogin','<div class="alert alert-danger text-center err_login">Login Failed. Try Again!</div>');
					redirect('admin/login');
				}
			}
		}
	}
?>