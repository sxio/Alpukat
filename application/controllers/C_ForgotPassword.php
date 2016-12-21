<?php
	class C_ForgotPassword extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->helper('date');
			$this->load->model('ForgotPassword_model');
		}

		public function view(){
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);
			$this->load->view('forgotpassword', $data);
		}

		public function requestForgot(){
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);

			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_is_exist');
			if($this->form_validation->run() == FALSE){
				// not exist
				$data['msg'] = "<div class='alert alert-danger'>Email not found</div>";
			} else {
				// exist
				$email = $this->input->post('email');
				if($this->ForgotPassword_model->verify_email($email)){
					$data['msg'] = "<div class='alert alert-info'>Check your email for a link to reset your password. If it doesn\'t appear within a few minutes, check your spam folder.</div>";
				} else {
					$data['msg'] = "<div class='alert alert-danger'>We got an Error on our side. Please try again later.</div>";
				}
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

		public function verify_email($email_hash = NULL, $time = NULL){
			if(now() - $time > 3600){
				$data['header']   = $this->load->view('templates/header','',TRUE);
				$data['nav']      = $this->load->view('templates/nav','',TRUE);
				$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
				$data['footer']   = $this->load->view('templates/footer','',TRUE);
				$data['msg']      = "<div class ='alert alert-danger'>The link has been expired. Please try again.</div>";
				$this->load->view('forgotpassword', $data);
			} else {
				$data['header']     = $this->load->view('templates/header','',TRUE);
				$data['nav']        = $this->load->view('templates/nav','',TRUE);
				$data['forumnav']   = $this->load->view('forum/forumnav','',TRUE);
				$data['footer']     = $this->load->view('templates/footer','',TRUE);
				$data['email_hash'] = $email_hash;
				$this->load->view('resetpassword', $data);
			}
		}

		public function requestReset(){
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('cpassword', 'Retype New Password', 'trim|required|matches[password]');

			$data['header']     = $this->load->view('templates/header','',TRUE);
			$data['nav']        = $this->load->view('templates/nav','',TRUE);
			$data['footer']     = $this->load->view('templates/footer','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['email_hash'] = $this->input->post('email_hash');
				$data['err_reset'] = validation_errors();
				$this->load->view('resetpassword', $data);
			} else{
				$res = $this->ForgotPassword_model->reset_password();
				if($res){
					$data['msg'] = '<div class="alert alert-success">Your password has been reset. Try login using your new password.</div>';
					$this->load->view('resetpassword', $data);
				} else{
					$data['msg'] = '<div class="alert alert-danger">Oops! Something went wrong. Please try again later.</div>';
				}
			}
		}
	}
?>