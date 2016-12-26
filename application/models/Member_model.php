<?php
	class Member_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function listmember(){
			$query = $this->db->get('MSTUSER');
			return $query->result_array();
		}
	}
?>