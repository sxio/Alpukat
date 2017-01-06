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
			return $this->db->insert('MSTSUGGESTION', $data);
		}
	}
?>