<?php 
	class Booking extends CI_Controller{
		public function view(){
			$data['title'] = "Booking";

			$this->load->view('booking');
		}
	}
?>