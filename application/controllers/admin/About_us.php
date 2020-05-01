<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/about_us_model');
        
        if($this->session->userdata('status') != 'login'){
			redirect(base_url('admin'));
		}
    }

    public function index(){
        
        $about_us_data['query'] = $this->about_us_model->about_usData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'galley_data' => $about_us_data
        );
        // echo json_encode($content);die(0);
        $content['data_content'] = "admin/about_us";
        $content['content_modal'] = "admin/modal/about_us_modal";
        
        $this->load->view('admin/header', $content);
    }

    public function show_about_us(){
        $about_us_data = $this->about_us_model->about_usData($data);
        return $about_us_data;
    }

    public function get_about_us($id){
        $about_us_data = $this->about_us_model->about_usGet($id);
        if (sizeof($about_us_data) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $about_us_data
            ];

        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
        // return $about_us_data;
    }

    public function add_about_us(){
		$data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $about_usAdd = $this->about_us_model->about_usAdd($data);
        if ($about_usAdd == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $about_usAdd
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

    public function edit_about_us(){
        $data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $about_usEdit = $this->about_us_model->about_usEdit($data);
        if ($about_usEdit == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $about_usEdit
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

    public function delete_about_us($id){
        $delete = $this->about_us_model->about_usDelete($id);

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