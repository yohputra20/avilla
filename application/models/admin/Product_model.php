<?php

class Product_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->username = $this->session->userdata('username');
    }

    public function ProductData()
    {
        $this->db->select('*');
        $this->db->where('fdelete', '0');
        $this->db->order_by('modifiedDate', 'desc');
        $query = $this->db->get('product');
        $result_array = $query->result_array();
              

        return $result_array;
    }

    public function productAdd($data)
    {
        $datetime = date('Y-m-d H:i:s');

        if (!empty($_FILES['image_source_product']['name'])) {
            $image = $this->_uploadImage('product' . '_' . uniqid(), 'image_source_product');
            if ($image == '0') {
                return '0';
            }
        } else {
            $image = $data['product_old_image'];
        }
        $insert_data = array(
            'title' => $data['product_title'],
            'alt' => $data['meta_title'],
            'img_path' => $image,
            'meta_description' => $data['meta_desc'],
            'description' => $data['product_desc'],
            'fdelete' => '0',
            'createdDate' => $datetime,
            'createdBy' =>  $this->username,
        );
        $product_insert = $this->db->insert('product', $insert_data);

        return $product_insert;
    }

    public function productEdit($data)
    {
        $datetime = date('Y-m-d H:i:s');
        if (!empty($_FILES['image_source_product']['name'])) {
            $this->db->select('*');
            $this->db->where('id', $data['productId']);
            $query = $this->db->get('product');
            $result = $query->row_array();
            
            if (file_exists("./assets/admin/upload/product/" . $result['img_path'])) {
                unlink("./assets/admin/upload/product/" . $result['img_path']);
            }

            $image = $this->_uploadImage('product' . '_' . uniqid(), 'image_source_product');
            if ($image == '0') {
                return '0';
            }
        } else {
            $image = $data['product_old_image'];
        }
        $update_data = array(
            'title' => $data['product_title'],
            'alt' => $data['meta_title'],
            'img_path' => $image,
            'meta_description' => $data['meta_desc'],
            'description' => $data['product_desc'],
            'modifiedBy' =>  $this->username,
            'modifiedDate' => $datetime,
        );
        $this->db->where('id', $data['productId']);
        $product_update = $this->db->update('product', $update_data);
        return $product_update;
    }

    public function productGet($id){
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('product');
        $result = $query->row_array();

        return $result;
    }

    public function productDelete($id)
    {
        $datetime = date('Y-m-d H:i:s');
        $delete_data = array(
            'fdelete' => '1',
            'modifiedDate' => $datetime,
            'modifiedBy' =>  $this->username,
        );
       
        $this->db->where('id', $id);
        $delete = $this->db->update('product', $delete_data);

       
        return $delete;
    }

    private function _uploadImage($file_name, $image_name)
    {
        $config['upload_path']          = './assets/admin/upload/product/';
        $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG|JPEG';
        $config['file_name']            = $file_name;
        $config['overwrite']            = false;
        $config['max_size']             = 10240; // 10MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload($image_name)) {
            return $this->upload->data('file_name');
        } else {

            return '0';
        }

        // return '';
    }
}
