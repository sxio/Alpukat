<?php
	class Member_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function listmember($userlevel){
			$this->db->where('USER_LEVEL', $userlevel);
			$this->db->where('ACTIVE', 1);
			$query = $this->db->get('MSTUSER');

			$data = array(
				'data' => $query->result_array(),
				'num_rows' => $query->num_rows()
			);
			return $data;
		}
	}
?>