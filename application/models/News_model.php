<?php
	class News_model extends CI_Model{
		public function __construct(){
			$this->load->database();
			$this->load->helper('date');
			date_default_timezone_set('Asia/Jakarta');
		}

		public function insert(){
			$data = array(
				'NEWS_ID' => $this->input->post('newsID'),
				'NEWS_DT' => mdate('%Y-%m-%d %h:%i:%s',now()),
				'USER_ID' => $this->input->post('newsAuthor'),
				'USER_DT' => mdate('%Y-%m-%d %h:%i:%s',now()),
				'NEWS_CAT' => $this->input->post('newsCategory')
			);
			$this->db->insert('TRHNEWS',$data);
			//insert TRDNEWS here
			return $this->db->error();
		}
	}
?>