<?php
	class Comment_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
			$this->load->helper('date');
		}

		public function add_comment(){
			$data = array(
				'EMAIL' => $this->input->post('email'),
				'SUBJECT' => $this->input->post('txt'),
				'COMMENT' => $this->input->post('comment'),
				'CREATED_AT' => mdate('%Y-%m-%d %H:%i:%s',now())
			);
			return $this->db->insert('MSTCOMMENT', $data);
		}

		public function count_all(){
			return $this->db->count_all('MSTCOMMENT');
		}

		public function get_list($limit, $offset){
			$this->db->order_by('CREATED_AT','DESC');
			$query = $this->db->get('MSTCOMMENT', $limit, $offset);
			return $query->result_array();
		}

		public function add_doctor_comment($dctid, $userid){
			$id = $this->Sequences_model->concat(5, mdate('%Y-%m-%d %H:%i:%s',now()));
			$data = array(
				'DCT_ID' => $dctid,
				'COMMENT_ID' => $id,
				'COMMENT_CONTENT' => $this->input->post('comment'),
				'USER_ID' => $userid,
				'USER_DT' => mdate('%Y-%m-%d %H:%i:%s',now())
			);
			$this->db->insert('MSTDCTCOMMENT', $data);
			$this->Sequences_model->update_seq(5);
			return $this->db->error();
		}
	}
?>