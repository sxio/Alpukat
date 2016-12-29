<?php class C_Estore extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->library('cart');
			$this->load->model('Estore_model');
		}

		public function view($page = 'index'){
			$data['cart']          = $this->cart->contents();
			$data['total_items']   = $this->cart->total_items();
			$data['total']         = $this->cart->total();

			$data['header']        = $this->load->view('templates/header','',TRUE);
			$data['enav']          = $this->load->view('estore/templates/enav', $data,TRUE);
			$data['efooter']       = $this->load->view('estore/templates/efooter','',TRUE);

			$data['carousel_prod'] = $this->Estore_model->get_newest_product(0,0);

			$this->load->view('estore/'. $page, $data);
		}

		public function detail($prod_id){
			$data['total_items'] = $this->cart->total_items();
			$data['total']       = $this->cart->total();

			$data['header']      = $this->load->view('templates/header','',TRUE);
			$data['enav']        = $this->load->view('estore/templates/enav', $data,TRUE);
			$data['efooter']     = $this->load->view('estore/templates/efooter','',TRUE);

			$data['product']     = $this->Estore_model->get_product_by_id($prod_id)[0];
			$this->load->view('estore/detail', $data);
		}

		public function addtocart(){
			$prod_id = $this->input->post('prod_id');
			$prod = $this->Estore_model->get_product_by_id($prod_id)[0];
			$cart_data = array(
				'id'     => $prod['PROD_ID'],
				'qty'    => 1,
				'price'  => $prod['PROD_PRICE'],
				'name'   => $prod['PROD_NAME'],
				'img'    => $prod['PROD_IMG']
			);
			$this->cart->insert($cart_data);
			$data['total_items'] = $this->cart->total_items();
			$data['total']       = $this->cart->total();
			print_r(json_encode($data));
		}

		public function emptycart(){
			$this->cart->destroy();
		}

		public function removeitem($rowid){
			$this->cart->remove($rowid);
			redirect('estore/ecart');
		}
	}
?>