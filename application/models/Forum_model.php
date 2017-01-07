<?php
	class Forum_model extends CI_Model{
		function __construct(){
			$this->load->database();
			$this->load->helper('date');
			date_default_timezone_set('Asia/Jakarta');
		}
		function get_category(){

			$this->db->where('CAT_GROUP',3);
			$this->db->order_by('CAT_ID');
			$result = $this->db->get('MSDCATEGORY');
			$return = array();
			if($result->num_rows() > 0){
				foreach ($result->result_array() as $row) {
					$return[$row['CAT_ID']] = $row['CAT_NAME'];
				}
			};
			return $return;
		}
		function get_forum(){
			$this->db->order_by('FORUM_ID');
			$result = $this->db->get('TRHFORUM');
			return $result->result_array();
		}
		function add_forum($username){
			$forumid = $this->Sequences_model->get_seq(2);
			$forumid = $this->Sequences_model->concat(2, mdate('%Y-%m-%d %H:%i:%s',now()));
            $data = array(
            	'FORUM_ID' => $forumid,
				'FORUM_TITLE'=> $this->input->post('title'),
				'FORUM_CAT' => $this->input->post('category'),
				'FORUM_CONTENT' => $this->input->post('content'),
				'USER_ID' => $username,
				'USER_DT' => mdate('%Y-%m-%d %H:%i:%s',now())
            );
            $this->db->insert('TRHFORUM',$data);
            $this->Sequences_model->update_seq(2);
            return $this->db->error();
		}
	}
?>