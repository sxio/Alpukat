<?php
	class C_Logout extends CI_Controller{
		public function log_out(){
			$this->session->sess_destroy();
			redirect();
		}
	}
?>