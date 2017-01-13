<?php class C_Estore extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->library('cart');
			$this->load->model('Estore_model');
		}

		public function view($page = 'index'){
			if($page == 'epurchase'){
				redirect('estore/purchase');
			}
			$data['cart']          = $this->cart->contents();
			$data['total_items']   = $this->cart->total_items();
			$data['total']         = $this->cart->total();
			$data['categories']    = $this->Estore_model->get_categories()['data'];

			$data['header']        = $this->load->view('templates/header','',TRUE);
			$data['enav']          = $this->load->view('estore/templates/enav', $data,TRUE);
			$data['efooter']       = $this->load->view('estore/templates/efooter','',TRUE);

			$data['carousel_prod'] = $this->Estore_model->get_newest_product(6,0);
			$data['newest_arrival'] = $this->Estore_model->get_newest_product(4,0);

			$this->load->view('estore/'. $page, $data);
		}

		public function detail($prod_id){
			$data['total_items'] = $this->cart->total_items();
			$data['total']       = $this->cart->total();
			$data['categories']    = $this->Estore_model->get_categories()['data'];

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
			$data['cart']        = $this->cart->contents();
			$data['categories']    = $this->Estore_model->get_categories()['data'];
			print_r(json_encode($data));
		}

		public function emptycart(){
			$this->cart->destroy();
		}

		public function removeitem($rowid){
			$this->cart->remove($rowid);
			redirect('estore/ecart');
		}

		public function decrease_quantity($rowid){
			$quan_lama = $this->cart->get_item($rowid)['qty'];
			$quan_lama -= 1;
			if($quan_lama <= 0) $quan_lama = 0;
			$data = array(
				'rowid' => $rowid,
				'qty'   => $quan_lama
			);
			$this->cart->update($data);
			redirect('estore/ecart');
		}

		public function increase_quantity($rowid){
			$quan_lama = $this->cart->get_item($rowid)['qty'];
			$quan_lama += 1;
			if($quan_lama >= 5) $quan_lama = 5;
			$data = array(
				'rowid' => $rowid,
				'qty'   => $quan_lama
			);
			$this->cart->update($data);
			redirect('estore/ecart');
		}

		public function purchase(){
			if($this->session->userdata('username') == NULL){
				redirect('user');
			}
			$data['cart']        = $this->cart->contents();
			$data['total_items'] = $this->cart->total_items();
			$data['total']       = $this->cart->total();
			$data['categories']    = $this->Estore_model->get_categories()['data'];

			if($data['total_items'] == 0){
				redirect('estore/ecart');
			}

			$data['header']  = $this->load->view('templates/header','',TRUE);
			$data['enav']    = $this->load->view('estore/templates/enav', $data,TRUE);
			$data['efooter'] = $this->load->view('estore/templates/efooter','',TRUE);

			$username = $this->session->userdata('username');
			$data['user_info'] = $this->Estore_model->get_user_info($username)[0];

			$this->load->view('estore/epurchase', $data);
		}

		public function product($prod_id){
			$data['cart']          = $this->cart->contents();
			$data['total_items']   = $this->cart->total_items();
			$data['total']         = $this->cart->total();
			$data['categories']    = $this->Estore_model->get_categories()['data'];

			$data['header']        = $this->load->view('templates/header','',TRUE);
			$data['enav']          = $this->load->view('estore/templates/enav', $data, TRUE);
			$data['efooter']       = $this->load->view('estore/templates/efooter','',TRUE);

			$data['product'] = $this->Estore_model->get_product_by_category($prod_id);

			$this->load->view('estore/eproducts', $data);
		}
	}
?>
