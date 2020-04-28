<?php

class News_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function newsData(){
        $this->db->select('*');
        $this->db->where('fdelete', '0');
        $this->db->order_by('modified_date','desc');
        $query = $this->db->get('news');
        $result_array = $query->result_array();

        return $result_array;
    }

    public function newsAdd($data){
        $datetime = date('Y-m-d H:i:s');

        if (!empty($_FILES['image_source_news']['name'])) {
            $image = $this->_uploadImage('news'.'_'.uniqid(), 'image_source_news');
            if ($image == '0') {
                return '0';
            }    
        }        
        // echo json_encode ($image);die(0);
        
        $insert_data =array(
            'title' => $data['news_title'],
            'image' => $image,
            'description' => $data['news_desc'],
            'fdelete' => '0',
            'created_date' => $datetime,
            'created_by' => '',
            'modified_date' => $datetime,
            'modified_by' => ''
        );
        $news_insert = $this->db->insert('news', $insert_data);
        return $news_insert;
    }

    public function newsGet($id){
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('news');
        $result = $query->row_array();
        // echo json_encode ($result_array);die(0);
        return $result;
    }

    public function newsEdit($data){
        $datetime = date('Y-m-d H:i:s');

        if (!empty($_FILES['image_source_news']['name'])) {
            $image = $this->_uploadImage('news'.'_'.uniqid(), 'image_source_news');
            if ($image == '0') {
                return '0';
            }    
        }else {
            $image = $data['news_old_image'];
        }
        // echo $image;die(0);
        $update_data =array(
            'title' => $data['news_title'],
            'image' => $image,
            'description' => $data['news_desc'],
            'modified_date' => $datetime,
        );
        $this->db->where('id', $data['newsId']);
        $news_update = $this->db->update('news', $update_data);
        return $news_update;
    }

    public function newsDelete($id){
        $datetime = date('Y-m-d H:i:s');
        $delete_data =array(            
            'fdelete' => '1',
            'modified_date' => $datetime
        );
        // $this->db->set('fdelete', '1', FALSE);
        $this->db->where('id', $id);
        $delete = $this->db->update('news', $delete_data);
        return $delete;
    }

    private function _uploadImage($file_name, $image_name){
        $config['upload_path']          = './assets/admin/upload/news/';
        $config['allowed_types']        = 'jpg|png|jpeg|JPEG|JPG|PNG';
        $config['file_name']            = $file_name;
        $config['overwrite']            = true;
        $config['max_size']             = 10240; // 10MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);        
        if ($this->upload->do_upload($image_name)) {
            return $this->upload->data('file_name');
        }else{
            // echo $this->upload->display_errors();die(0);
            return '0';
        }
        // return '';
    }

    // public function newsDelete($id){
    //     $this->db->where('id', $id);
    //     $delete = $this->db->delete('news');
    //     // echo $delete; die(0);
    //     return $delete;
    // }        
}
?>