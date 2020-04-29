<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/Service_model','service_model');

        if($this->session->userdata('status') != 'login'){
			redirect(base_url('admin'));
		}
    }

    public function index(){
        
        $service_data['query'] = $this->service_model->serviceData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'service_data' => $service_data
        );
        // echo json_encode($content);die(0);
        $this->load->view('admin/header', $content);
        $this->load->view('admin/service', $content);
        $this->load->view('admin/footer');
        $this->load->view('admin/modal/service_modal');
    }

    public function show_service(){
        $service_data = $this->service_model->serviceData();
        return $service_data;
    }

    public function get_service($id){
        $service_data = $this->service_model->serviceGet($id);
        if (sizeof($service_data) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $service_data
            ];

        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
        // return $service_data;
    }

    public function add_service(){
		$data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $serviceAdd = $this->service_model->serviceAdd($data);
        if ($serviceAdd == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $serviceAdd
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

    public function edit_service(){
        $data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $serviceEdit = $this->service_model->serviceEdit($data);
        if ($serviceEdit == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $serviceEdit
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

    public function delete_service($id){
        $delete = $this->service_model->serviceDelete($id);

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