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
			$this->db->where('REMINDER_DT > DATE(NOW())');
			$where_clause = $this->db->get('MSTREMINDER')->result_array()[0];

			$this->db->order_by('REMINDER_DT');
			$this->db->where('USER_ID', $username);
			$this->db->where_in('DATE(REMINDER_DT)', $where_clause);
			$query = $this->db->get('MSTREMINDER');

			return $query->result_array();
		}
	}
?>