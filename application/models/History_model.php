<?php
	class History_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		//MEIKELWIS RAPIIN CODING
		function get_booking_hist(){
			$this->db->select('BOOKING_ID,BOOKING_DT,TOTAL_AMOUNT');
			$query = $this->db->get('TRDBOOKING');
			return $query->result();
		}

	}
?>