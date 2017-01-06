<?php
	class Forum_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_category(){
			$this->db->order_by('CAT_NAME');
			$this->db->where('CAT_GROUP',3);
			$query = $this->db->get('MSDCATEGORY');
			
			$data = array(
				'data' => $query->result_array,
				'num_rows' => $query->num_rows()
			);
			return $data;
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