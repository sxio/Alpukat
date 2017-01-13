<?php
	class C_Profile extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('username') == NULL){
				redirect('user');
			}
			$this->load->model('Estore_model');
			$this->load->model('Profile_model');
			$this->load->model('Forum_model');
			$this->load->model('Comment_model');
			$this->load->model('Category_model');
			$this->load->model('Booking_model');
			$this->load->model('Donate_model');
			$this->load->model('Rating_model');
		}

		public function view_profile($userid){
			$user = $this->Profile_model->get_data_user($userid);
			if($user['USER_LEVEL'] == 1){
				redirect('profile/dashboard/'. $userid);
			} else if ($user['USER_LEVEL'] == 2) {
				redirect('profile/doctor/'. $userid);
			}
		}

		public function profile_doctor($userid){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$data['data_doctor'] = $this->Profile_model->get_data_doctor($userid);
			$data['comments'] = $this->Comment_model->get_comment($userid);
			$data['me'] = $this->Profile_model->get_data_user($this->session->userdata('username'));
			$data['rating'] = $this->Rating_model->get_rating_by_doctor_id($userid);

			$this->load->view('profile/profile_doctor', $data);
		}

		// KENEDY LUKITO --> RATING DOCTOR
		public function rating_doctor($userid){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['doc'] = $this->Profile_model->get_data_doctor($userid);
			$this->load->view('doctor/rating_doctor', $data);
		}

		public function edit_profile_user($userid){
			if($this->session->userdata('username') != $userid){
				show_404();
			}

			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);
			$data['user'] = $this->Profile_model->get_data_user($userid);

			if($this->input->post('btn_edit')) {
				$this->form_validation->set_rules('usrname','Name','trim');
				$this->form_validation->set_rules('usremail','Email','trim|valid_email');
				$this->form_validation->set_rules('usrHP','Phone Number','trim');
				$this->form_validation->set_rules('usraddr','Address','trim');
				if($this->form_validation->run() == FALSE){
					$this->session->set_flashdata('msg', validation_errors());
					redirect('profile/dashboard/'. $userid);
				} else {
					// UPLOAD PHOTO
					$this->load->library('upload');
					$config['upload_path']   = './assets/img/user';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['overwrite']     = TRUE;
					$config['max_size']      = 0;

					$ext = pathinfo($_FILES['_photo']['name'], PATHINFO_EXTENSION);
					$config['file_name'] = $userid . '_photo' . '.' . $ext;
					$this->upload->initialize($config);

					if(!empty($_FILES['_photo']['name'])){
						if(!$this->upload->do_upload('_photo')){
							$error = $this->upload->display_errors();
							$this->session->set_flashdata('msg', $error);
						}else{
							$img = $this->upload->data();
							$this->Profile_model->update_img_user($userid, $img['file_name']);
						}
					}

					$res = $this->Profile_model->edit_data_user($userid);
					$this->session->set_flashdata('msg', 'Edit Profile Success');

					redirect('profile/dashboard/'. $userid);
				}
			}
			$this->load->view('profile/edit_profile_user', $data);
		}

		public function edit_profile_doctor($userid){
			if($userid != $this->session->userdata('username') || $this->session->userdata('user_level') != 2){
				show_404();
			}

			if($this->input->post('btn_edit')){
				// UPLOAD IMAGE
				$config['upload_path']   = './assets/img/doctor';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['overwrite']     = TRUE;
				$config['max_size']      = 0;
				$this->load->library('upload');

				$error = NULL;
				foreach ($_FILES as $key => $value) {
					$data['upload_data'][$key]['file_name'] = '';

					if(!empty($value['name'])){
						$ext = pathinfo($value['name'], PATHINFO_EXTENSION);

						$config['file_name'] = $userid . $key . '.' . $ext;
						$this->upload->initialize($config);

						if(!$this->upload->do_upload($key)){
							$error[$key] = $this->upload->display_errors();
						} else {
							$data['upload_data'][$key] = $this->upload->data();
						}
					} else {
						continue;
					}

				}

				$this->Profile_model->update_img_doctor($userid, $data['upload_data']);

				$res = $this->Profile_model->edit_data_doctor($userid);
				if($res['code'] == 0){
					$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Edit Success</div>');
				} else {
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">'. $res['message'] .'</div>');
				}
			}
			$data['data_doctor'] = $this->Profile_model->get_data_doctor($userid);
			$data['dct_cat'] = $this->Category_model->get_doctor_cat();

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
			$data['estore'] = $this->Estore_model->get_order_by_userid($userid);
			$data['forum']  = $this->Forum_model->get_forum_header_by_username($userid);
			$data['booking'] = $this->Booking_model->get_booking_by_userid($userid);

			$this->load->view('profile/dashboard', $data);
		}

		public function payment_history(){
			$userid = $this->session->userdata('username');
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);

			$user = $this->Profile_model->get_data_user($userid);

			$data['estore'] = $this->Estore_model->get_order_by_userid($userid);
			$data['donate'] = $this->Donate_model->get_donation_by_userid($userid);
			if($user['USER_LEVEL'] == 1) {
				$data['hist']   = $this->Booking_model->get_booking_by_userid($userid);
				$data['is_doctor'] = FALSE;
			} elseif ($user['USER_LEVEL'] == 2) {
				$data['hist']   = $this->Booking_model->get_booking_for_doctor_manage($userid);
				$data['is_doctor'] = TRUE;
			}

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
					$res = $this->Reminder_model->add_reminder();
					if($res['code'] == 0){
						$this->session->set_flashdata('msg', '<div class="alert alert-success msg">Reminder Saved</div>');
					} else{
						$this->session->set_flashdata('msg', '<div class="alert alert-danger msg">Something went wrong. Please try again.</div>');
					}
				} elseif($this->input->post('delete')!=NULL){
					$res = $this->Reminder_model->remove_reminder($username, $this->input->post('reminder_dt'));
					if($res['code'] == 0){
						$this->session->set_flashdata('msg', '<div class="alert alert-success msg">Deleted</div>');
					} else{
						$this->session->set_flashdata('msg', '<div class="alert alert-danger msg">Something went wrong. Please try again.</div>');
					}
				}
			}
			$data['r_calendar'] = $this->Reminder_model->get_reminder($username);
			$data['r_notif']    = $this->Reminder_model->get_nearest_reminder($username);

			$this->load->view('profile/reminder', $data);
			if($this->input->post('save') || $this->input->post('delete')){
				redirect('profile/reminder');
			}
		}

		public function add_doctor_comment($dctid){
			$userid = $this->session->userdata('username');
			$this->Comment_model->add_doctor_comment($dctid, $userid);
			redirect('profile/doctor/'. $dctid);
		}
	}
?>
