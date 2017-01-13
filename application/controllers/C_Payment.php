<?php
	class C_Payment extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('username') == NULL){
				redirect('user');
			}
			$this->load->model('Estore_model');
			$this->load->model('Donate_model');
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

				$data['d_name'] = $this->input->post('d_name');
				$data['d_amount'] = $this->input->post('d_amount');
				$data['d_hist'] = $this->Donate_model->get_donation();
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

				$this->form_validation->set_rules('b_number','Bank Account Number','trim');
				$this->form_validation->set_rules('b_acc_name','Bank Account Name','trim');
				$this->form_validation->set_rules('b_amount','Amount','trim');
				$this->form_validation->set_rules('b_behalf','Name','trim');

				if($this->form_validation->run() == FALSE){
					$this->session->set_flashdata('msg','Whoops something went wrong');
				} else {
					$res = $this->Donate_model->add_donation();
					if($res['code'] == 0) {
						$this->session->set_flashdata('msg','berhasil');
					} else {
						$this->session->set_flashdata('msg','Whoops something went wrong');
					}
				}
			}
			// }elseif ($param == 'donate') {
			// 	$this->session->set_flashdata('donate_pay',TRUE);
			//
			// 	$this->session->unset_userdata('estore_pay');
			// 	$this->session->unset_userdata('booking_pay');
			//
			// 	$this->form_validation->set_rules('b_number','Bank Account Number','trim');
			// 	$this->form_validation->set_rules('b_acc_name','Bank Account Name','trim');
			// 	$this->form_validation->set_rules('b_amount','Amount','trim');
			// 	$this->form_validation->set_rules('b_behalf','Name','trim');
			//
			// 	if($this->form_validation->run() == FALSE){
			// 		$this->session->set_flashdata('msg','Whoops something went wrong');
			// 	} else {
			// 		$res = $this->Donate_model->add_donation();
			// 		if($res['code'] == 0) {
			// 			$this->session->set_flashdata('msg','berhasil');
			// 		} else {
			// 			$this->session->set_flashdata('msg','Whoops something went wrong');
			// 		}
			// 	}
			// }
			elseif ($param == 'rating') {
				$userid = $this->session->userdata('username');
				$this->session->set_flashdata('rating',TRUE);

				$this->session->unset_userdata('estore_pay');
				$this->session->unset_userdata('booking_pay');
				$this->session->unset_userdata('donate_pay');

				$this->form_validation->set_rules('docfriendly','Friendliness','trim|numeric');
				$this->form_validation->set_rules('docexpert','Expertise','trim|numeric');
				$this->form_validation->set_rules('doctime','On Time field','trim|numeric');
				$this->form_validation->set_rules('docpro','Professionalism','trim|numeric');

				if($this->form_validation->run() == FALSE){
					$this->session->set_flashdata('msg', validation_errors());
				} else {
					// print_r($this->input->post()); die;
					$this->load->model('Rating_model');
					$res = $this->Rating_model->add_rating();
					var_dump($res); die;
					if($res['code'] != 0){
						echo 'Whoops! Something went wrong. Please try again later';
						die;
					}
				}
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
