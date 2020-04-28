<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comissions extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/comissions_model');

        if($this->session->userdata('status') != 'login'){
			redirect(base_url('admin'));
		}
    }

    public function index(){
        
        $comissions_data['query'] = $this->comissions_model->comissionsData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'galley_data' => $comissions_data
        );
        // echo json_encode($content);die(0);
        $this->load->view('admin/header');
        $this->load->view('admin/comissions', $content);
        $this->load->view('admin/footer');
        $this->load->view('admin/modal/comissions_modal');
    }

    public function show_comissions(){
        $comissions_data = $this->comissions_model->comissionsData($data);
        return $comissions_data;
    }


    public function view_comissions($id){
        $comissions_data = $this->comissions_model->comissionsView($id);
        if (sizeof($comissions_data) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $comissions_data
            ];

        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
        // return $comissions_data;
    }

    public function add_comissions(){
		$data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $comissionsAdd = $this->comissions_model->comissionsAdd($data);
        if ($comissionsAdd == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $comissionsAdd
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

    public function edit_comissions(){
        $data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $comissionsEdit = $this->comissions_model->comissionsEdit($data);
        if ($comissionsEdit == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $comissionsEdit
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

    public function delete_comissions($id){
        $delete = $this->comissions_model->comissionsDelete($id);

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