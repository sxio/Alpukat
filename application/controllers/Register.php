<?php
	class Register extends CI_Controller{
		public function regis(){
			$this->form_validation->set_rules('user_id', 'Username', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('user_name', 'Full Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email|is_unique[MSTUSER.EMAIL]');
			$this->form_validation->set_rules('user_password', 'Password', 'trim|required');
			$this->form_validation->set_rules('handphone', 'Handphone', 'trim|required');
			$this->form_validation->set_rules('telephone', 'Tandphone', 'trim|required');
			$this->form_validation->set_rules('user_role', 'Role', 'required');

			if($this->form_validation->run() == FALSE){
				$this->load->view('user', array('title' => "User"));
			} else{
				//insert data do database
				$res = $this->register_model->insert_register();
				if($res['code'] == 0){
					$this->session->set_flashdata('msgRegis','<div class="alert alert-success text-center">Registration Success!</div>');
					redirect('user');
				} else if($res['code'] == 1062){
					// error => duplicate
					$this->session->set_flashdata('msgRegis','<div class="alert alert-danger text-center">Oops! Username already taken.</div>');
					redirect('user');
				}
			}
		}
	}
?>