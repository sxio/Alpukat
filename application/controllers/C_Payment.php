<?php
	class C_Payment extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('username') == NULL){
				redirect('user');
			}
			$this->load->library('cart');
		}
		public function view($param = NULL){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			if($param == NULL){
				redirect();
			}

			if($param == 'estore'){
				$this->session->set_flashdata('estore_pay',TRUE);
				$this->session->unset_userdata('booking_pay');
				$this->session->unset_userdata('donate_pay');

				$data['cart']        = $this->cart->contents();
				$data['total_items'] =  $this->cart->total_items();
				$data['total']       = $this->cart->total();
			} elseif ($param == 'booking') {
				$this->session->set_flashdata('booking_pay',TRUE);

				$this->session->unset_userdata('estore_pay');
				$this->session->unset_userdata('donate_pay');
			} elseif ($param == 'donate') {
				$this->session->set_flashdata('donate_pay',TRUE);

				$this->session->unset_userdata('estore_pay');
				$this->session->unset_userdata('booking_pay');
			}

			$this->load->view('payment/payment', $data);
		}

		public function pay_success($param = NULL){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			if($param == NULL){
				redirect();
			}

			if($param == 'estore'){
				$this->session->set_flashdata('estore_pay',TRUE);

				$this->session->unset_userdata('booking_pay');
				$this->session->unset_userdata('donate_pay');
			} elseif ($param == 'booking') {
				$this->session->set_flashdata('booking_pay',TRUE);

				$this->session->unset_userdata('estore_pay');
				$this->session->unset_userdata('donate_pay');
			} elseif ($param == 'donate') {
				$this->session->set_flashdata('donate_pay',TRUE);

				$this->session->unset_userdata('estore_pay');
				$this->session->unset_userdata('booking_pay');
			}
			$this->load->view('payment/payment_success', $data);
		}
	}
?>