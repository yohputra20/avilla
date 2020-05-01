<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');

        if($this->session->userdata('status') != 'login'){
			redirect(base_url('admin'));
		}
    }
    public function index(){
        $content = array(
            'username' => $this->session->userdata('username')
        );
        $content['data_content'] = "admin/home";
        $content['content_modal'] = "admin/modal/home_modal";

        $this->load->view('admin/header', $content);
        
    }
}
?>