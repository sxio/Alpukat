<?php
	class Forum_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function add_forum(){
            $data = array(
				'FORUM_TITLE'   => $this->input->post('title'),
				'FORUM_CONTENT' => $this->input->post('content')
            );
            $this->db->insert('TRHFORUM',$data);
            return $this->db->error();
		}
	}
?>