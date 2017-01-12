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

		public function get_doctor_cat(){
			$this->db->order_by('CAT_NAME');
			$this->db->where('CAT_GROUP', 4);
			$query = $this->db->get('MSDCATEGORY');
			return $query->result_array();
		}
	}
?>