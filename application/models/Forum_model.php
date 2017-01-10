<?php
	class Forum_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
			$this->load->helper('date');
			date_default_timezone_set('Asia/Jakarta');
		}

		public function add_forum($username){
			$forumid = $this->Sequences_model->concat(2, mdate('%Y-%m-%d %H:%i:%s',now()));
			$data = array(
				'FORUM_ID' => $forumid,
				'FORUM_TITLE'=> $this->input->post('title'),
				'FORUM_CAT' => $this->input->post('category'),
				'FORUM_CONTENT' => $this->input->post('content'),
				'FORUM_LAST_POST' => $forumid,
				'REPLY_NUM' => 0,
				'USER_ID' => $username,
				'USER_DT' => mdate('%Y-%m-%d %H:%i:%s',now())
			);
			$this->db->insert('TRHFORUM',$data);
			$this->Sequences_model->update_seq(2);
			return $this->db->error();
		}

		//detail
		public function add_forum_detail($parent_id, $content, $username){
			$detailid = $this->Sequences_model->concat(3, mdate('%Y-%m-%d %H:%i:%s',now()));
			$data = array(
				'PARENT_ID' => $parent_id,
				'DETAIL_ID' => $detailid,
				'FORUM_CONTENT' => $content,
				'USER_ID' => $username,
				'USER_DT' => mdate('%Y-%m-%d %H:%i:%s',now())
			);
			$this->db->insert('TRDFORUM',$data);
			$this->Sequences_model->update_seq(3);


			$header_id = $this->get_id_header_by_nested_child_id($detailid);
			$num = $this->db->get_where('TRHFORUM', array('FORUM_ID' => $header_id))->result_array()[0]['REPLY_NUM'];

			$dataUpdate = array(
				'FORUM_LAST_POST' => $detailid,
				'REPLY_NUM' => $num+1
			);
			$this->db->where('FORUM_ID', $header_id);
			$this->db->update('TRHFORUM', $dataUpdate);
			return $this->db->error();
		}

		//header
		public function get_category(){
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

		public function get_forum_header(){
			$this->db->select('A.FORUM_ID,A.FORUM_TITLE,B.CAT_NAME,A.FORUM_CONTENT,A.USER_ID,A.USER_DT');
			$this->db->from('TRHFORUM A');
			$this->db->join('MSDCATEGORY B','A.FORUM_CAT = B.CAT_ID','LEFT');
			$this->db->order_by('A.USER_DT', 'DESC');
			$result = $this->db->get();
			return $result->result_array();
		}

		public function get_forum_header_by_id($forum_id){
			$this->db->where('FORUM_ID', $forum_id);
			$this->db->join('MSTUSER', 'MSTUSER.USER_ID = TRHFORUM.USER_ID');
			$query = $this->db->get('TRHFORUM');
			return $query->result_array();
		}

		public function get_forum_header_by_user($userid){
			$this->db->order_by('TRHFORUM.USER_DT', 'DESC');
			$this->db->where('TRHFORUM.USER_ID', $userid);
			$this->db->join('MSDCATEGORY', 'FORUM_CAT = CAT_ID');
			$this->db->join('TRDFORUM', 'TRDFORUM.DETAIL_ID = TRHFORUM.FORUM_LAST_POST');
			$query = $this->db->get('TRHFORUM');
			return $query->result_array();
		}

		public function get_forum_header_by_num_post($limit){
			$this->db->order_by('TRHFORUM.REPLY_NUM', 'DESC');
			$this->db->join('MSDCATEGORY', 'FORUM_CAT = CAT_ID');
			// $this->db->join('TRDFORUM', 'TRDFORUM.DETAIL_ID = TRHFORUM.FORUM_LAST_POST');
			$this->db->limit($limit);
			$query = $this->db->get('TRHFORUM');
			$data = $query->result_array();

			for($i = 0; $i < count($data); $i++){
				$this->db->where('DETAIL_ID', $data[$i]['FORUM_LAST_POST']);
				$last_id = $this->db->get('TRDFORUM')->result_array();
				if($last_id != NULL){
					$data[$i]['LAST_POST_ID'] = $last_id[0]['USER_ID'];
					$data[$i]['LAST_POST_DT'] = $last_id[0]['USER_DT'];
				} else {
					$data[$i]['LAST_POST_ID'] = $data[$i]['USER_ID'];
					$data[$i]['LAST_POST_DT'] = $data[$i]['USER_DT'];
				}
			}
			return $data;
		}

		public function get_forum_parent_by_id($parent_id){
			$header = $this->get_forum_header_by_id($parent_id);
			if($header == NULL){
				$this->db->where('DETAIL_ID', $parent_id);
				$this->db->join('MSTUSER', 'MSTUSER.USER_ID = TRDFORUM.USER_ID');
				$query = $this->db->get('TRDFORUM');
				return $query->result_array()[0];
			} else{
				return $header[0];
			}
		}

		public function get_id_header_by_nested_child_id($grd_id){
			$id = array(array('PARENT_ID' => $grd_id));

			while($id != NULL) {
				$temp_id = $id;
				$this->db->select('PARENT_ID');
				$this->db->from('TRDFORUM');
				$this->db->where('DETAIL_ID', $id[0]['PARENT_ID']);
				$id = $this->db->get()->result_array();
			}

			$this->db->where('FORUM_ID', $temp_id[0]['PARENT_ID']);
			$query = $this->db->get('TRHFORUM');
			return $query->result_array()[0]['FORUM_ID'];
		}

		private $f_detail = array();

		public function get_forum_detail($parent_id, $level = 0){
			$this->db->order_by('USER_DT');
			$this->db->where('PARENT_ID', $parent_id);
			$this->db->join('MSTUSER', 'MSTUSER.USER_ID = TRDFORUM.USER_ID');
			$query = $this->db->get('TRDFORUM');
			$f_detail = $query->result_array();

			//head comment
			if ($f_detail != null) {
				for($i = 0; $i < count($f_detail); $i++) {
					$childrens = $this->get_forum_detail($f_detail[$i]['DETAIL_ID'], $level+1);
					$f_detail[$i]['LEVEL'] = $level;
					$f_detail[$i]['CHILDREN'] = $childrens;
				}
			}

			return $f_detail;
		}
	}
?>