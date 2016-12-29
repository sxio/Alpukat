<?php
	class C_Estore extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('Estore_model');
		}

		public function view($page = 'index'){
			$data['header']        = $this->load->view('templates/header','',TRUE);
			$data['enav']          = $this->load->view('estore/templates/enav','',TRUE);
			$data['efooter']       = $this->load->view('estore/templates/efooter','',TRUE);

			$data['carousel_prod'] = $this->Estore_model->get_newest_product(0,0);

			$this->load->view('estore/'. $page, $data);
		}
	}
?>