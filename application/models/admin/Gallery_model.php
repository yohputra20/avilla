<?php

class Gallery_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function galleryData(){
        $this->db->select('*');
        $this->db->where('fdelete', '0');
        $this->db->order_by('modified_date','desc');
        $query = $this->db->get('gallery');
        $result_array = $query->result_array();

        return $result_array;
    }

    public function galleryAdd($data){
        $datetime = date('Y-m-d H:i:s');
        
        if (!empty($_FILES['image_source_gallery']['name'])) {
            $image = $this->_uploadImage('gallery'.'_'.uniqid(), 'image_source_gallery');
            if ($image == '0') {
                return '0';
            }    
            
        }        
        // echo json_encode ($image);die(0);
        
        $insert_data =array(
            'title' => $data['gallery_title'],
            'image' => $image,
            'description' => $data['gallery_desc'],
            'fdelete' => '0',
            'created_date' => $datetime,
            'created_by' => '',
            'modified_date' => $datetime,
            'modified_by' => ''
        );
        $gallery_insert = $this->db->insert('gallery', $insert_data);
        return $gallery_insert;
    }

    public function galleryGet($id){
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('gallery');
        $result = $query->row_array();
        // echo json_encode ($result_array);die(0);
        return $result;
    }

    public function galleryEdit($data){
        $datetime = date('Y-m-d H:i:s');

        if (!empty($_FILES['image_source_gallery']['name'])) {
            $image = $this->_uploadImage('gallery'.'_'.uniqid(), 'image_source_gallery');
            if ($image == '0') {
                return '0';
            }
        }else {
            $image = $data['gallery_old_image'];
        }
        // echo $image;die(0);
        $update_data =array(
            'title' => $data['gallery_title'],
            'image' => $image,
            'description' => $data['gallery_desc'],
            'modified_date' => $datetime,
        );
        $this->db->where('id', $data['galleryId']);
        $gallery_update = $this->db->update('gallery', $update_data);
        return $gallery_update;
    }

    public function galleryDelete($id){
        $datetime = date('Y-m-d H:i:s');
        $delete_data =array(            
            'fdelete' => '1',
            'modified_date' => $datetime
        );
        // $this->db->set('fdelete', '1', FALSE);
        $this->db->where('id', $id);
        $delete = $this->db->update('gallery', $delete_data);
        return $delete;
    }

    private function _uploadImage($file_name, $image_name){
        $config['upload_path']          = './assets/admin/upload/gallery/';
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

    // public function galleryDelete($id){
    //     $this->db->where('id', $id);
    //     $delete = $this->db->delete('gallery');
    //     // echo $delete; die(0);
    //     return $delete;
    // }        
}
?>