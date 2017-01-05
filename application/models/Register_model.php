<?php
	class Register_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function insert_register(){
			$data = array(
				'USER_ID'      => $this->input->post('user_id'),
				'USER_NAME'    => $this->input->post('user_name'),
				'EMAIL'        => $this->input->post('user_email'),
				'USER_PASS'    => md5($this->input->post('user_password')),
				'USER_BIRTH'   => $this->input->post('date_birth'),
				'HANDPHONE'    => $this->input->post('handphone'),
				'USER_ADDRESS' => $this->input->post('address'),
				'USER_LEVEL'   => $this->input->post('user_role'),
				'ACTIVE'       => 0
			);
			$this->db->insert('MSTUSER',$data);
			return $this->db->error();
		}

		public function sendEmail($to_email)
		{
			$from_email = 'avocado.mails@yahoo.com'; //change this to yours
			$subject = 'Verify Your Email Address';
			$message = '';
			if($this->input->post('user_role') == 1){
				$verifyLink = 'http://localhost/Avocado/register/verify/' . md5($to_email);
				$message = 'Dear '. $this->input->post('user_name') .',<br><br>Please click on the below activation link to verify your email address.<br><br><a href="' . $verifyLink . '">Click Here</a><br><br><br>Thanks<br>Avocado Team';
			} elseif ($this->input->post('user_role') == 2) {

				$verifyLink = 'http://localhost/Avocado/register/verify-doctor/' . md5($to_email);
				$message = 'Dear '. $this->input->post('user_name') .',<br><br>Please click on the below activation link to verify your email address.<br><br><a href="' . $verifyLink . '">Click Here</a><br><br><br>Thanks<br>Avocado Team';
			}

			//configure email settings
			$config['protocol']  = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.mail.yahoo.com'; //smtp host name
			$config['smtp_port'] = '465'; //smtp port number
			$config['smtp_user'] = $from_email;
			$config['smtp_pass'] = 'avoservice12092016'; //$from_email password
			$config['mailtype']  = 'html';
			$config['charset']   = 'iso-8859-1';
			$config['wordwrap']  = TRUE;
			$config['newline']   = "\r\n"; //use double quotes
			$this->email->initialize($config);

			//send mail
			$this->email->from($from_email, 'AvoMail');
			$this->email->to($to_email);
			$this->email->subject($subject);
			$this->email->message($message);
			return $this->email->send();
		}

		public function verify_email_user($key)
		{
			$this->db->where('md5(EMAIL)', $key);
			$data = array('ACTIVE' => 1);
			return $this->db->update('MSTUSER', $data);
		}

		public function verify_email_doctor(){
			//
		}

		public function get_user_by_email_hash($hash){
			$this->db->where('md5(EMAIL)', $hash);
			$query = $this->db->get('MSTUSER');
			return $query->result_array();
		}
	}
?>