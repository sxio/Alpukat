<?php
	class Doctor_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}

		public function add_category(){
			$data = array(
				'CAT_GROUP' => 4,
				'CAT_NAME' => $this->input->post('dct_cat')
			);
			$this->db->insert('MSDCATEGORY', $data);
			return $this->db->error();
		}

		public function get_category(){
			$this->db->where('CAT_GROUP', 4);
			$this->db->order_by('CAT_NAME');
			$query = $this->db->get('MSDCATEGORY');
			$data = array(
				'data' => $query->result_array(),
				'num_rows' => $query->num_rows()
			);
			return $data;
		}
	}
?>