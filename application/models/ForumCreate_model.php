<?php 
	class ForumCreate_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function process(){
		 	$ctitle = $this->input->post(title);
            $ccontent = $this->input->post(content);
            $data = array(
                'ctitle'=>$title,
                'ccontent'=>$content                    
            );
            $this->db->insert('TRHFORUM',$data);  
		}
		
	}
?>