<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/ContactUs_model','contactus_model');

        if($this->session->userdata('status') != 'login'){
			redirect(base_url('admin'));
		}
    }

    public function index(){
        
        $contactus_data['query'] = $this->contactus_model->contactusData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'contactus_data' => $contactus_data
        );
        $content['data_content'] = "admin/contact_us";
        $content['content_modal'] = "admin/modal/service_modal";
        
        $this->load->view('admin/header', $content);
    }

    public function show_contactus(){
        $contactus_data = $this->contactus_model->contactusData();
      
        if($contactus_data){
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $contactus_data
            ];
        }else{
            $balikan = [
                'status' => '0',
                'message' => 'failed',
               
            ];
        }
        echo json_encode($balikan);
    }

   

    public function save_contactus(){
		$data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        if($data['contactusId']!=''){
            $contactusAdd = $this->contactus_model->contactusEdit($data);
        }else{
            $contactusAdd = $this->contactus_model->contactusAdd($data);
        }
       
        if ($contactusAdd == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $contactusAdd
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