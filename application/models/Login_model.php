<?php
	class Login_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function check_login(){
			$data = array(
				'USER_ID' => $this->input->post('LuserName'),
				'USER_PASS' => md5($this->input->post('Lpassword'))
			);
			$query = $this->db->get_where('MSTUSER', $data);
			$row = $query->num_rows();
			if($row === 1){
				foreach($query->result_array() as $mstuser){
					if($mstuser['ACTIVE'] == 0 || $mstuser['USER_LEVEL'] == 0)
						return 0;
					$this->session->set_userdata('username', $mstuser['USER_ID']);
					$this->session->set_userdata('nama', $mstuser['USER_NAME']);
					$this->session->set_userdata('user_level', $mstuser['USER_LEVEL']);
					break;
				}
			}

			return $row;
		}

		public function admin_login(){
			$data = array(
				'USER_ID' => $this->input->post('admin_username'),
				'USER_PASS' => md5($this->input->post('admin_password'))
			);
			$query = $this->db->get_where('MSTUSER', $data);
			$row = $query->num_rows();
			if($row === 1){
				foreach($query->result_array() as $mstuser){
					if($mstuser['ACTIVE'] == 0 || $mstuser['USER_LEVEL'] != 0)
						return 0;
					$this->session->set_userdata('admin_username', $mstuser['USER_ID']);
					$this->session->set_userdata('admin_name', $mstuser['USER_NAME']);
					break;
				}
			}
			return $row;
		}
	}
?>