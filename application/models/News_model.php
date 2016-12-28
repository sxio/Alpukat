<?php
	class News_model extends CI_Model{
		public function __construct(){
            parent::__construct();
			$this->load->database();
			$this->load->helper('date');
			date_default_timezone_set('Asia/Jakarta');
		}

		public function insert($news_img){
			$dataDetail = array(
				'NEWS_ID'      => $this->input->post('newsID'),
				'NEWS_TITLE'   => $this->input->post('newsTitle'),
				'NEWS_CONTENT' => $this->input->post('newsContent'),
				'NEWS_DT'      => mdate('%Y-%m-%d %H:%i:%s',now()),
				'NEWS_CAT'     => $this->input->post('newsCategory'),
				'USER_ID'      => $this->input->post('newsPostedBy'),
				'NEWS_SOURCE'  => $this->input->post('newsSource'),
				'NEWS_IMAGE'   => $news_img
			);
			$this->db->insert('TRDNEWS',$dataDetail);
			return $this->db->error();
		}

		public function get_list($limit, $offset){
			$this->db->order_by('TRDNEWS.NEWS_DT','DESC');
			$this->db->join('MSDCATEGORY','MSDCATEGORY.CAT_ID = TRDNEWS.NEWS_CAT');
			$query = $this->db->get('TRDNEWS', $limit, $offset);
			return $query->result_array();
		}

		public function count_all(){
			return $this->db->count_all('TRDNEWS');
		}

		public function get_news($NEWS_ID){
			$this->db->order_by('TRDNEWS.NEWS_DT','DESC');
			$this->db->join('MSDCATEGORY','MSDCATEGORY.CAT_ID = TRDNEWS.NEWS_CAT');
			$this->db->join('MSTUSER','MSTUSER.USER_ID = TRDNEWS.USER_ID');
			$this->db->where('NEWS_ID', $NEWS_ID);
			$query = $this->db->get('TRDNEWS');
			return $query->result_array();
		}

		public function get_categories(){
			$this->db->order_by('CAT_NAME');
			$this->db->where('CAT_GROUP', 1);
			$query = $this->db->get('MSDCATEGORY');
			$data = array(
				'data' => $query->result_array(),
				'num_rows' => $query->num_rows()
			);
			return $data;
		}

		public function update($news_img){
			$dataDetail = array(
				'NEWS_TITLE'   => $this->input->post('newsTitle'),
				'NEWS_CONTENT' => $this->input->post('newsContent'),
				'NEWS_DT'      => mdate('%Y-%m-%d %H:%i:%s',now()),
				'NEWS_CAT'     => $this->input->post('newsCategory'),
				'NEWS_SOURCE'  => $this->input->post('newsSource'),
				'NEWS_IMAGE'   => $news_img
			);
			$this->db->where('NEWS_ID', $this->input->post('newsID'));
			$this->db->update('TRDNEWS', $dataDetail);
			return $this->db->error();
		}

		public function delete($news_id){
			$this->db->where('NEWS_ID', $news_id);
			$this->db->delete('TRDNEWS');
			return $this->db->error();
		}

		public function add_category(){
			$data = array(
				'CAT_GROUP' => 1, //1 means News
				'CAT_NAME' => $this->input->post('categoryName')
			);
			$this->db->insert('MSDCATEGORY', $data);
			return $this->db->error();
		}
	}
?>