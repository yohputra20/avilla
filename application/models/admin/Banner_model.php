<?php

class banner_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function bannerData(){
        $this->db->select('*');
        $this->db->where('fdelete', '0');
        $this->db->order_by('modifiedDate','desc');
        $query = $this->db->get('banner');
        $result_array = $query->result_array();

        return $result_array;
    }

    public function bannerAdd($data){
        $datetime = date('Y-m-d H:i:s');
        
        if (!empty($_FILES['image_source_banner']['name'])) {
            $image = $this->_uploadImage('banner'.'_'.uniqid(), 'image_source_banner');
            if ($image == '0') {
                return '0';
            }    
            
        }        
        // echo json_encode ($image);die(0);
        
        $insert_data =array(
            'img_path' => $image,
            'description' => $data['banner_desc'],
            'orderby' => $data['orderby'],
            'fdelete' => '0',
            'createdDate' => $datetime,
            'createdBy' => '',
            'modifiedDate' => $datetime,
            'modifiedBy' => ''
        );
        $banner_insert = $this->db->insert('banner', $insert_data);
        return $banner_insert;
    }

    public function bannerGet($id){
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('banner');
        $result = $query->row_array();
        // echo json_encode ($result_array);die(0);
        return $result;
    }

    public function bannerEdit($data){
        $datetime = date('Y-m-d H:i:s');

        if (!empty($_FILES['image_source_banner']['name'])) {
            $image = $this->_uploadImage('banner'.'_'.uniqid(), 'image_source_banner');
            if ($image == '0') {
                return '0';
            }
        }else {
            $image = $data['banner_old_image'];
        }
        // echo $image;die(0);
        $update_data =array(
            'img_path' => $image,
            'description' => $data['banner_desc'],
            'orderby' => $data['orderby'],
            'modifiedDate' => $datetime,
        );
        $this->db->where('id', $data['bannerId']);
        $banner_update = $this->db->update('banner', $update_data);
        return $banner_update;
    }

    public function bannerDelete($id){
        $datetime = date('Y-m-d H:i:s');
        $delete_data =array(            
            'fdelete' => '1',
            'modifiedDate' => $datetime
        );
        // $this->db->set('fdelete', '1', FALSE);
        $this->db->where('id', $id);
        $delete = $this->db->update('banner', $delete_data);
        return $delete;
    }

    private function _uploadImage($file_name, $image_name){
        $config['upload_path']          = './assets/admin/upload/banner/';
        $config['allowed_types']        = 'jpg|png|jpeg|JPEG|JPG|PNG';
        $config['file_name']            = $file_name;
        $config['overwrite']            = true;
        $config['max_size']             = 10240; // 10MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        // echo($image_name);die(0);

        $this->load->library('upload', $config);        
        if ($this->upload->do_upload($image_name)) {
            return $this->upload->data('file_name');
        }else{
            // echo $this->upload->display_errors();die(0);
            return '0';
        }
        // return '';
    }

    // public function bannerDelete($id){
    //     $this->db->where('id', $id);
    //     $delete = $this->db->delete('banner');
    //     // echo $delete; die(0);
    //     return $delete;
    // }        
}
?>