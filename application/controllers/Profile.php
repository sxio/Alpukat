<?php
	class Profile extends CI_Controller{
		public function view(){

			$data['title'] = "Profile";

			$this->load->view('profile');
		}
	}