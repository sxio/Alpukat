<?php 
	class Forum extends CI_Controller{
		public function view(){
			$data['title'] = "forum-home";
			
			$this->load->view('forum/forum-home');
		}
	}
?>