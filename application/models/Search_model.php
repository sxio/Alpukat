<?php
	class Search_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}

		public function get_doctor_by_name($name){
			$this->db->like('USER_NAME', $name);
			$this->db->where('USER_LEVEL', 2);
			$this->db->join('MSTUSER','MSTUSER.USER_ID = MSHDOCTOR.DCT_ID', 'right');
			$query = $this->db->get('MSHDOCTOR');
			if($query->num_rows() > 0){
				return $query->result_array();
			} else {
				return array();
			}
		}

		public function get_forum_search($search){
			$this->db->like('FORUM_TITLE', $search);
			$this->db->or_like('FORUM_CONTENT', $search);
			$this->db->join('MSDCATEGORY', 'TRHFORUM.FORUM_CAT = MSDCATEGORY.CAT_ID');
			$query = $this->db->get('TRHFORUM');
			if($query->num_rows() > 0){
				return $query->result_array();
			} else {
				return array();
			}
		}
	}
?>
