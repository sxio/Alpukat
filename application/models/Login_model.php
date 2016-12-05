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
					// $this->session->username = $mstuser['USER_ID'];
					$this->session->set_tempdata('username', $mstuser['USER_ID'], 3600);
					// $this->session->nama = $mstuser['USER_NAME'];
					$this->session->set_tempdata('nama', $mstuser['USER_NAME'], 3600);
					break;
				}
			}

			return $row;
		}
	}
?>