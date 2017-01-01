<?php
	class Estore_model extends CI_Model{
		public function __construct(){
            parent::__construct();
			$this->load->database();
			$this->load->helper('date');
			date_default_timezone_set('Asia/Jakarta');
		}

		public function get_user_info($username){
			$this->db->where('USER_ID', $username);
			$query = $this->db->get('MSTUSER');
			return $query->result_array();
		}

		public function add_product($img){
			$data = array(
				'PROD_ID'     => $this->input->post('prodID'),
				'PROD_NAME'   => $this->input->post('prodName'),
				'CAT_ID'      => $this->input->post('prodCat'),
				'PROD_QTY_OS' => $this->input->post('prodQuant'),
				'PROD_PRICE'  => $this->input->post('prodPrice'),
				'PROD_DESC'   => $this->input->post('prodDesc'),
				'PROD_IMG'    => $img,
				'CREATED_AT'  => mdate('%Y-%m-%d %H:%i:%s',now())
			);
			$this->db->insert('MSTPRODUCT', $data);
			return $this->db->error();
		}

		public function restock_product(){
			$this->db->select('PROD_QTY_OS');
			$this->db->where('PROD_ID', $this->input->post('prodID'));
			$quanLama = $this->db->get('MSTPRODUCT');
			$quanLama = $quanLama->row()->PROD_QTY_OS;

			$data = array(
				'PROD_QTY_OS' => $quanLama + $this->input->post('prodQuan'),
				'UPDATED_AT'  => mdate('%Y-%m-%d %H:%i:%s',now())
			);
			$this->db->where('PROD_ID', $this->input->post('prodID'));
			$this->db->update('MSTPRODUCT', $data);
			return $this->db->error();
		}

		public function add_category(){
			$data = array(
				'CAT_GROUP' => 2, //2 means Estore
				'CAT_NAME' => $this->input->post('categoryName')
			);
			$this->db->insert('MSDCATEGORY', $data);
			return $this->db->error();
		}

		public function get_categories(){
			$this->db->order_by('CAT_NAME');
			$this->db->where('CAT_GROUP', 2);
			$query = $this->db->get('MSDCATEGORY');
			$data = array(
				'data' => $query->result_array(),
				'num_rows' => $query->num_rows()
			);
			return $data;
		}

		public function get_product_by_category($id){
			$this->db->where('CAT_ID', $id);
			$query = $this->db->get('MSTPRODUCT');
			return $query->result_array();
		}

		public function get_product_by_id($id){
			$this->db->where('PROD_ID', $id);
			$this->db->join('MSDCATEGORY', 'MSDCATEGORY.CAT_ID = MSTPRODUCT.CAT_ID');
			$query = $this->db->get('MSTPRODUCT');
			if($query->num_rows() == 1){
				return $query->result_array();
			} else{
				return null;
			}
		}

		public function get_newest_product($limit, $offset){
			$this->db->order_by('CREATED_AT', 'DESC');
			$query = $this->db->get('MSTPRODUCT', $limit, $offset);
			return $query->result_array();
		}


		public function add_order(){
			$dataHeader = array(
				'ORDER_ID'      => $this->input->post('shoppingid'),
				'USER_ID'       => $this->input->post('buyerid'),
				'ORDER_ADDRESS' => $this->input->post('buyeraddress'),
				'BANK_TYPE'     => $this->input->post('banktype'),
				'BANK_ACC_NUM'  => $this->input->post('banknumber'),
				'BANK_ACC_NAME' => $this->input->post('bankAccName'),
				'TRANSFER_DATE' => nice_date($this->input->post('date_tf'), 'Y-m-d'),
				'TRANSPORT'     => $this->input->post('transport'),
				'TRANSPORT_FEE' => $this->input->post('transfee'),
				'ORDER_DATE'    => mdate('%Y-%m-%d %H:%i:%s',now()),
				'STATUS'        => 'PENDING'
			);
			$this->db->insert('TRHORDER', $dataHeader);

			foreach($this->cart->contents() as $items){
				$dataDetail = array(
					'USER_ID'  => $this->input->post('buyerid'),
					'ORDER_ID' => $this->input->post('shoppingid'),
					'PROD_ID'  => $items['id'],
					'QUANTITY' => $items['qty'],
					'PRICE'    => $items['price']
				);
				$this->db->insert('TRDORDER', $dataDetail);
			}
			return $this->db->error();
		}

		public function get_all_order(){
			$query = $this->db->get('TRHORDER');
			return $query->result_array();
		}

		public function get_order_by_username($username){
			$this->db->where('USER_ID', $username);
			$query = $this->db->get('TRHORDER');
			return $query->result();
		}

		public function get_order_by_id($order_id, $username){
			$this->db->where('TRDORDER.ORDER_ID', $order_id);
			$this->db->where('TRDORDER.USER_ID', $username);
			$this->db->join('TRDORDER', 'TRHORDER.ORDER_ID = TRDORDER.ORDER_ID');
			$this->db->join('MSTPRODUCT', 'TRDORDER.PROD_ID = MSTPRODUCT.PROD_ID');
			$this->db->join('MSTUSER', 'MSTUSER.USER_ID = TRHORDER.USER_ID');
			$this->db->join('MSDCATEGORY', 'MSTPRODUCT.CAT_ID = MSDCATEGORY.CAT_ID');
			$query = $this->db->get('TRHORDER');
			return $query->result_array();
		}
	}
?>