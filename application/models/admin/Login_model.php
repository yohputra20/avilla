<?php

class Login_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function login($data){
        $this->db->where('username LIKE binary', $data['username']);
        $this->db->where('password', MD5($data['password']));
        $query = $this->db->get('user');
        $result_array = $query->result_array();

        // echo json_encode($result_array);die(0);

        return $result_array;
    }
}
?>