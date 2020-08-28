<?php

class User_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->username = $this->session->userdata('username');
    }

    public function userData()
    {
        $this->db->select('*');
        $this->db->where('fdelete', '0');
        $this->db->order_by('modified_date', 'desc');
        $query = $this->db->get('user');
        $result_array = $query->result_array();

        return $result_array;
    }

    public function userAdd($data)
    {
        $datetime = date('Y-m-d H:i:s');

       
        $insert_data = array(
            'username' => $data['username'],
            'password' => password_hash( $data['passwords'], PASSWORD_DEFAULT),
            'roleid' => 2,           
            'created_date' => $datetime,
            'created_by' =>  $this->username,
            'fdelete' => '0',

        );
        $user_insert = $this->db->insert('user', $insert_data);
        return $user_insert;
    }
    public function checkCurrentPassword($data){
        $this->db->select('*');
        $this->db->where('id', $data['userId']);
        $this->db->where('fdelete', '0');
       
        $query = $this->db->get('user');
        $result_array = $query->row_array();

        if (password_verify($data['currentpasswords'], $result_array['password'])) {
            return '1';
        }else{
            return '0';
        }
        
    }
    public function userGet($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        $result = $query->row_array();

        return $result;
    }

    public function userEdit($data)
    {
        $datetime = date('Y-m-d H:i:s');
       
        $update_data = array(
            'username' => $data['username'],
           
            
            'modified_by' =>  $this->username,
            'modified_date' => $datetime,
        );
        $this->db->where('id', $data['userId']);
        $user_update = $this->db->update('user', $update_data);
        return $user_update;
    }
    public function userEditPassword($data)
    {
        $datetime = date('Y-m-d H:i:s');
       
        $update_data = array(
           
            'password' => password_hash( $data['passwords'], PASSWORD_DEFAULT),
                 
            'modified_by' =>  $this->username,
            'modified_date' => $datetime,
        );
        $this->db->where('id', $data['userId']);
        $user_update = $this->db->update('user', $update_data);
        return $user_update;
    }

    public function userDelete($id)
    {
        $datetime = date('Y-m-d H:i:s');
        $delete_data = array(
            'fdelete' => '1',
            'modified_date' => $datetime,
            'modified_by' =>  $this->username,
        );

        $this->db->where('id', $id);
        $delete = $this->db->update('user', $delete_data);
        return $delete;
    }
    
}
