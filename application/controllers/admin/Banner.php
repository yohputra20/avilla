<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/banner_model');

        if($this->session->userdata('status') != 'login'){
			redirect(base_url('admin'));
		}
    }

    public function index(){
        
        $banner_data['query'] = $this->banner_model->bannerData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'banner_data' => $banner_data
        );
        // echo json_encode($content);die(0);
        $content['data_content'] = "admin/banner";
        $content['content_modal'] = "admin/modal/banner_modal";
        
        $this->load->view('admin/header', $content);
        
    }

    public function show_banner(){
        $banner_data = $this->banner_model->bannerData($data=array());
        return $banner_data;
    }

    public function get_banner($id){
        $banner_data = $this->banner_model->bannerGet($id);
        if (sizeof($banner_data) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $banner_data
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

    public function add_banner(){
		$data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
       
        $bannerAdd = $this->banner_model->bannerAdd($data);
        if ($bannerAdd == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $bannerAdd
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

    public function edit_banner(){
        $data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $bannerEdit = $this->banner_model->bannerEdit($data);
        if ($bannerEdit == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $bannerEdit
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

    public function delete_banner($id){
        $delete = $this->banner_model->bannerDelete($id);

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