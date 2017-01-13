<?php
	class C_Booking extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('username') == null){
				redirect('user');
			}
			$this->load->database();
			$this->load->model('Booking_model');
			$this->load->model('Profile_model');
		}

		public function view($id = null){
			$bookingid = $this->Booking_model->get_booking_id();
			$data['title'] = 'Booking Transactions';
			$data['bookingid'] = $bookingid;
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav'] = $this->load->view('templates/nav','',TRUE);
		 	$data['doctor_list'] = $this->Profile_model->get_data_doctor($id);

			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$this->load->view('booking/booking',$data);
		}

		public function create_booking(){
			if($this->session->userdata('username') == NULL || $this->session->userdata('user_level') == 2){
				redirect('user');
			}
			$username = $this->session->userdata('username');
			$bookingid = $this->Booking_model->get_booking_id();

			$this->form_validation->set_rules('bookingdt', 'Booking date', 'trim|required');
			$this->form_validation->set_rules('servid', ' Service', 'trim|required');
			$this->form_validation->set_rules('count', 'Count', 'trim|required');

			$data['title']       = 'Booking Transactions';
			$data['header']      = $this->load->view('templates/header','',TRUE);
			$data['bookingid']   = $bookingid;
			$data['nav']         = $this->load->view('templates/nav','',TRUE);
			$data['doctor_list'] = $this->Booking_model->get_doctor();

			$data['footer']      = $this->load->view('templates/footer','',TRUE);
			$data['chat']        = $this->load->view('templates/chat','',TRUE);


			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('msg',validation_errors());
				$this->load->view('booking/booking',$data);
			} else{
				// insert to database
			 	$res = $this->Booking_model->add_booking($username,$bookingid);
			 	if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Book Success!</div>';
			 	} else{
					$data['msg'] = '<div class="alert alert-success">'. $res['message'] .'</div>';
			 	}
			}
			redirect('payment/success/booking');
		}

		public function manage($status, $book_id){
			$userlevel = $this->session->userdata('user_level');
			if($userlevel != 2){
				show_404();
			}
			$res = $this->Booking_model->update_status($status, $book_id);
			redirect('profile/payment-history');
		}
	}
?>