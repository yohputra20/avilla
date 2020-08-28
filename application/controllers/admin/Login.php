<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/login_model');

        // if($this->session->userdata('status') == 'login'){
		// 	redirect(base_url('admin/home'));
		// }
    }

    public function index(){
        if($this->session->userdata('status') == 'login'){
			redirect(base_url('admin/home'));
		}
       
        $this->load->view('admin/login');
    }

    public function login(){
        $data =  array();
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }

        $ceklogin = $this->login_model->login($data);

        if (sizeof($ceklogin) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $ceklogin
            ];
            $this->set_session($balikan['data']);

        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
    }

    private function set_session($data){
        $data_session = array(
            'username' => $data['username'],
            'status' => 'login'
            );
 
        $this->session->set_userdata($data_session);

        // redirect(base_url('home'));
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }
}
?>