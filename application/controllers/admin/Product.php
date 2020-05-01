<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/product_model');

        if($this->session->userdata('status') != 'login'){
			redirect(base_url('admin'));
		}
    }

    public function index(){
        
        $product_data['query'] = $this->product_model->productData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'product_data' => $product_data
        );
        $content['data_content'] = "admin/product";
        $content['content_modal'] = "admin/modal/product_modal";
        
        $this->load->view('admin/header', $content);
    }
    public function add_product(){
		$data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
      
        $productAdd = $this->product_model->productAdd($data);
        if ($productAdd == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $productAdd
            ];
        }else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
    }
    public function get_product($id){
        $product_data = $this->product_model->productGet($id);
        if (sizeof($product_data) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $product_data
            ];
        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
        
    }
    public function edit_product(){
        $data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
      
        $productEdit = $this->product_model->productEdit($data);
        if ($productEdit == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $productEdit
            ];
        }else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
    }

    public function delete_product($id){
        $delete = $this->product_model->productDelete($id);

        if ($delete == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $delete
            ];
        }else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
    }
}
?> 