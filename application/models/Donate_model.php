<?php
	class Donate_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}

		public function add_donation(){
			$donateid = $this->Sequences_model->concat(6, $this->input->post('date_tf'));
			$data = array(
				'DONATE_ID'     => $donateid,
				'USER_ID'       => $this->session->userdata('username'),
				'BANK_TYPE'     => $this->input->post('b_type'),
				'BANK_ACC_NUM'  => $this->input->post('b_number'),
				'BACK_ACC_NAME' => $this->input->post('b_acc_name'),
				'AMOUNT'        => $this->input->post('b_amount'),
				'DONOR_NAME'    => $this->input->post('b_behalf'),
				'TRANSFER_DATE' => $this->input->post('date_tf')
			);
			$this->db->insert('MSTDONATE', $data);
			$this->Sequences_model->update_seq(6);
			return $this->db->error();
		}

		public function get_donation_by_userid($userid){
			$this->db->where('USER_ID', $userid);
			$query = $this->db->get('MSTDONATE');
			return $query->result_array();
		}

		public function get_donation(){
			return $this->db->get('MSTDONATE')->result_array();
		}
	}
?>