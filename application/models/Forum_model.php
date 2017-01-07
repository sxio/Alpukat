<?php
	class Forum_model extends CI_Model{
		function __construct(){
			$this->load->database();
		}
		function get_category(){

			$this->db->where('CAT_GROUP',3);
			$this->db->order_by('CAT_NAME');
			$result = $this->db->get('MSDCATEGORY');
			$return = array();
			if($result->num_rows() > 0){
				foreach ($result->result_array() as $row) {
					$return[$row['CAT_ID']] = $row['CAT_NAME'];
				}
			};
			return $return;
		}
		function add_forum($username){
            $data = array(
				'FORUM_TITLE'   => $this->input->post('title'),
				'FORUM_CAT' => $this->input->post('category'),
				'FORUM_CONTENT' => $this->input->post('content'),
				'USER_ID' => $this->session->userdata('username')
            );
            $this->db->insert('TRHFORUM',$data);
            return $this->db->error();
		}
	}
?>