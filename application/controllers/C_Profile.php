<?php
	class C_Profile extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('History_model');
			$this->load->model('Estore_model');
		}

		public function dashboard(){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$data['estore'] = $this->Estore_model->get_order_by_username($this->session->userdata('username'));
			$data['hist']   = $this->History_model->get_booking_hist();//13-Dec-16 Meikelwis get data

			$this->load->view('profile/dashboard', $data);
		}

		public function history_estore($order_id){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$data['estore_hist'] = $this->Estore_model->get_order_by_id($order_id);

			$this->load->view('profile/history-estore', $data);
		}

		public function reminder(){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$this->load->view('profile/reminder', $data);
		}
	}
?>