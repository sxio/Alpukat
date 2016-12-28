<?php
	class C_Admin_Estore extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('admin_username') == NULL){
				redirect('admin/login');
			}
			$this->load->model('Estore_model');
		}

		public function addcategory(){
			$this->form_validation->set_rules('categoryName', 'Category Name', 'trim|required|max_length[30]|is_unique[MSDCATEGORY.CAT_NAME]');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);


			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
			} else{
				$res = $this->Estore_model->add_category();
				if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Category Addded to Database</div>';
				} else{
					$data['msg'] = '<div class="alert alert-danger">'. $res['message'] .'</div>';
				}
			}

			$data['curr_cat']     = $this->Estore_model->get_categories()['data'];
			$data['num_row_cat']  = $this->Estore_model->get_categories()['num_rows'];

			$this->load->view('admin/estore/addcategory', $data);
		}

		public function addproduct(){
			$this->form_validation->set_rules('prodID', 'Product ID', 'trim|required|alpha_numeric|min_length[3]|max_length[10]|is_unique[MSTPRODUCT.PROD_ID]|xss_clean');
			$this->form_validation->set_rules('prodName', 'Product Name', 'trim|required|min_length[10]|max_length[100]');
			$this->form_validation->set_rules('prodCat', 'Category', 'required');
			$this->form_validation->set_rules('prodQuant', 'Quantity', 'trim|required|numeric');
			$this->form_validation->set_rules('prodPrice', 'Price', 'trim|required|numeric');
			$this->form_validation->set_rules('prodDesc', 'News Content', 'trim|required');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
				$estore_img = '';
			} else{
				// UPLOAD NEWS IMAGE
				$config['upload_path']   = './assets/img/estore-img';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']      = '2048';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload()){
					$error = $this->upload->display_errors();
					$estore_img = 'noimage.jpg';
				}else{
					$data['upload_data'] = $this->upload->data();
					$estore_img = $data['upload_data']['file_name'];
				}

				// INSERT TO DATABASE (MODEL)
				$res = $this->Estore_model->add_product($estore_img);

				if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Product Addded to Database</div>';
				} else{
					$data['msg'] = '<div class="alert alert-danger">'. $res['message'] .'</div>';
				}
			}
			$data['categories'] = $this->Estore_model->get_categories()['data'];
			$data['estore_img'] = $estore_img;
			$this->load->view('admin/estore/addproduct', $data);
		}

		public function restock(){
			$this->form_validation->set_rules('catID', 'Category ID','required');
			$this->form_validation->set_rules('prodID', 'Product ID', 'required');
			$this->form_validation->set_rules('prodQuan', 'Quantity', 'trim|required|is_natural_no_zero');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
			} else {
				$res = $this->Estore_model->restock_product();

				if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Restock success</div>';
				} else{
					$data['msg'] = '<div class="alert alert-danger">'. $res['message'] .'</div>';
				}			}

			$data['categories'] = $this->Estore_model->get_categories()['data'];
			$this->load->view('admin/estore/restock', $data);
		}

		// for AJAX in restock.js
		public function GetProdutByCategory(){
			$id = $this->input->post('catID');
			$res = $this->Estore_model->get_product_by_category($id);
			print_r(json_encode($res));
		}

		// for AJAX in restock.js
		public function GetProductById(){
			$id = $this->input->post('prodID');
			$res = $this->Estore_model->get_product_by_id($id);
			print_r(json_encode($res));
		}
	}
?>