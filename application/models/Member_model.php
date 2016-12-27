<?php
	class Member_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function listmember($userlevel){
			$this->db->where('USER_LEVEL', $userlevel);
			$this->db->where('ACTIVE', 1);
			$query = $this->db->get('MSTUSER');

			$data = array(
				'data' => $query->result_array(),
				'num_rows' => $query->num_rows()
			);
			return $data;
		}

		public function add_member(){
			$data = array(
				'USER_ID' => $this->input->post('userId'),
				'USER_NAME' => $this->input->post('userName'),
				'USER_PASS' => md5($this->input->post('userPass')),
				'USER_BIRTH' => $this->input->post('userBirth'),
				'EMAIL' => $this->input->post('userEmail'),
				'HANDPHONE' => $this->input->post('userHP'),
				'TELEPHONE' => $this->input->post('userTel'),
				'USER_LEVEL' => 0,
				'ACTIVE' => 1
			);
			$this->db->insert('MSTUSER', $data);
			return $this->db->error();
		}

		public function get_all_roles(){
			$this->db->order_by('USER_LEVEL');
			$query = $this->db->get('MSTUSERLEVEL');
			$data = array(
				'data' => $query->result_array(),
				'num_rows' => $query->num_rows()
			);
			return $data;
		}

		public function add_role(){
			$data = array(
				'USER_LEVEL' => $this->input->post('roleID'),
				'USER_DESC' => $this->input->post('roleName')
			);
			$this->db->insert('MSTUSERLEVEL', $data);
			return $this->db->error();
		}
	}
?>