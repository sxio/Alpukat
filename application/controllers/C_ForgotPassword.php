<?php
	class C_ForgotPassword extends CI_Controller{
		public function resetpassword($email = NULL){
			$data['title']    = "forumhome";
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);

			$this->load->view('forgotpassword', $data);
		}
	}
?>