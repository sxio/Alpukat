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

		public function edit_profile_user($userid){
			if($this->session->userdata('username') != $userid){
				show_404();
			}

			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['user'] = $this->Profile_model->get_data_user($userid);
// _photo
// usrname
// usrbirth
// usremail
// usrHP
// usraddr
			$this->form_validation->set_rules('usrname','Name','trim');
			$this->form_validation->set_rules('usremail','Email','trim|valid_email|is_unique[MSTUSER.EMAIL]');
			$this->form_validation->set_rules('usrHP','Phone Number','trim');
			$this->form_validation->set_rules('usraddr','Address','trim');

			if($this->form_validation->run() == FALSE){
				//
			}

			$this->load->view('profile/edit_profile_user', $data);
		}

		public function edit_profile_doctor($userid){
			if($userid != $this->session->userdata('username') || $this->session->userdata('user_level') != 2){
				show_404();
			}

			if($this->input->post('btn_edit')){
				if(!empty($_FILES['_photo'])){
					// UPLOAD IMAGE
					$config['upload_path']   = './assets/img/doctor/certificate';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['overwrite']     = TRUE;
					$config['max_size']      = 0;
					$ext = pathinfo($_FILES['_photo']['name'], PATHINFO_EXTENSION);
					$config['file_name'] = $userid . '_photo' . '.' . $ext;
					$this->load->library('upload');
					$this->upload->initialize($config);
					if(!$this->upload->do_upload('_photo')){
						$error = $this->upload->display_errors();
					}else{
						$data['upload_data'] = $this->upload->data();
					}
					if(!isset($error)){
						$this->Profile_model->update_img_doctor($userid, $data['upload_data']['file_name']);
					}
				}
				$res = $this->Profile_model->edit_data_doctor($userid);
				if($res['code'] == 0){
					$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Edit Success</div>');
				} else {
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">'. $res['message'] .'</div>');
				}
			}
			$data['data_doctor'] = $this->Profile_model->get_data_doctor($userid);

			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$this->load->view('profile/edit_profile_doctor', $data);
		}

		public function dashboard($userid){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$data['user']   = $this->Profile_model->get_data_user($userid);
			$data['estore'] = $this->Estore_model->get_order_by_username($userid);
			$data['hist']   = $this->History_model->get_booking_hist();//13-Dec-16 Meikelwis get data

			$this->load->view('profile/dashboard', $data);
		}

		public function payment_history(){
			$userid = $this->session->userdata('username');
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);

			$data['estore'] = $this->Estore_model->get_order_by_username($userid);
			$data['hist']   = $this->History_model->get_booking_hist();//13-Dec-16 Meikelwis get data

			$this->load->view('profile/payment_history', $data);
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