<?php
	class C_Register extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('Register_model');
		}

		public function regis(){
			$this->form_validation->set_rules('user_id', 'Username', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean|is_unique[MSTUSER.USER_ID]');
			$this->form_validation->set_rules('user_name', 'Full Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email|is_unique[MSTUSER.EMAIL]');
			$this->form_validation->set_rules('user_password', 'Password', 'trim|required|min_length[6]');
			$this->form_validation->set_rules('user_password_conf', 'Confirm Password', 'trim|required|matches[user_password]');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('date_birth', 'Birthday', 'required');
			$this->form_validation->set_rules('handphone', 'Handphone', 'trim|required');
			$this->form_validation->set_rules('user_role', 'Role', 'required');

			if($this->form_validation->run() == FALSE){
				$data['title']  = "User";
				$data['header'] = $this->load->view('templates/header','',TRUE);
				$data['nav']    = $this->load->view('templates/nav','',TRUE);
				$data['footer'] = $this->load->view('templates/footer','',TRUE);

				$data['err_regis'] = validation_errors();
				$this->load->view('user', $data);

			} else{

				if($this->Register_model->sendEmail($this->input->post('user_email'))){
					$this->session->set_flashdata('msgRegis','<div class="alert alert-success text-center">You are Successfully Registered! Please verify your email.</div>');

					//insert data to database
					$res = $this->Register_model->insert_register();
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
			if ($this->Register_model->verify_email($hash))
			{
				$this->session->set_flashdata('msgLogin','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
			} else{
				$this->session->set_flashdata('msgLogin','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
			}
			redirect('user');
		}

		public function verify_doctor($hash = NULL){
			$this->form_validation->set_rules('_cfee', 'Consultation Fee', 'trim|required');
			$this->form_validation->set_rules('_bfee', 'Booking Fee', 'trim|required');

			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['hash']   = $hash;

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
			} else{
				// UPLOAD PHOTOS
				$this->load->library('upload');
				$config['upload_path']   = './assets/img/doctor/certificate';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['overwrite']     = TRUE;
				$config['max_size']      = 0;

				$user = $this->Register_model->get_user_by_email_hash($hash)[0];

				$error = NULL;
				foreach($_FILES as $key => $value) {
					$ext = pathinfo($value['name'], PATHINFO_EXTENSION);

					$config['file_name'] = $user['USER_ID'] . $key . '.' . $ext;
					$this->upload->initialize($config);

					if(!$this->upload->do_upload($key)){
						$error = $this->upload->display_errors();
					}else{
						$data['upload_data'][$key] = $this->upload->data();
					}
				}
				//
				if(!isset($error)){
					// INSERT DATABASE
					$verify = $this->Register_model->verify_email($hash);
					$insert = $this->Register_model->add_doctor($user, $data['upload_data']);
					//
					if($verify && $insert && !isset($error)){
						$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">SignUp Complete. Try to <a class="" href="'. base_url('user') .'">login</a></div>');
					} else {
						$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Whoops! Something went wrong. Please try again later.</a></div>');
					}
				} else{
					$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Whoops! Something went wrong. Please try again later.</a></div>');
				}
			}

			$this->load->view('doctor/verify_doctor', $data);
		}
	}
?>