<?php

class About_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function aboutData(){
        $this->db->select('*');
        $this->db->where('fdelete', '0');
        $query = $this->db->get('about');
        $result_array = $query->result_array();

        return $result_array;
    }

    public function aboutAdd($data){
        $datetime = date('Y-m-d H:i:s');
        
        
        $insert_data =array(
            'title' => $data['about_title'],
            'description' => $data['about_desc'],
            'fdelete' => '0',
            'created_date' => $datetime,
            'created_by' => '',
            'modified_date' => $datetime,
            'modified_by' => ''
        );
        $about_insert = $this->db->insert('about', $insert_data);
        return $about_insert;
    }

    public function aboutGet($id){
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('about');
        $result = $query->row_array();
        // echo json_encode ($result_array);die(0);
        return $result;
    }

    public function aboutEdit($data){
        $datetime = date('Y-m-d H:i:s');

        $update_data =array(
            'title' => $data['about_title'],
            'description' => $data['about_desc'],
            'modified_date' => $datetime,
        );
        $this->db->where('id', $data['aboutId']);
        $about_update = $this->db->update('about', $update_data);
        return $about_update;
    }

    public function aboutDelete($id){
        $datetime = date('Y-m-d H:i:s');
        $delete_data =array(            
            'fdelete' => '1',
            'modified_date' => $datetime
        );
        // $this->db->set('fdelete', '1', FALSE);
        $this->db->where('id', $id);
        $delete = $this->db->update('about', $delete_data);
        return $delete;
    }

    // public function aboutDelete($id){
    //     $this->db->where('id', $id);
    //     $delete = $this->db->delete('about');
    //     // echo $delete; die(0);
    //     return $delete;
    // }        
}
?>