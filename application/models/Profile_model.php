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

		public function get_data_doctor($userid){
			$this->db->where('MSHDOCTOR.DCT_ID', $userid);
			$this->db->join('MSTUSER', 'MSTUSER.USER_ID = MSHDOCTOR.DCT_ID');
			$query = $this->db->get('MSHDOCTOR');
			return $query->result_array()[0];
		}

		public function edit_data_doctor($userid){
			$$dataUser = array(
				'USER_NAME' => $this->input->post('docname'),
				'USER_BIRTH' => $this->input->post('docbirth'),
				'USER_ADDRESS' => $this->input->post('docaddr')
			); // not done


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
			$this->db->update('MSHDOCTOR', $dataDoctor);
		}
	}
?>