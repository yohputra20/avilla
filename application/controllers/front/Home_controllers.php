<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_controllers extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('front/home_model');
		// $this->load->model('admin/product_model');
	}

	public function index()
	{
		$content['data_banner'] = $this->home_model->get_data("banner");
		$content['data_service'] = $this->home_model->get_data("service");
		$content['data_product'] = $this->home_model->get_data("product");
		$content['data_client'] = $this->home_model->get_data("client");
		$content['data_about'] = $this->home_model->get_data("about");
		$content['data_contactus'] = $this->home_model->get_data("contactus");
		
		$data_sub_detail = $this->home_model->getSpesifikasiProdukFooter("1"); // GET SPESIFIKASI FOR DATA FOOTER
		$content['data_produk_spesifikasi'] = $data_sub_detail;
		//echo json_encode($data_sub_detail);exit();
		$content['header'] = "front/header_view";
		$content['footer'] = "front/footer_view";
		$content['content_section'] = "front/home_view";
		
		$content['menu_active'] = "Beranda";
		
		$this->load->view('front/template_view', $content);
	}

	function detail_page($typepage, $param){
		$content['data_about'] = $this->home_model->get_data("about");
		$content['data_contactus'] = $this->home_model->get_data("contactus");

		$content['data_detail'] = $this->home_model->get_data_by_slug($param, $typepage);
		$content['header'] = "front/header_view";
		$content['footer'] = "front/footer_view";
		$content['content_section'] = "front/detailpage_view";
		if($typepage == "service"){
			$content['title_content'] = "Services";
			$content['menu_active'] = "services";
			$content['path_image'] = base_url()."assets/admin/upload/service/";
		}else if($typepage == "product"){
			$arr_sub_detail = array();
			$data_sub_detail = $this->home_model->get_detail_produk($content['data_detail']['id'], "by_id_produk");

			if($data_sub_detail[0]['product_id'] == "1"){ // JIKA GENSET PORTABLE
				foreach ($data_sub_detail as $value) {
					$data_spesifikasi = $this->home_model->get_spesifikasi_produk($value['id']);
					$value['spesifikasi'] = $data_spesifikasi;
					array_push($arr_sub_detail, $value);
				}
				$content['data_sub_detail'] = $data_sub_detail;
			}else{
				//array_push($arr_sub_detail, $data_sub_detail);
				$content['data_sub_detail'] = $data_sub_detail;
			}

			
			$content['title_content'] = "Product";
			$content['menu_active'] = "product";
			$content['path_image'] = base_url()."assets/admin/upload/product/";
		}
		$this->load->view('front/template_view', $content);
	}

	function spesifikasi_produk($param){
		$data_sub_detail = $this->home_model->get_detail_produk($param, "by_id_sub_produk");
		$content['data_sub_detail'] = $data_sub_detail;
		
		$content['data_about'] = $this->home_model->get_data("about");
		$content['data_contactus'] = $this->home_model->get_data("contactus");
		$content['data_detail'] = $this->home_model->get_header_produk($data_sub_detail[0]['product_id'], "product");

		$content['header'] = "front/header_view";
		$content['footer'] = "front/footer_view";
		$content['content_section'] = "front/spesifikasi_produk_view";

		// $content['data_spesifikasi'] = $this->home_model->get_spesifikasi_produk($param);
		$content['data_spesifikasi']=$this->home_model->getdetailSpec($param);
		//echo json_encode($content['data_spesifikasi']);exit();
		
		$content['title_content'] = "Product Specification";
		$content['menu_active'] = "product";
		$content['path_image'] = base_url()."assets/admin/upload/product/";
		

		$this->load->view('front/template_view', $content);
	}

	
}
