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
	}
?>