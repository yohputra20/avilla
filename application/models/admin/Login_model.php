<?php

class Login_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function login($data){
        $balikan=array();
        $this->db->where('username LIKE binary', $data['username']);
      //  $this->db->where('password', MD5($data['password']));
        $query = $this->db->get('user');
        $result_array = $query->row_array();

        // echo json_encode($result_array);die(0);
        if (password_verify($data['passwords'], $result_array['password'])) {
            return $result_array;
        }else{
            return   $balikan;
        }
       
    }

}
?>