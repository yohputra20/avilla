<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermanegement extends CI_Controller {

    //put your code here
    function usermanegement() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('image_lib');
        $this->load->library('email');
        $this->load->model('admin/Usermanagement_model', 'ummodel');
    }


    public function index(){
        
      
        $content = array(
            'username' => $this->session->userdata('username'),
           
        );
        $content['data_content'] = "admin/usermanagement";
        $content['content_modal'] = "admin/modal/usermanagement_modal";
        
        $this->load->view('admin/header', $content);
    }
    function getalluser() {
        $getUser = $this->ummodel->getuser();
        echo json_encode($getUser);
    }

    function oneuser($id) {
        $getUser = $this->ummodel->getoneuser($id);
        echo json_encode($getUser);
    }

    function saveUser() {
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }

        if ($data['userid'] == '' || $data['userid'] == null) {
            $chekuser = $this->ummodel->chekusermanagement($data['uname']);
            if (sizeof($chekuser) > 0) {
                $msg = array('status' => 0, 'msg' => 'Username already exist');
            } else {
                if ($data['passwd'] == '' && $data['roleid'] != 7) {
                    $insertbarge = $this->ummodel->insertUser($data);
                } else {
                    $insertbarge = $this->ummodel->insertUserVessel($data);
                }
                $msg = $insertbarge;
            }
        } else {
            $updatebarge = $this->ummodel->updateUser($data);
            $msg = $updatebarge;
        }

        echo json_encode($msg);
    }

    function deleteUser($id) {
        $deleteowner = $this->ummodel->deleteUser($id);
        echo json_encode($deleteowner);
    }

    function getrole() {
        $roleid = $this->input->get('roleid');
        $getrole = $this->ummodel->getrole($roleid);

        echo json_encode($getrole);
    }

    function changeroleaction() {
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }
        $changerole = $this->ummodel->changeroleaction($data);
        echo json_encode($changerole);
    }

    function checkusername($key) {
        $chekuser = $this->ummodel->chekusermanagement($key);
        if (sizeof($chekuser) > 0) {
            $msg = array('status' => 0, 'msg' => 'Username already exist');
        } else {
            $msg = array('status' => 1, 'msg' => 'Username available');
        }
        echo json_encode($msg);
    }

}
?>