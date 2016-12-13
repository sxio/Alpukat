<?php
	class C_Booking extends CI_Controller{
		function __Construct(){
			parent:: __Construct();
			$this->load->database();
			$this->load->model('Booking_model');
		}
		public function view(){
			$data['title'] = 'Booking Transactions';
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav'] = $this->load->view('templates/nav','',TRUE);
			$data['hist'] = $this->load->Booking_model->get_booking_hist();//13-Dec-16 Meikelwis get data
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['chat'] = $this->load->view('templates/chat','',TRUE);

			$this->load->view('booking/booking',$data);
		}
		
	}
?>