<?php class Rating_model extends CI_model{
        public function __construct(){
            parent:: __construct();
            $this->load->database();
            $this->load->model('Rating_model');
        }
        public function add_rating_value(){
            
        }

    }

 ?>
