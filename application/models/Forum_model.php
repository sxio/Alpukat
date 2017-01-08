<?php
	class Forum_model extends CI_Model{
		function __construct(){

			$this->load->database();
			$this->load->helper('date');
			date_default_timezone_set('Asia/Jakarta');
		}
		//header
		function get_category(){

			$this->db->select('CAT_ID,CAT_NAME',3);
			$this->db->from('MSDCATEGORY');
			$this->db->where('CAT_GROUP',3);
			$this->db->order_by('CAT_ID');
			$result = $this->db->get();
			$return = array();
			if($result->num_rows() > 0){
				foreach ($result->result_array() as $row) {
					$return[$row['CAT_ID']] = $row['CAT_NAME'];
				}
			};
			return $return;
		}
		function get_forum(){
			$this->db->select('A.FORUM_ID,A.FORUM_TITLE,B.CAT_NAME,A.FORUM_CONTENT,A.USER_ID,A.USER_DT');
			$this->db->from('TRHFORUM A');
			$this->db->join('MSDCATEGORY B','A.FORUM_CAT = B.CAT_ID','LEFT');
			$this->db->order_by('A.FORUM_ID');
			$result = $this->db->get();
			return $result->result_array();
		}
		function add_forum($username){
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
		//detail
		function add_forum_detail($parent_id,$username){

			$detailid = $this->Sequences_model->concat(3, mdate('%Y-%m-%d %H:%i:%s',now()));

            $data = array(
            	'PARENT_ID' => $parent_id,
            	'DETAIL_ID' => $detailid,
				'FORUM_CONTENT' => $this->input->post('content'),
				'USER_ID' => $username,
				'USER_DT' => mdate('%Y-%m-%d %H:%i:%s',now())
            );
            $this->db->insert('TRDFORUM',$data);
            $this->Sequences_model->update_seq(2);
            return $this->db->error();
		}
		
		// function get_forum_detail($parent_id){
		// 	$this->db->select('A.FORUM_TITLE,B.DETAIL_ID,B.PARENT_ID,B.FORUM_DESC,B.USER_ID,B.USER_DT');
		// 	$this->db->from('TRHFORUM A');
		// 	$this->db->join('TRDFORUM B','A.FORUM_ID = B.FORUM_ID','LEFT');
		// 	$this->db->where('PARENT_ID',$parent_id);
		// 	$this->db->order_by('FORUM_ID');
		// 	$result = $this->db->get();
		// 	return $result->result_array();
		// }
	}
?>