<?php
	class C_Booking extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
			$this->load->model('Booking_model');
		}
		public function view(){
			$data['title'] = 'Booking Transactions';
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav'] = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['chat'] = $this->load->view('templates/chat','',TRUE);


			$this->load->view('booking/booking',$data);
		}

	}
?>