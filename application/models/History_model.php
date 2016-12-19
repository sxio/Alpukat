<?php
	class History_model extends CI_Model{
		//MEIKELWIS RAPIIN CODING
		function get_booking_hist(){
			$this->db->select('BOOKING_ID,BOOKING_DT,OTHER_PAYMENT,TOTAL_PAYMENT');
			$query = $this->db->get('TRHBOOKING');
			return $query->result();
		}

	}
?>