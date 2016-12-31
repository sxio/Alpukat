<?php
	class C_Payment extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('username') == NULL){
				redirect('user');
			}
			$this->load->model('Estore_model');
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
				$data['total_items'] = $this->cart->total_items();
				$data['total']       = $this->cart->total();

				$data['user_info'] = $this->Estore_model->get_user_info($this->session->userdata('username'))[0];

				$data['nav']         = $this->load->view('estore/templates/enav',$data,TRUE);

			} elseif ($param == 'booking') {
				$this->session->set_flashdata('booking_pay',TRUE);

				$this->session->unset_userdata('estore_pay');
				$this->session->unset_userdata('donate_pay');
			} elseif ($param == 'donate') {
				$this->session->set_flashdata('donate_pay',TRUE);

				$this->session->unset_userdata('estore_pay');
				$this->session->unset_userdata('booking_pay');
			}

			$this->load->view('payment/payment-form', $data);
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

				$res = $this->Estore_model->add_order();
				// print_r($this->cart->contents());
				// return;
				if ($res['code'] != 0){
					echo 'something went wrong, please try again';
					return;
				} else{
					$this->cart->destroy();
				}
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


		public function estore_paymentreview(){
			//$this->form_validation->set_rules('shoppingid', 'Username', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean|is_unique[MSTUSER.USER_ID]');
			//$this->form_validation->set_rules('buyername', 'Full Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('buyeraddress', 'Address', 'trim|required|max_length[50]');
			$this->form_validation->set_rules('banktype', 'Bank Name', 'required');
			$this->form_validation->set_rules('banknumber', 'Bank Account Number', 'trim|required');
			$this->form_validation->set_rules('bankAccName', 'Bank Account Name', 'trim|required');
			$this->form_validation->set_rules('date_tf', 'Date Transfer', 'required');
			$this->form_validation->set_rules('transport', 'Transport', 'required');
			// $this->form_validation->set_rules('transfee', 'Role', 'required');
			// $this->form_validation->set_rules('grandtotal', 'Role', 'required');

			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('form_error', validation_errors());
				redirect('estore/payment/form');
			}

			$data['cart']          = $this->cart->contents();
			$data['total_items']   = $this->cart->total_items();
			$data['total']         = $this->cart->total();

			$data['header']        = $this->load->view('templates/header','',TRUE);
			$data['enav']          = $this->load->view('estore/templates/enav', $data,TRUE);
			$data['efooter']       = $this->load->view('estore/templates/efooter','',TRUE);

			$data['form_input']    = $this->input->post();
			// print_r($data['form_input']);
			// return;
			$this->load->view('payment/epaymentreview', $data);
		}
	}
?>