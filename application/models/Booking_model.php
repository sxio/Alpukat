<?php 
	class Booking_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
			$this->load->helper('date');
			date_default_timezone_set('Asia/Jakarta');
		}
		public function get_temp_booking_id(){
			$bookingid = $this->Sequences_model->concat(4, mdate('%Y-%m-%d %H:%i:%s',now()));
			return $bookingid;
		}
		public function add_temp_booking($username){
			$booking_id = $this->Sequences_model->concat(4, mdate('%Y-%m-%d %H:%i:%s',now()));
			$data = array(
				'ID' => $booking_id,
				'DT' => $this->input->post('bookingdt'),
				'VALUE3' => $username,
				'VALUE5' => mdate('%Y-%m-%d %H:%i:%s',now())
			);
			$this->db->insert('TMPHEADER',$data);
			$this->Sequences_model->update_seq(4);
			return $this->db->error();
		}
		
	}
?>