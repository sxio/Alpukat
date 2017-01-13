<?php
	class Search_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}

		public function get_doctor_by_name($name){
			$this->db->like('USER_NAME', $name);
			$this->db->where('USER_LEVEL', 2);
			$this->db->join('MSTUSER','MSTUSER.USER_ID = MSHDOCTOR.DCT_ID');
			$query = $this->db->get('MSHDOCTOR')->result_array();

			if(count($query) > 0){
				for ($i = 0; $i < count($query); $i++) {
					$this->db->where('CAT_ID', $query[$i]['DCT_SPECIALTY']);
					$q = $this->db->get('MSDCATEGORY')->result_array();
					if(count($q) > 0){
						$query[$i]['CAT_NAME'] = $q[0]['CAT_NAME'];
					} else {
						$query[$i]['CAT_NAME'] = '';
					}
				}
				return $query;
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

		public function get_doctor_by_name_and_category($cat_id, $name){
			$this->db->where('MSTUSER.USER_LEVEL', 2);
			$this->db->where('DCT_SPECIALTY', $cat_id);
			$this->db->like('MSTUSER.USER_NAME', $name);
			$this->db->join('MSTUSER','MSTUSER.USER_ID = MSHDOCTOR.DCT_ID');
			$this->db->join('MSDCATEGORY','MSDCATEGORY.CAT_ID = MSHDOCTOR.DCT_SPECIALTY');
			$query = $this->db->get('MSHDOCTOR')->result_array();
			return $query;
		}
	}
?>
