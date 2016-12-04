<?php
	class Login extends CI_Controller{
		public function log_in(){
			$this->form_validation->set_rules('LuserName', 'Username', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('Lpassword', 'Password', 'trim|required');

			if($this->form_validation->run() == FALSE){
				$data['title'] = "User";
				$data['err_login'] = validation_errors();
				$this->load->view('user', $data);
			} else{
				//insert data do database
				$res = $this->login_model->check_login();
				if($res === 1){
					$this->session->set_flashdata('msgLogin','<div class="alert alert-success text-center">Login Success!</div>');
					sleep(1.5);
					redirect('home');
				} else{
					// error => duplicate
					$this->session->set_flashdata('msgLogin','<div class="alert alert-danger text-center">Login Failed. Try Again!</div>');
					redirect('user');
				}
			}
		}
	}
?>