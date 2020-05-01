<?php

class ContactUs_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->username = $this->session->userdata('username');
    }

    public function contactusData()
    {
        $this->db->select('*');
        $this->db->where('fdelete', '0');
        $this->db->order_by('modifiedDate', 'desc');
        $query = $this->db->get('contactus');
        $result_array = $query->row_array();

        return $result_array;
    }

    public function contactusAdd($data)
    {
        $datetime = date('Y-m-d H:i:s');

       
        $insert_data = array(
            'title' => $data['contactus_title'],
            'description' => $data['contactus_desc'],
            'fdelete' => '0',
            'createdDate' => $datetime,
            'createdBy' =>  $this->username,
        );
        $contactus_insert = $this->db->insert('contactus', $insert_data);
        return $contactus_insert;
    }

    public function contactusGet($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('contactus');
        $result = $query->row_array();

        return $result;
    }

    public function contactusEdit($data)
    {
        $datetime = date('Y-m-d H:i:s');
       
        $update_data = array(
            'title' => $data['contactus_title'],
            'description' => $data['contactus_desc'],
            'modifiedBy' =>  $this->username,
            'modifiedDate' => $datetime,
        );
        $this->db->where('id', $data['contactusId']);
        $contactus_update = $this->db->update('contactus', $update_data);
        return $contactus_update;
    }

    public function contactusDelete($id)
    {
        $datetime = date('Y-m-d H:i:s');
        $delete_data = array(
            'fdelete' => '1',
            'modifiedDate' => $datetime,
            'modifiedBy' =>  $this->username,
        );

        $this->db->where('id', $id);
        $delete = $this->db->update('contactus', $delete_data);
        return $delete;
    }
   
}
