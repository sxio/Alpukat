<?php
	class News_model extends CI_Model{
		public function __construct(){
			$this->load->database();
			$this->load->helper('date');
			date_default_timezone_set('Asia/Jakarta');
		}

		public function insert(){
			$data = array(
				'NEWS_ID'  => $this->input->post('newsID'),
				'NEWS_DT'  => mdate('%Y-%m-%d %h:%i:%s',now()),
				'USER_ID'  => $this->input->post('newsAuthor'),
				'USER_DT'  => mdate('%Y-%m-%d %h:%i:%s',now()),
				'NEWS_CAT' => $this->input->post('newsCategory')
			);
			$dataDetail = array(
				'NEWS_ID'      => $this->input->post('newsID'),
				'NEWS_TITLE'   => $this->input->post('newsTitle'),
				'NEWS_CONTENT' => $this->input->post('newsContent'),
				'NEWS_DT'      => $data['NEWS_DT'],
				'NEWS_CAT'     => $this->input->post('newsCategory'),
				'USER_ID'      => $data['USER_ID'],
				'USER_DT'      => $data['USER_DT']
			);
			$this->db->insert('TRHNEWS',$data);
			$this->db->insert('TRDNEWS',$dataDetail);
			return $this->db->error();
		}

		public function get_list(){
			$query = $this->db->get('TRDNEWS');
			return $query->result_array();
		}

		public function get_news($NEWS_ID){
			$this->db->where('NEWS_ID', $NEWS_ID);
			$query = $this->db->get('TRDNEWS');
			return $query->result_array();
		}

		public function update(){
			// $data = array(
			// 	'NEWS_ID'  => $this->input->post('newsID'),
			// 	'NEWS_DT'  => mdate('%Y-%m-%d %h:%i:%s',now()),
			// 	'USER_ID'  => $this->input->post('newsAuthor'),
			// 	'USER_DT'  => mdate('%Y-%m-%d %h:%i:%s',now()),
			// 	'NEWS_CAT' => $this->input->post('newsCategory')
			// );
			// $dataDetail = array(
			// 	'NEWS_ID'      => $this->input->post('newsID'),
			// 	'NEWS_TITLE'   => $this->input->post('newsTitle'),
			// 	'NEWS_CONTENT' => $this->input->post('newsContent'),
			// 	'NEWS_DT'      => $data['NEWS_DT'],
			// 	'NEWS_CAT'     => $this->input->post('newsCategory'),
			// 	'USER_ID'      => $data['USER_ID'],
			// 	'USER_DT'      => $data['USER_DT']
			// );
			// $this->db->insert('TRHNEWS',$data);
			// $this->db->insert('TRDNEWS',$dataDetail);
			// return $this->db->error();
		}
	}
?>