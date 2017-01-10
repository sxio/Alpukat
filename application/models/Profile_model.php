<?php
	class Profile_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}

		public function add_reminder(){
			$data = array(
				'USER_ID'       => $this->input->post('userid'),
				'REMINDER_DT'   => $this->input->post('reminder_dt'),
				'REMINDER_DESC' => $this->input->post('reminder_desc')
			);
			$this->db->insert('MSTREMINDER', $data);
			return $this->db->error();
		}

		public function get_reminder($username){
			$this->db->where('USER_ID', $username);
			$query = $this->db->get("MSTREMINDER");
			return $query->result_array();
		}

		public function get_nearest_reminder($username){
			$this->db->select('min(date(REMINDER_DT)) dt');
			$this->db->where('USER_ID', $username);
			$this->db->where('REMINDER_DT > DATE(NOW())');
			$where_clause = $this->db->get('MSTREMINDER')->result_array()[0]['dt'];

			$this->db->order_by('REMINDER_DT');
			$this->db->where('USER_ID', $username);
			$this->db->where('DATE(REMINDER_DT)', $where_clause);
			$query = $this->db->get('MSTREMINDER');

			return $query->result_array();
		}

		public function remove_reminder($username, $datetime){
			$this->db->where('USER_ID', $username);
			$this->db->where('REMINDER_DT', $datetime);
			$this->db->delete('MSTREMINDER');
			return $this->db->error();
		}

		public function get_data_user($userid){
			$this->db->where('USER_ID', $userid);
			$query = $this->db->get('MSTUSER');
			return $query->result_array()[0];
		}

		public function get_data_doctor($userid){
			$this->db->where('MSTUSER.USER_ID', $userid);
			$this->db->join('MSTUSER', 'MSTUSER.USER_ID = MSHDOCTOR.DCT_ID', 'right');
			$query = $this->db->get('MSHDOCTOR');
			return $query->result_array()[0];
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

		public function update_img_doctor($userid, $img){
			$this->db->where('USER_ID', $userid);
			$old_img = $this->db->get('MSTUSER')->result_array()[0]['USER_IMG'];
			if(file_exists('./assets/img/doctor/certificate/'. $old_img)){
				unlink('./assets/img/doctor/certificate/'. $old_img);
			}

			$data = array(
				'USER_IMG' => $img
			);
			$this->db->where('USER_ID', $userid);
			return $this->db->update('MSTUSER', $data);
		}
	}
?>