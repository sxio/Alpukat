<?php
	class C_Register extends CI_Controller{
		public function regis(){
			$this->form_validation->set_rules('user_id', 'Username', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean|is_unique[MSTUSER.USER_ID]');
			$this->form_validation->set_rules('user_name', 'Full Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email|is_unique[MSTUSER.EMAIL]');
			$this->form_validation->set_rules('user_password', 'Password', 'trim|required');
			$this->form_validation->set_rules('user_password_conf', 'Confirm Password', 'trim|required|matches[user_password]');
			$this->form_validation->set_rules('handphone', 'Handphone', 'trim|required');
			$this->form_validation->set_rules('telephone', 'Telephone', 'trim|required');
			$this->form_validation->set_rules('user_role', 'Role', 'required');

			if($this->form_validation->run() == FALSE){
				$data['title']  = "User";
				$data['header'] = $this->load->view('templates/header','',TRUE);
				$data['nav']    = $this->load->view('templates/nav','',TRUE);
				$data['footer'] = $this->load->view('templates/footer','',TRUE);

				$data['err_regis'] = validation_errors();
				$this->load->view('user', $data);

			} else{

				if($this->register_model->sendEmail($this->input->post('user_email'))){
					$this->session->set_flashdata('msgRegis','<div class="alert alert-success text-center">You are Successfully Registered! Please verify your email.</div>');

					//insert data do database
					$res = $this->register_model->insert_register();
					redirect('user');

				} else{
					//error
					$this->session->set_flashdata('msgRegis','<div class="alert alert-danger text-center">Oops! Try again later !!!</div>');
					redirect('user');
				}
			}
		}

		public function verify($hash=NULL)
		{
			if ($this->register_model->verifyEmailID($hash))
			{
				$this->session->set_flashdata('msgLogin','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
			} else{
				$this->session->set_flashdata('msgLogin','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
			}
			redirect('user');
		}
	}
?>