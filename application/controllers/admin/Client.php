<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/Client_model','client_model');

        if($this->session->userdata('status') != 'login'){
			redirect(base_url('admin'));
		}
    }

    public function index(){
        
        $client_data['query'] = $this->client_model->clientData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'client_data' => $client_data
        );
        $content['data_content'] = "admin/client";
        $content['content_modal'] = "admin/modal/client_modal";
        
        $this->load->view('admin/header', $content);
    }

    public function show_client(){
        $client_data = $this->client_model->clientData();
        return $client_data;
    }
    public function countclient(){

    }
    public function get_client($id){
        $client_data = $this->client_model->clientGet($id);
        if (sizeof($client_data) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $client_data
            ];

        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
        // return $client_data;
    }

    public function add_client(){
		$data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $clientAdd = $this->client_model->clientAdd($data);
        if ($clientAdd == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $clientAdd
            ];
        }else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => $clientAdd
            ];
        }
        echo json_encode($balikan);
    }

    public function edit_client(){
        $data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $clientEdit = $this->client_model->clientEdit($data);
        if ($clientEdit == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $clientEdit
            ];
        }else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => $clientEdit
            ];
        }
        echo json_encode($balikan);
    }

    public function delete_client($id){
        $delete = $this->client_model->clientDelete($id);

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