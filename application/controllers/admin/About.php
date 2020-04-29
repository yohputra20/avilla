<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/about_model');
        
        if($this->session->userdata('status') != 'login'){
			redirect(base_url('admin'));
		}
    }

    public function index(){
        
        $about_data['query'] = $this->about_model->aboutData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'galley_data' => $about_data
        );
        // echo json_encode($content);die(0);
        $this->load->view('admin/header', $content);
        $this->load->view('admin/about', $content);
        $this->load->view('admin/footer');
        $this->load->view('admin/modal/about_modal');
    }

    public function show_about(){
        $about_data = $this->about_model->aboutData();
        return $about_data;
    }

    public function get_about($id){
        $about_data = $this->about_model->aboutGet($id);
        if (sizeof($about_data) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $about_data
            ];

        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
        // return $about_data;
    }

    public function add_about(){
		$data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $aboutAdd = $this->about_model->aboutAdd($data);
        if ($aboutAdd == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $aboutAdd
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

    public function edit_about(){
        $data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $aboutEdit = $this->about_model->aboutEdit($data);
        if ($aboutEdit == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $aboutEdit
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

    public function delete_about($id){
        $delete = $this->about_model->aboutDelete($id);

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