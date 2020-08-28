<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/User_model', 'user_model');

        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('admin'));
        }
    }

    public function index()
    {

        $user_data['query'] = $this->user_model->userData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'user_data' => $user_data
        );
        $content['data_content'] = "admin/user";
        $content['content_modal'] = "admin/modal/user_modal";

        $this->load->view('admin/header', $content);
    }

    public function show_user()
    {
        $user_data = $this->user_model->userData();
        return $user_data;
    }


    public function get_user($id)
    {
        $user_data = $this->user_model->userGet($id);
        if (sizeof($user_data) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $user_data
            ];
        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
        // return $user_data;
    }

    public function add_user()
    {
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }
        if ($data['passwords'] != $data['confirmpasswords']) {
            $balikan = [
                'status' => '0',
                'message' => 'Password dan konfirmasi password tidak sama',
                'data' => []
            ];
        } else {
            $userAdd = $this->user_model->userAdd($data);
            if ($userAdd == 1) {
                $balikan = [
                    'status' => '1',
                    'message' => 'success',
                    'data' => $userAdd
                ];
            } else {
                $balikan = [
                    'status' => '0',
                    'message' => 'failed',
                    'data' => []
                ];
            }
        }
        echo json_encode($balikan);
    }

    public function edit_user()
    {
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }

        // echo json_encode($data);die(0);
        $userEdit = $this->user_model->userEdit($data);
        if ($userEdit == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $userEdit
            ];
        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
    }
    public function edit_password()
    {
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }

        $checkpassword = $this->user_model->checkCurrentPassword($data);
        if ($checkpassword == 0) {
            $balikan = [
                'status' => '0',
                'message' => 'Password Saat ini salah',
                'data' => []
            ];
        } else {
            if ($data['passwords'] != $data['confirmpasswords']) {
                $balikan = [
                    'status' => '0',
                    'message' => 'Password dan konfirmasi password tidak sama',
                    'data' => []
                ];
            } else {

                $userEdit = $this->user_model->userEditPassword($data);
                if ($userEdit == 1) {
                    $balikan = [
                        'status' => '1',
                        'message' => 'success',
                        'data' => $userEdit
                    ];
                } else {
                    $balikan = [
                        'status' => '0',
                        'message' => 'failed',
                        'data' => []
                    ];
                }
            }
        }


        // echo json_encode($data);die(0);

        echo json_encode($balikan);
    }

    public function delete_user($id)
    {
        $delete = $this->user_model->userDelete($id);

        if ($delete == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $delete
            ];
        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => []
            ];
        }
        echo json_encode($balikan);
    }
}
