<?php
	class C_Booking extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
			$this->load->model('Booking_model');
		}
		public function view(){
			$data['title'] = 'Booking Transactions';
			$data['bookingid'] = $this->Booking_model->get_temp_booking_id();
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav'] = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['chat'] = $this->load->view('templates/chat','',TRUE);
			$this->load->view('booking/booking',$data);
		}
		public function create_booking(){
			if($this->session->userdata('username') == NULL){
				redirect('user');
			}
			
			$username = $this->session->userdata('username');
			$this->form_validation->set_rules('bookingdt', 'Booking Date', 'required');

			$data['title'] = 'Booking Transactions';
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['bookingid'] = $this->Booking_model->get_temp_booking_id();
			$data['nav'] = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['chat'] = $this->load->view('templates/chat','',TRUE);

			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('msg',validation_errors());
				$this->load->view('booking/booking',$data);
			} else{
				// insert to database
			 	$res = $this->Booking_model->add_temp_booking($username);
			 	if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Forum Created</div>';
			 	} else{
					$data['msg'] = '<div class="alert alert-success">'. $res['message'] .'</div>';
			 	}
				redirect('booking/booking');
			}
		}
		public function temp_detail_booking(){
			$data['title'] = 'Booking Transactions';
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav'] = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['chat'] = $this->load->view('templates/chat','',TRUE);


			$this->load->view('booking/temp_detail_booking', $data);
		}

	}
?>