<?php
	class C_Forum extends CI_Controller{
		public function view($page = "forumhome"){
			$data['title']    = "forumhome";
			$data['header']   = $this->load->view('templates/header','',TRUE);
			$data['nav']      = $this->load->view('templates/nav','',TRUE);
			$data['forumnav'] = $this->load->view('forum/forumnav','',TRUE);
			$data['chat']   = $this->load->view('templates/chat','',TRUE);
			$data['footer']   = $this->load->view('templates/footer','',TRUE);
			// $data['hist'] = $this->load->Forum_model->get_booking_hist();//13-Dec-16 Meikelwis get data

			$this->load->view('forum/'.$page, $data);

		}
		public function saveData(){
		 	$this->load->model('forumCreate_model');
		 	if($this->input->post('submit')){
		 		$this->forumCreate_model->process();
		 	}
		 	redirect('forumCreate_model');
		}
	}
?>