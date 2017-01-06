<?php
	class C_Profile extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('username') == NULL){
				redirect('user');
			}
			$this->load->model('History_model');
			$this->load->model('Estore_model');
			$this->load->model('Profile_model');
		}

		public function profile_doctor($userid){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$data['data_doctor'] = $this->Profile_model->get_data_doctor($userid);

			$this->load->view('profile/profile_doctor', $data);
		}

		public function edit_profile_doctor($userid){
			if($userid != $this->session->userdata('username') && $this->session->userdata('user_level') != 2){
				show_404();
			}
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);



			$data['data_doctor'] = $this->Profile_model->get_data_doctor($userid);

			$this->load->view('profile/edit_profile_doctor', $data);

			// Array
			// (
			//     [_photo] =>
			//     [docname] => Stephen Huang
			//     [docbirth] => 1996-06-08
			//     [docaddr] => Jalan PROF HM YAMIN SH No 254
			//     [docabout] =>
			//     [docSD] =>
			//     [docSMP] =>
			//     [docSMA] =>
			//     [docS1] =>
			//     [docS2] =>
			//     [docDR] =>
			//     [docExp] =>
			//     [docSpec] =>
			//     [docCert] =>
			//     [btn_edit] =>
			// )
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

			$this->load->view('profile/history_estore', $data);
		}

		public function reminder(){
			$username = $this->session->userdata('username');
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$this->form_validation->set_rules('reminder_dt','DateTime','required');
			$this->form_validation->set_rules('reminder_desc','Description','trim|required|max_length[100]');


			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
			} else{
				if($this->input->post('save')!=NULL) {
					$res = $this->Profile_model->add_reminder();
					if($res['code'] == 0){
						$data['msg'] = '<div class="alert alert-success msg">Reminder Saved</div>';
					} else{
						$data['msg'] = '<div class="alert alert-danger msg">Something went wrong. Please try again.</div>';
					}
				} elseif($this->input->post('delete')!=NULL){
					$res = $this->Profile_model->remove_reminder($username, $this->input->post('reminder_dt'));
					if($res['code'] == 0){
						$data['msg'] = '<div class="alert alert-success msg">Deleted</div>';
					} else{
						$data['msg'] = '<div class="alert alert-danger msg">Something went wrong. Please try again.</div>';
					}
				}
			}
			$data['r_calendar'] = $this->Profile_model->get_reminder($username);
			$data['r_notif']    = $this->Profile_model->get_nearest_reminder($username);

			$this->load->view('profile/reminder', $data);
		}
	}
?>