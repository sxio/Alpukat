<?php
	class Register extends CI_Controller{
		public function regis(){
			$res = $this->register_model->insert_register();
			if($res == 1){
				redirect('registerSuccess');
			}
		}
	}
?>