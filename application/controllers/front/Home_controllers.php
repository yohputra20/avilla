<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_controllers extends CI_Controller
{

	// public $path_images_news = "assets/admin/upload/news/";
	// public $path_images_gallery = "assets/admin/upload/gallery/";
	// public $path_images_comissions = "assets/admin/upload/comissions/";

	public function __construct()
	{
		parent::__construct();
		$this->load->model('front/home_model');
	}

	public function index()
	{
		// $content['data_content'] = "admin/about_us";
		// $content['content_modal'] = "admin/modal/about_us_modal";
		$content['data_banner'] = $this->home_model->get_data("banner");
		$content['data_service'] = $this->home_model->get_data("service");
		$content['data_product'] = $this->home_model->get_data("product");
		$content['data_client'] = $this->home_model->get_data("client");
		$content['data_about'] = $this->home_model->get_data("about");
		$content['data_contactus'] = $this->home_model->get_data("contactus");
		//echo json_encode($content['data_banner']);exit();
		$this->load->view('front/template_view', $content);
	}

	
}
