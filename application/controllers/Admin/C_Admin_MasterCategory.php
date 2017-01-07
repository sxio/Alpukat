<?php
	class C_Admin_MasterCategory extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('Category_model');
		}

		public function addcategory(){
			$this->form_validation->set_rules('categoryName', 'Category Name', 'trim|required|max_length[30]|is_unique[MSDCATEGORY.CAT_NAME]');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
			} else{
				$res = $this->Category_model->add_category();
				if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Category Addded to Database</div>';
				} else{
					$data['msg'] = '<div class="alert alert-danger">'. $res['message'] .'</div>';
				}
			}

			$data['curr_cat'] = $this->Category_model->get_category()['data'];
			$data['num_row_cat'] = $this->Category_model->get_category()['num_rows'];

			$this->load->view('admin/category/addmastercategory', $data);
		}
	}
?>