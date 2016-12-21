<?php
	class C_ForgotPassword extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('ForgotPassword_model');
		}


		public function view(){
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);
			$this->load->view('forgotpassword', $data);
		}

		public function requestReset(){
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);

			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_is_exist');
			if($this->form_validation->run() == FALSE){
				// not exist
				$this->session->set_flashdata('msgNotFound', 'Email not found');
			} else {
				// exist
				$email = $this->input->post('email');
				$this->ForgotPassword_model->verify_email($email);
				$this->session->set_flashdata('msgFound', 'Check your email for a link to reset your password. If it doesn\'t appear within a few minutes, check your spam folder.');
			}
			$this->load->view('forgotpassword', $data);
		}

		public function is_exist($email){
			$res = $this->ForgotPassword_model->check_exist($email);
			if($res === 1){
				return TRUE;
			} else {
				return FALSE;
			}
		}

		public function resetPassword($email_hash = NULL){

		}
	}
?>