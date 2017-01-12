<?php
	class C_Admin_Doctor extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('Doctor_model');
		}

		public function add_category(){
			$this->form_validation->set_rules('dct_cat', 'Category', 'trim|required|max_length[30]|is_unique[MSDCATEGORY.CAT_NAME]');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
			} else{
				$res = $this->Doctor_model->add_category();
				if($res['code'] == 0){
					$this->session->set_flashdata('msg', '<div class="alert alert-success">Category Addded to Database</div>');
				} else{
					$this->session->set_flashdata('msg', '<div class="alert alert-danger">'. $res['message'] .'</div>');
				}
			}

			$data['curr_cat'] = $this->Doctor_model->get_category()['data'];
			$data['num_row_cat'] = $this->Doctor_model->get_category()['num_rows'];

			$this->load->view('admin/doctor/add_category', $data);
			if($this->input->post('save')){
				redirect('admin/doctor/add-category');
			}
		}
	}
?>