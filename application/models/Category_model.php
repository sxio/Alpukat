<?php
	class Category_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}

		public function add_category(){
			$data = array(
				'CAT_NAME'  => $this->input->post('categoryName')
			);
			$this->db->insert('MSHCATEGORY', $data);
			return $this->db->error();
		}

		public function get_category(){
			$query = $this->db->get('MSHCATEGORY');
			$data = array(
				'data' => $query->result_array(),
				'num_rows' => $query->num_rows()
			);
			return $data;
		}
	}
?>