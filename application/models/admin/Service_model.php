<?php

class Service_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->username = $this->session->userdata('username');
    }

    public function serviceData()
    {
        $this->db->select('*');
        $this->db->where('fdelete', '0');
        $this->db->order_by('modifiedDate', 'desc');
        $query = $this->db->get('service');
        $result_array = $query->result_array();

        return $result_array;
    }

    public function serviceAdd($data)
    {
        $datetime = date('Y-m-d H:i:s');

        if (!empty($_FILES['image_source_service']['name'])) {
            $image = $this->_uploadImage('service' . '_' . uniqid(), 'image_source_service');
            if ($image == '0') {
                return '0';
            }
        } else {
            $image = $data['service_old_image'];
        }
        $insert_data = array(
            'title' => $data['service_title'],
            'meta_title' => $data['meta_title'],
            'img_path' => $image,
            'meta_description' => $data['meta_desc'],
            'description' => $data['service_desc'],
            'fdelete' => '0',
            'createdDate' => $datetime,
            'createdBy' =>  $this->username,


        );
        $service_insert = $this->db->insert('service', $insert_data);
        return $service_insert;
    }

    public function serviceGet($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('service');
        $result = $query->row_array();

        return $result;
    }

    public function serviceEdit($data)
    {
        $datetime = date('Y-m-d H:i:s');
        if (!empty($_FILES['image_source_service']['name'])) {
            $this->db->select('*');
            $this->db->where('id', $data['serviceId']);
            $query = $this->db->get('service');
            $result = $query->row_array();
            
            if (file_exists("./assets/admin/upload/service/" . $result['img_path'])) {
                unlink("./assets/admin/upload/service/" . $result['img_path']);
            }

            $image = $this->_uploadImage('service' . '_' . uniqid(), 'image_source_service');
            if ($image == '0') {
                return '0';
            }
        } else {
            $image = $data['service_old_image'];
        }
        $update_data = array(
            'title' => $data['service_title'],
            'meta_title' => $data['meta_title'],
            'meta_description' => $data['meta_desc'],
            'img_path' => $image,
            'description' => $data['service_desc'],
            'modifiedBy' =>  $this->username,
            'modifiedDate' => $datetime,
        );
        $this->db->where('id', $data['serviceId']);
        $service_update = $this->db->update('service', $update_data);
        return $service_update;
    }

    public function serviceDelete($id)
    {
        $datetime = date('Y-m-d H:i:s');
        $delete_data = array(
            'fdelete' => '1',
            'modifiedDate' => $datetime,
            'modifiedBy' =>  $this->username,
        );

        $this->db->where('id', $id);
        $delete = $this->db->update('service', $delete_data);
        return $delete;
    }
    private function _uploadImage($file_name, $image_name)
    {
        $config['upload_path']          = './assets/admin/upload/service/';
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
        } else {
            echo $this->upload->display_errors();
            die(0);
        }
        // return '';
    }
}
