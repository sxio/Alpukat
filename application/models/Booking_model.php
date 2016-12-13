<?php 
	class Booking_model extends CI_Model{

		function get_booking_hist(){
			$query = $this->db->query('SELECT BOOKING_ID,BOOKING_DT,OTHER_PAYMENT,TOTAL_PAYMENT FROM TRHBOOKING');
			return $query->result();
		}//13-Dec-16 Meikelwis get data

	}
?>