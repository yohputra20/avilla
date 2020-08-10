<?php

class Client_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->username = $this->session->userdata('username');
    }

    public function clientData()
    {
        $this->db->select('*');
        $this->db->where('fdelete', '0');
        $this->db->order_by('order_by', 'asc');
        $query = $this->db->get('client');
        $result_array = $query->result_array();

        return $result_array;
    }

    public function clientAdd($data)
    {
        $datetime = date('Y-m-d H:i:s');

        if (!empty($_FILES['image_source_client']['name'])) {
            $image = $this->_uploadImage('client' . '_' . uniqid(), 'image_source_client');
            if ($image == '0') {
                return '0';
            }
        } else {
            $image = $data['client_old_image'];
        }
        $insert_data = array(
            'title' => $data['client_title'],
            'alt' => $data['meta_title'],
            'logo_path' => $image,
            'meta_description' => $data['meta_desc'],
            'description' => $data['client_desc'],
            'order_by' => $data['client_order'],
            'fdelete' => '0',
            'createdDate' => $datetime,
            'createdBy' => $this->username,

        );
        $client_insert = $this->db->insert('client', $insert_data);
        return $client_insert;
    }

    public function clientGet($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('client');
        $result = $query->row_array();

        return $result;
    }

    public function clientEdit($data)
    {
        $datetime = date('Y-m-d H:i:s');
        if (!empty($_FILES['image_source_client']['name'])) {
            $this->db->select('*');
            $this->db->where('id', $data['clientId']);
            $query = $this->db->get('client');
            $result = $query->row_array();

            if (file_exists("./assets/admin/upload/client/" . $result['logo_path'])) {
                unlink("./assets/admin/upload/client/" . $result['logo_path']);
            }

            $image = $this->_uploadImage('client' . '_' . uniqid(), 'image_source_client');
            if ($image == '0') {
                return '0';
            }
        } else {
            $image = $data['client_old_image'];
        }
        $update_data = array(
            'title' => $data['client_title'],
            'alt' => $data['meta_title'],
            'meta_description' => $data['meta_desc'],
            'logo_path' => $image,
            'order_by' => $data['client_order'],
            'description' => $data['client_desc'],
            'modifiedBy' => $this->username,
            'modifiedDate' => $datetime,
        );
        $this->db->where('id', $data['clientId']);
        $client_update = $this->db->update('client', $update_data);
        return $client_update;
    }

    public function clientDelete($id)
    {
        $datetime = date('Y-m-d H:i:s');
        $delete_data = array(
            'fdelete' => '1',
            'modifiedDate' => $datetime,
            'modifiedBy' => $this->username,
        );

        $this->db->where('id', $id);
        $delete = $this->db->update('client', $delete_data);
        return $delete;
    }
    private function _uploadImage($file_name, $image_name)
    {
        $config['upload_path'] = './assets/admin/upload/client/';
        $config['allowed_types'] = 'jpg|png|jpeg|JPEG|JPG|PNG';
        $config['file_name'] = $file_name;
        $config['overwrite'] = true;
        $config['max_size'] = 10240; // 10MB
        $config['min_width']            = 225;
        $config['min_height']           = 225;
        // echo($image_name);die(0);

        $this->load->library('upload', $config);
        if ($this->upload->do_upload($image_name)) {
            $gbr = $this->upload->data();

            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/admin/upload/client/' . $gbr['file_name'];
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = true;
            $config['quality'] = '80%';
            $config['width'] = 225;
            $config['height'] = 225;
            $config['new_image'] = './assets/admin/upload/client/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            return $this->upload->data('file_name');
        } else {
            echo $this->upload->display_errors();
            die(0);
        }
        // return '';
    }
}
