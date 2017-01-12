<?php
	class Booking_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
			$this->load->helper('date');
			date_default_timezone_set('Asia/Jakarta');
		}
		public function get_doctor(){
			$this->db->select('DCT_ID');
			$this->db->from('MSHDOCTOR');
			$this->db->order_by('DCT_ID');
			$result = $this->db->get();
			$return = array();
			if($result->num_rows() > 0){
				foreach ($result->result_array() as $row) {
					$return[$row['DCT_ID']] = $row['DCT_ID'];
				}
			};
			return $return;
		}
		public function get_booking_id(){
			$bookingid = $this->Sequences_model->concat(4, mdate('%Y-%m-%d %H:%i:%s',now()));
			return $bookingid;
		}
		public function add_booking($username,$bookingid){
			$this->load->model('Profile_model');
			$dct = $this->Profile_model->get_data_doctor($this->input->post('doctorid'));
			$data = array(
				'BOOKING_ID' => $bookingid,
				'BOOKING_DT' => $this->input->post('bookingdt'),
				'DCT_ID' => $this->input->post('doctorid'),
				'SERV_ID' => $this->input->post('servid'),
				'BOOK_COUNT' => $this->input->post('count'),
				'TOTAL_AMOUNT' => $dct['CONSULT_FEE'],
				'USER_ID' => $username,
				'USER_DT' => mdate('%Y-%m-%d %H:%i:%s',now())
			);
			$this->db->insert('TRDBOOKING',$data);
			$this->Sequences_model->update_seq(4);
			return $this->db->error();
		}
	}
?>