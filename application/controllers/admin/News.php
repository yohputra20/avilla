<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/news_model');

        if($this->session->userdata('status') != 'login'){
			redirect(base_url('admin'));
		}
    }

    public function index(){
        
        $news_data['query'] = $this->news_model->newsData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'galley_data' => $news_data
        );
        // echo json_encode($content);die(0);
        $this->load->view('admin/header');
        $this->load->view('admin/news', $content);
        $this->load->view('admin/footer');
        $this->load->view('admin/modal/news_modal');
    }

    public function show_news(){
        $news_data = $this->news_model->newsData($data);
        return $news_data;
    }

    public function get_news($id){
        $news_data = $this->news_model->newsGet($id);
        if (sizeof($news_data) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $news_data
            ];

        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
        // return $news_data;
    }

    public function add_news(){
		$data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $newsAdd = $this->news_model->newsAdd($data);
        if ($newsAdd == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $newsAdd
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

    public function edit_news(){
        $data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $newsEdit = $this->news_model->newsEdit($data);
        if ($newsEdit == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $newsEdit
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

    public function delete_news($id){
        $delete = $this->news_model->newsDelete($id);

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