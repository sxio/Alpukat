<?php
	class C_Admin_News extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('admin_username') == NULL){
				redirect('admin/login');
			}
			$this->load->model('News_model');
		}

		public function view($page = null){
			if(!file_exists(APPPATH.'/views/admin/news/'.$page.'.php')){
				show_404();
			}

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			$this->load->helper('html');
			$this->load->view('admin/news/'.$page, $data);
		}

		// DONE
		public function addnews(){
			$this->form_validation->set_rules('newsID', 'News ID', 'trim|required|alpha_numeric_spaces|min_length[3]|max_length[10]|is_unique[TRDNEWS.NEWS_ID]|xss_clean');
			$this->form_validation->set_rules('newsCategory', 'Category', 'required');
			$this->form_validation->set_rules('newsTitle', 'News Title', 'trim|required|min_length[10]|max_length[100]');
			$this->form_validation->set_rules('newsContent', 'News Content', 'trim|required');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();

			} else{
				// UPLOAD NEWS IMAGE
				$config['upload_path']   = './assets/img/news-img';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']      = '2048';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload()){
					$error = $this->upload->display_errors();
					$news_img = 'noimage.jpg';
				}else{
					$data['upload_data'] = $this->upload->data();
					$news_img = $data['upload_data']['file_name'];
				}

				// INSERT TO DATABASE (MODEL)
				$res = $this->News_model->insert($news_img);

				if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">News Addded to Database</div>';
				} else{
					$data['msg'] = '<div class="alert alert-danger">'. $res['message'] .'</div>';
				}
			}
			$data['categories'] = $this->News_model->get_categories()['data'];

			$this->load->view('admin/news/addnews', $data);
		}

		// DONE
		public function listnews(){
			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			$data['lists'] = $this->News_model->get_list();
			$this->load->view('admin/news/listnews', $data);
		}

		// DONE
		public function editnews($NEWS_ID = null){
			if($NEWS_ID == null){
				redirect('admin/news/listnews');
			}
			$this->form_validation->set_rules('newsCategory', 'Category', 'required');
			$this->form_validation->set_rules('newsTitle', 'News Title', 'trim|required|min_length[10]');
			$this->form_validation->set_rules('newsContent', 'News Content', 'trim|required');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);

			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();

			} else{
				// CONFIGURE UPLOAD FILES
				$config['upload_path']   = './assets/img/news-img';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']      = '2048';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload()){
					$error = $this->upload->display_errors();
					$news_img = $this->input->post('prev_img');
				}else{
					// UPLOAD NEW IMAGE
					$data['upload_data'] = $this->upload->data();
					$news_img = $data['upload_data']['file_name'];

					// DELETE PREVIOUS IMAGE
					$prev_img = $this->input->post('prev_img');
					if($prev_img != "noimage.jpg"){
						if(file_exists('assets/img/news-img/'.$prev_img)){
							unlink('assets/img/news-img/'.$prev_img);
						}
					}
				}

				// UPDATE NEWS
				$res = $this->News_model->update($news_img);
				if($res['code'] == 0){
					$data['msg']  = '<div class="alert alert-success">News Updated to Database</div>';
				} else{
					$data['msg'] = '<div class="alert alert-danger">'. $res['message'] .'</div>';
				}
			}
			$data['news']       = $this->News_model->get_news($NEWS_ID)[0];
			$data['categories'] = $this->News_model->get_categories()['data'];

			$this->load->view('admin/news/editnews', $data);
		}

		// DONE
		public function readmore($NEWS_ID = null){
			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);
			$data['news_detail']  = $this->News_model->get_news($NEWS_ID)[0];

			$this->load->view('admin/news/readmore', $data);
		}

		public function deletenews($NEWS_ID){
			$prev_img = $this->News_model->get_news($NEWS_ID)[0]['NEWS_IMAGE'];
			if($prev_img != "noimage.jpg"){
				if(file_exists('assets/img/news-img/'.$prev_img)){
					unlink('assets/img/news-img/'.$prev_img);
				}
			}
			$this->News_model->delete($NEWS_ID);
			redirect('admin/news/listnews');
		}

		public function addcategory(){
			$this->form_validation->set_rules('categoryID', 'Category ID', 'trim|required|max_length[20]|is_unique[MSTCATEGORY.CAT_ID]|xss_clean');
			$this->form_validation->set_rules('categoryName', 'Category Name', 'trim|required|max_length[30]');

			$data['admin_header'] = $this->load->view('admin/templates/admin_header','',TRUE);
			$data['admin_nav']    = $this->load->view('admin/templates/admin_nav','',TRUE);


			if($this->form_validation->run() == FALSE){
				$data['form_error'] = validation_errors();
			} else{
				$res = $this->News_model->add_category();
				if($res['code'] == 0){
					$data['msg'] = '<div class="alert alert-success">Category Addded to Database</div>';
				} else{
					$data['msg'] = '<div class="alert alert-danger">'. $res['message'] .'</div>';
				}
			}

			$data['curr_cat']     = $this->News_model->get_categories()['data'];
			$data['num_row_cat']  = $this->News_model->get_categories()['num_rows'];

			$this->load->view('admin/news/addcategory', $data);
		}
	}
?>