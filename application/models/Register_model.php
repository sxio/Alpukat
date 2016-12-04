<?php
	class Register_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function insert_register(){
			$data = array(
				'USER_ID' => $this->input->post('user_id'),
				'USER_NAME' => $this->input->post('user_name'),
				'EMAIL' => $this->input->post('user_email'),
				'USER_PASS' => $this->input->post('user_password'),
				'USER_BIRTH' => $this->input->post('date_birth'),
				'HANDPHONE' => $this->input->post('handphone'),
				'TELEPHONE' => $this->input->post('telephone'),
				'USER_LEVEL' => $this->input->post('user_role')
			);
			return $this->db->insert('MSTUSER',$data);
		}
	}
?>