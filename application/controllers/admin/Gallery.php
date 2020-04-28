<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller{
    function __construct(){
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/gallery_model');

        if($this->session->userdata('status') != 'login'){
			redirect(base_url('admin'));
		}
    }

    public function index(){
        
        $gallery_data['query'] = $this->gallery_model->galleryData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'galley_data' => $gallery_data
        );
        // echo json_encode($content);die(0);
        $this->load->view('admin/header');
        $this->load->view('admin/gallery', $content);
        $this->load->view('admin/footer');
        $this->load->view('admin/modal/gallery_modal');
    }

    public function show_gallery(){
        $gallery_data = $this->gallery_model->galleryData($data);
        return $gallery_data;
    }

    public function get_gallery($id){
        $gallery_data = $this->gallery_model->galleryGet($id);
        if (sizeof($gallery_data) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $gallery_data
            ];

        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
        // return $gallery_data;
    }

    public function add_gallery(){
		$data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $galleryAdd = $this->gallery_model->galleryAdd($data);
        if ($galleryAdd == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $galleryAdd
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

    public function edit_gallery(){
        $data = array();
		foreach ($_POST as $key => $value) {
			$data[$key] = $value;
        }
        // echo json_encode($data);die(0);
        $galleryEdit = $this->gallery_model->galleryEdit($data);
        if ($galleryEdit == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $galleryEdit
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

    public function delete_gallery($id){
        $delete = $this->gallery_model->galleryDelete($id);

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