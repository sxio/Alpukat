<?php
	class Sequences_model extends CI_Model{
		public function get_seq($seq_id){
			$this->db->where('SEQ_ID', $seq_id);
			return $this->db->get('MSTSEQUENCES')->result_array()[0]['SEQ_VALUE'];
		}

		public function update_seq($seq_id){
			$value = $this->get_seq($seq_id);

			$data = array('SEQ_VALUE' => ($value+1));
			$this->db->where('SEQ_ID', $seq_id);
			$this->db->update('MSTSEQUENCES', $data);
			return $this->db->error();
		}

		public function concat($seq_id, $param){
			$value = $this->get_seq($seq_id);
			if($seq_id == 1){
				// ESTORE PARAM = date
				$prefix = 'ESB-' . nice_date($param, 'Ymd') . '-';
			} elseif($seq_id == 2) {
				// FORUM PARAM = date
				$prefix = 'FRM-' . nice_date($param, 'Ymd') . '-';
			}
			return $prefix . str_pad($value, 3, '0', STR_PAD_LEFT);
		}
	}
?>