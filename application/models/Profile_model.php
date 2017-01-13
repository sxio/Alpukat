<?php
	class Profile_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}

		public function get_data_user($userid){
			$this->db->where('USER_ID', $userid);
			$query = $this->db->get('MSTUSER');
			return $query->result_array()[0];
		}

		public function get_data_doctor($userid){
			$this->db->where('MSTUSER.USER_ID', $userid);
			$this->db->join('MSTUSER', 'MSTUSER.USER_ID = MSHDOCTOR.DCT_ID', 'left');
			// echo $this->db->get_compiled_select(); die;
			$query = $this->db->get('MSHDOCTOR');
			if($query->num_rows() > 0) {
				return $query->result_array()[0];
			} else {
				return $query->result_array();
			}
		}

		public function edit_data_doctor($userid){
			$dataUser = array(
				'USER_NAME' => $this->input->post('docname'),
				'USER_BIRTH' => $this->input->post('docbirth'),
				'EMAIL' => $this->input->post('docemail'),
				'HANDPHONE' => $this->input->post('docHP'),
				'USER_ADDRESS' => $this->input->post('docaddr')
			);
			$this->db->where('USER_ID', $userid);
			$is_updated = $this->db->update('MSTUSER', $dataUser);

			if($is_updated){
				$educ = '';
				$educ .= $this->input->post('docSD') .';';
				$educ .= $this->input->post('docSMP') .';';
				$educ .= $this->input->post('docSMA') .';';
				$educ .= $this->input->post('docS1') .';';
				$educ .= $this->input->post('docS2') .';';
				$educ .= $this->input->post('docDR');

				$dataDoctor = array(
					'DCT_EDUC' => $educ,
					'DCT_ABOUT' => $this->input->post('docabout'),
					'DCT_EXP' => $this->input->post('docExp'),
					'DCT_SPECIALTY' => $this->input->post('docSpec'),
					'DCT_CERTIFICATE' => $this->input->post('docCert')
				);
				$this->db->where('DCT_ID', $userid);
				$res = $this->db->update('MSHDOCTOR', $dataDoctor);
				if($res){
					$this->session->set_userdata('nama', $this->input->post('docname'));
				}
			}
			return $this->db->error();
		}

		public function edit_data_user($userid){
			$data = array(
				'USER_NAME'    => $this->input->post('usrname'),
				'USER_BIRTH'   => $this->input->post('usrbirth'),
				'EMAIL'        => $this->input->post('usremail'),
				'HANDPHONE'    => $this->input->post('usrHP'),
				'USER_ADDRESS' => $this->input->post('usraddr')
			);
			$this->db->where('USER_ID', $userid);
			$res = $this->db->update('MSTUSER', $data);
			if($res){
				$this->session->set_userdata('nama', $this->input->post('usrname'));
			}
			return $res;
		}

		public function update_img_user($userid, $img){
			$this->db->where('USER_ID', $userid);
			$old_img = $this->db->get('MSTUSER')->result_array()[0]['USER_IMG'];
			if(file_exists('./assets/img/user/'. $old_img)){
				unlink('./assets/img/user/'. $old_img);
			}

			$data = array(
				'USER_IMG' => $img
			);
			$this->db->where('USER_ID', $userid);
			return $this->db->update('MSTUSER', $data);
		}

		public function update_img_doctor($userid, $img){

			if(!empty($img['_photo']['file_name'])) {
				$data = array(
					'USER_IMG' => $img['_photo']['file_name']
				);
				$this->db->where('USER_ID', $userid);
				$this->db->update('MSTUSER', $data);

			}
			if (!empty($img['_loc']['file_name'])) {
				$data = array(
					'IMG_LOC' => $img['_loc']['file_name']
				);
				$this->db->where('DCT_ID', $userid);
				$this->db->update('MSHDOCTOR', $data);
			}

			return $this->db->error();
		}

		public function delete_old_photo($userid){
			$this->db->where('USER_ID', $userid);
			$old_img = $this->db->get('MSTUSER')->result_array()[0]['USER_IMG'];

			if(file_exists('./assets/img/doctor/'. $old_img)){
				unlink('./assets/img/doctor/'. $old_img);
			}
		}

		public function delete_old_location($userid){
			$this->db->where('DCT_ID', $userid);
			$old_img_loc = $this->db->get('MSHDOCTOR')->result_array()[0]['IMG_LOC'];

			if(file_exists('./assets/img/doctor/'. $old_img_loc)){
				unlink('./assets/img/doctor/'. $old_img_loc);
			}
		}
	}
?>