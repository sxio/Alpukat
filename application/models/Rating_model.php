<?php class Rating_model extends CI_model{
        public function __construct(){
            parent:: __construct();
            $this->load->database();
        }

        public function add_rating(){
            $rating_id = $this->Sequences_model->concat(7, mdate('%Y-%m-%d %H:%i:%s',now()));
            print_r($rating_id); die;
            $data = array(
                'RATING_ID' => $rating_id,
                'USER_ID' => $this->session->userdata('username'),
                'DOCTOR_ID' => $this->input->post('dct_id'),
                'FRIENDLINESS' => $this->input->post('docfriendly'),
                'EXPERTISE' => $this->input->post('docexpert'),
                'ON_TIME' => $this->input->post('doctime'),
                'PROFESSIONALISM' => $this->input->post('docpro')
            );
            $res = $this->db->insert('MSTRATING', $data);
            $this->Sequences_model->update_seq(7);
            return $this->db->error();
        }
    }
 ?>
