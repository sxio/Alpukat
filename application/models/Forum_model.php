<?php
	class Forum_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_category(){

			$this->db->where('CAT_GROUP',3);
			$this->db->order_by('CAT_NAME');
			$result = $this->db->get('MSDCATEGORY');
			$return = array();
			if($result->num_rows() > 0){
				foreach ($result->result_array() as $row) {
					$return[$row['CAT_NAME']] = $row['CAT_NAME'];
				}
			};
			return $return;
		}
		public function add_forum(){
            $data = array(
				'FORUM_TITLE'   => $this->input->post('title'),
				'FORUM_CAT' => $this->input->post('category'),
				'FORUM_CONTENT' => $this->input->post('content')
            );
            $this->db->insert('TRHFORUM',$data);
            return $this->db->error();
		}
	}
?>