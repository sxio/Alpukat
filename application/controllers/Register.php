<?php
	class Register extends CI_Controller{
		public function regis(){
			$res = $this->model_register->insert_register();
			if($res == 1){
				redirect('registerSuccess');
			}
		}
	}
?>