<?php
	class ForgotPassword_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function verify_email($to_email = NULL){
			$from_email = 'avocado.mails@yahoo.com'; //change this to yours
			$verifyLink = 'http://localhost/Avocado/forgotPassword/reset/' . md5($to_email);
			$subject = 'Reset your account password';
			$message = 'Dear User,<br><br>Please click on the below link to reset your account password.<br><br>
			<a href="' . $verifyLink . '">Click Here</a><br><br><br>Thanks<br>';

			//configure email settings
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.mail.yahoo.com'; //smtp host name
			$config['smtp_port'] = '465'; //smtp port number
			$config['smtp_user'] = $from_email;
			$config['smtp_pass'] = 'avoservice12092016'; //$from_email password
			$config['mailtype'] = 'html';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['newline'] = "\r\n"; //use double quotes
			$this->email->initialize($config);

			//send mail
			$this->email->from($from_email, 'AvoMail');
			$this->email->to($to_email);
			$this->email->subject($subject);
			$this->email->message($message);
			return $this->email->send();
		}

		public function check_exist($email){
			$this->db->select('EMAIL');
			$this->db->where('EMAIL', $email);
			$query = $this->db->get('MSTUSER');
			return $query->num_rows();
		}

		public function reset_password(){

		}
	}
?>