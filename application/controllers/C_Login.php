<?php
	class C_Login extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('Login_model');
		}

		public function log_in(){
			$this->form_validation->set_rules('LuserName', 'Username', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('Lpassword', 'Password', 'trim|required');

			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['title'] = "User";
				$data['err_login'] = validation_errors();
				$this->load->view('user', $data);
			} else{
				//insert data do database
				$res = $this->Login_model->check_login();
				if($res === 1){
					$this->session->set_flashdata('msgLogin','<div class="alert alert-success text-center">Login Success!</div>');
					sleep(1.5);
					redirect();
				} else{
					// error => duplicate
					$this->session->set_flashdata('msgLogin','<div class="alert alert-danger text-center">Login Failed. Try Again!</div>');
					redirect('user');
				}
			}
		}
	}
?>