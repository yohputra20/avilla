<?php

class banner_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->username = $this->session->userdata('username');
    }

    public function bannerData()
    {
        $this->db->select('*');
        $this->db->where('fdelete', '0');
        $this->db->order_by('modifiedDate', 'desc');
        $query = $this->db->get('banner');
        $result_array = $query->result_array();

        return $result_array;
    }

    public function bannerAdd($data)
    {
        $datetime = date('Y-m-d H:i:s');

        if (!empty($_FILES['image_source_banner']['name'])) {
            $image = $this->_uploadImage('banner' . '_' . uniqid(), 'image_source_banner');
            if ($image == '0') {
                return '0';
            }

        }

        $insert_data = array(
            'img_path' => $image,
            'description' => $data['banner_desc'],
            'orderby' => $data['orderby'],
            'fdelete' => '0',
            'createdDate' => $datetime,
            'createdBy' => $this->username,
            'modifiedDate' => $datetime,
            'modifiedBy' => $this->username,
        );
        $banner_insert = $this->db->insert('banner', $insert_data);
        return $banner_insert;
    }

    public function bannerGet($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('banner');
        $result = $query->row_array();

        return $result;
    }

    public function bannerEdit($data)
    {
        $datetime = date('Y-m-d H:i:s');

        if (!empty($_FILES['image_source_banner']['name'])) {
            $this->db->select('*');
            $this->db->where('id', $data['bannerId']);
            $query = $this->db->get('banner');
            $result = $query->row_array();

            if (file_exists("./assets/admin/upload/banner/" . $result['img_path'])) {
                unlink("./assets/admin/upload/banner/" . $result['img_path']);
            }

            $image = $this->_uploadImage('banner' . '_' . uniqid(), 'image_source_banner');
            if ($image == '0') {
                return '0';
            }
        } else {
            $image = $data['banner_old_image'];
        }

        $update_data = array(
            'img_path' => $image,
            'description' => $data['banner_desc'],
            'orderby' => $data['orderby'],
            'modifiedBy' => $this->username,
            'modifiedDate' => $datetime,
        );
        $this->db->where('id', $data['bannerId']);
        $banner_update = $this->db->update('banner', $update_data);
        return $banner_update;
    }

    public function bannerDelete($id)
    {
        $datetime = date('Y-m-d H:i:s');
        $delete_data = array(
            'fdelete' => '1',
            'modifiedDate' => $datetime,
        );

        $this->db->where('id', $id);
        $delete = $this->db->update('banner', $delete_data);
        return $delete;
    }

    private function _uploadImage($file_name, $image_name)
    {
        $config['upload_path'] = './assets/admin/upload/banner/';
        $config['allowed_types'] = 'jpg|png|jpeg|JPEG|JPG|PNG';
        $config['file_name'] = $file_name;
        $config['overwrite'] = true;
        $config['max_size'] = 10240; // 10MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload($image_name)) {
            $gbr = $this->upload->data();

            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/admin/upload/banner/' . $gbr['file_name'];
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '50%';
            // $config['width'] = 600;
            // $config['height'] = 400;
            $config['new_image'] = './assets/admin/upload/banner/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();


            return $this->upload->data('file_name');
        } else {

            return '0';
        }

    }
}
