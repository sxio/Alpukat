<?php
	class Rating_model extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}

		public function add_rating(){
			$rating_id = $this->Sequences_model->concat(7, mdate('%Y-%m-%d %H:%i:%s',now()));

			$data = array(
				'RATING_ID' => $rating_id,
				'BOOKING_ID' => $this->input->post('book_id'),
				'USER_ID' => $this->session->userdata('username'),
				'DOCTOR_ID' => $this->input->post('doc_id'),
				'FRIENDLINESS' => $this->input->post('docfriendly'),
				'EXPERTISE' => $this->input->post('docexpert'),
				'ON_TIME' => $this->input->post('doctime'),
				'PROFESSIONALISM' => $this->input->post('docpro')
			);
			$res = $this->db->insert('MSTRATING', $data);
			$this->Sequences_model->update_seq(7);
			return $this->db->error();
		}

		public function is_duplicate_booking_id($book_id){
			$this->db->where('BOOKING_ID', $book_id);
			$query = $this->db->get('MSTRATING');
			if($query->num_rows() > 0){
				return TRUE;
			} else {
				return FALSE;
			}
		}

		public function get_rating_by_doctor_id($dct_id){
			$this->db->select('TRUNCATE(AVG(FRIENDLINESS), 1) as F, TRUNCATE(AVG(EXPERTISE),1) as E, TRUNCATE(AVG(ON_TIME),1) as T, TRUNCATE(AVG(PROFESSIONALISM),1) as P');
			$this->db->where('DOCTOR_ID', $dct_id);
			$query = $this->db->get('MSTRATING');
			return $query->result_array()[0];
		}

		public function get_rating_top_3(){
			$this->db->select('DOCTOR_ID, USER_NAME, USER_IMG, TRUNCATE(AVG(FRIENDLINESS), 1) + TRUNCATE(AVG(EXPERTISE),1) + TRUNCATE(AVG(ON_TIME),1) + TRUNCATE(AVG(PROFESSIONALISM),1) as sum');
			$this->db->order_by('sum', 'DESC');
			$this->db->group_by('DOCTOR_ID');
			$this->db->limit(3);
			$this->db->join('MSTUSER','MSTUSER.USER_ID = MSTRATING.DOCTOR_ID');
			$query = $this->db->get('MSTRATING');
			return $query->result_array();
		}
	}
 ?>
