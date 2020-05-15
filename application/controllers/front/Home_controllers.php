<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_controllers extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('front/home_model');
	}

	public function index()
	{
		$content['data_banner'] = $this->home_model->get_data("banner");
		$content['data_service'] = $this->home_model->get_data("service");
		$content['data_product'] = $this->home_model->get_data("product");
		$content['data_client'] = $this->home_model->get_data("client");
		$content['data_about'] = $this->home_model->get_data("about");
		$content['data_contactus'] = $this->home_model->get_data("contactus");
		
		$content['header'] = "front/header_view";
		$content['footer'] = "front/footer_view";
		$content['content_section'] = "front/home_view";
		
		$content['menu_active'] = "home";
		
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
			$content['title_content'] = "Product";
			$content['menu_active'] = "product";
			$content['path_image'] = base_url()."assets/admin/upload/product/";
		}
		

		$this->load->view('front/template_view', $content);
	}

	
}
