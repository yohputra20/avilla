<?php

class Comissions_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function comissionsData(){
        $this->db->select('comissions.*, comissions_image.image');
        $this->db->from('comissions, comissions_image');
        $this->db->where('comissions_image.id_comissions = comissions.id');
        $this->db->where('comissions.fdelete', '0');
        $this->db->where('comissions_image.status', '1'); // your where with variable
        $this->db->order_by('comissions.modified_date','desc');
        $query = $this->db->get();
        $result_array = $query->result_array();  
        // echo json_encode($result_array);die(0);         

        return $result_array;
    }

    public function comissionsAdd($data){
        $datetime = date('Y-m-d H:i:s');
        
        // $image = $this->_uploadImage('comissions'.'_'.uniqid(), 'image_source_comissions');
        $imgsource = array();
        $img = array();
        $countfiles = count($_FILES);
        $imgthumb = "";
        $fileName = array();
        // print_r($countfiles);
        // print_r($_FILES[0]);die(0);
        
        // foreach($_FILES as $key => $value) {
        //     // echo $key;
        //     $fileName = 'comissions'.'_'.uniqid();
        //     if ($data['selected_image'] == $key) {
        //         $gambarthumb = $this->_uploadImage($fileName, $key);
        //         $imgthumb = $gambar;
        //         $img[] = $gambarthumb;
        //     }else {
        //         $gambar = $this->_uploadImage($fileName, $key);
        //         $img[] = $gambar;
        //     }
        // }

        foreach($_FILES as $key => $value) {
            $imgsource[] = $key;
        }
        // echo json_encode($imgsource);die(0);
        for ($i=0; $i < sizeof($imgsource); $i++) {
            if (!empty($_FILES[$imgsource[$i]]['name'])) {
                $fileName = 'comissions'.$i.'_'.uniqid();
                $gambar = $this->_uploadImage($fileName, $imgsource[$i]);
                if ($gambar == '0') {
                    return '0';
                }else {
                    if ($data['selected_image'] == $imgsource[$i]) {
                        $imgthumb = $gambar;
                    }            
                    $img[] = $gambar;
                }                
            }            
        }

        // echo json_encode($img);die(0);

        $insert_data =array(
            'title' => $data['comissions_title'],
            'description' => $data['comissions_desc'],
            'fdelete' => '0',
            'created_date' => $datetime,
            'created_by' => '',
            'modified_date' => $datetime,
            'modified_by' => ''
        );
        $comissions_insert = $this->db->insert('comissions', $insert_data);
        $insert_id = $this->db->insert_id();

        if ($comissions_insert == '1') {
            for ($i=0; $i < sizeof($img); $i++) { 
                if ($imgthumb == $img[$i]) {
                    $status = '1';
                }else {
                    $status = '0';
                }

                $insert_data_image =array(
                    'id_comissions' => $insert_id,
                    'image' => $img[$i],
                    'status' => $status,
                    'fdelete' => '0',
                    'created_date' => $datetime,
                    'created_by' => '',
                    'modified_date' => $datetime,
                    'modified_by' => ''
                );
                $comissions_insert_image = $this->db->insert('comissions_image', $insert_data_image);
            }            
            return $comissions_insert_image;
        }       
    }

    public function comissionsEdit($data){
        $datetime = date('Y-m-d H:i:s');

        $imgsource = array();
        $img = array();
        $imgupload = array();
        $countfiles = count($_FILES);
        $imgthumb = "";
        $fileName = array();      
        
        // Imagesource [] <= untuk menampung name dari input file.
        foreach($_FILES as $key => $value) {
            $imgsource[] = $key;
        }
        // echo json_encode($imgsource);die(0);

        // kemudian di looping dan di kategorikan lagi mana image yang di edit dan mana yang upload baru.
        for ($i=0; $i < sizeof($imgsource); $i++) {
            if ($imgsource[$i] != 'image_source_comissions_old'.$i) {
                if (!empty($_FILES[$imgsource[$i]]['name'])) {
                    $fileName = 'comissions'.'_'.uniqid();
                    $gambar = $this->_uploadImage($fileName, $imgsource[$i]);
                    if ($gambar == '0') {
                        return '0';
                    } else {
                        $imgupload[] = $gambar;
                        if ($data['selected_image'] == $imgsource[$i]) {
                            $imgthumb = $gambar; // mencari image selected.
                        }  
                    }
                }                
            }else {
                if ($data['selected_image'] == 'image_source_comissions'.$i) {
                    $imgthumb = $data['image_name'.$i]; // mencari image selected.
                }  
                $img[] = $data['image_name'.$i];
            }            
        }
        // echo json_encode($imgupload);die(0);        
        // echo $image;die(0);
        $update_data =array(
            'title' => $data['comissions_title'],
            'description' => $data['comissions_desc'],
            'modified_date' => $datetime,
        );
        $this->db->where('id', $data['comissionsId']);
        $comissions_update = $this->db->update('comissions', $update_data);

        if ($comissions_update == '1') {
            if ($img != null) {
                for ($i=0; $i < sizeof($img); $i++) {
                    if ($imgthumb == $img[$i]) {
                        $status = '1';
                    }else {
                        $status = '0';
                    }
                    $update_data_image =array(
                        // 'id_comissions' => $data['image_id'.$i],
                        'image' => $img[$i],
                        'status' => $status,
                        'fdelete' => $data['image_fdelete'.$i],
                        'created_date' => '',
                        'created_by' => '',
                        'modified_date' => $datetime,
                        'modified_by' => ''
                    );

                    $this->db->where('id', $data['image_id'.$i]);
                    $comissions_update_image = $this->db->update('comissions_image', $update_data_image);
                 }
            }
            if($imgupload != null){
                for ($i=0; $i < sizeof($imgupload); $i++) {
                    if ($imgthumb == $imgupload[$i]) {
                        $status = '1';
                    }else {
                        $status = '0';
                    }
                    $insert_data_image =array(
                        'id_comissions' => $data['comissionsId'],
                        'image' => $imgupload[$i],
                        'status' => $status,
                        'fdelete' => '0',
                        'created_date' => $datetime,
                        'created_by' => '',
                        'modified_date' => '',
                        'modified_by' => ''
                    );
                    $comissions_insert_image = $this->db->insert('comissions_image', $insert_data_image);
                 }
            }          
            
        }

        if ($img != null ) {
            return $comissions_update_image;
        }elseif ($imgupload != null) {
            return $comissions_insert_image;
        }else {
            return '0';
        }

        // echo json_encode($update_data_image);die(0);    
        // return $comissions_update;
    }

    // public function comissionsGet($id){
    //     // $this->db->select('*');
    //     // $this->db->where('id', $id);
    //     // $query = $this->db->get('comissions');
    //     // $result = $query->row_array();
    //     // return $result;
        
    //     $this->db->select('*');
    //     $this->db->from('comissions');
    //     // $this->db->join('comissions_image', 'comissions.id = comissions_image.id_comissions');
    //     $this->db->where('comissions.id',$id);
    //     // $this->db->where('comissions_image.fdelete','0');
    //     $query = $this->db->get();
    //     $result = $query->result_array();

    //     foreach ($result as $res => $value) {
    //         $this->db->where('comissions_image.id_comissions', $value['id']);
    //         $image_query = $this->db->get('comissions_image');
    //         $image_result = $image_query->result_array();
    //         $result[$res]['image'] = $image_result;
    //     }
    //     // echo json_encode ($result);die(0);
    //     return $result;
    // }

    public function comissionsView($id){
        // $this->db->select('*');  
        // $this->db->from('comissions');      
        // $this->db->where('id', $id);  
        // $query = $this->db->get();
        // $result_comissions = $query->row_array();

        // $this->db->select('*');  
        // $this->db->from('comissions_image');      
        // $this->db->where('id_comissions', $id);               
        // $this->db->where('fdelete', '0'); 
        // $query = $this->db->get();
        // $result_image = $query->result_array();

        // $result_array = array(
        //     'id' => $result_comissions['id'],
        //     'title' => $result_comissions['title'],
        //     'description' => $result_comissions['description'],
        //     'image' => $result_image
        // );

        $this->db->select('*');
        $this->db->from('comissions');
        // $this->db->join('comissions_image', 'comissions.id = comissions_image.id_comissions');
        $this->db->where('comissions.id',$id);
        // $this->db->where('comissions_image.fdelete','0');
        $query = $this->db->get();
        $result = $query->result_array();

        foreach ($result as $res => $value) {
            $this->db->where('comissions_image.id_comissions', $value['id']);
            $this->db->where('comissions_image.fdelete', '0');
            $image_query = $this->db->get('comissions_image');
            $image_result = $image_query->result_array();
            $result[$res]['image'] = $image_result;
        }
        // echo json_encode ($result);die(0);
        return $result;
    }

   

    public function comissionsDelete($id){
        $datetime = date('Y-m-d H:i:s');
        $delete_data =array(            
            'fdelete' => '1',
            'modified_date' => $datetime
        );
        // $this->db->set('fdelete', '1', FALSE);
        $this->db->where('id', $id);
        $delete = $this->db->update('comissions', $delete_data);

        if ($delete == '1') {
            $delete_image =array(            
                'fdelete' => '1',
                'modified_date' => $datetime
            );
            // $this->db->set('fdelete', '1', FALSE);
            $this->db->where('id_comissions', $id);
            $deleteimage = $this->db->update('comissions_image', $delete_image);
        }
        return $deleteimage;
    }

    private function _uploadImage($file_name, $image_name){
        $config['upload_path']          = './assets/admin/upload/comissions/';
        $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG|JPEG';
        $config['file_name']            = $file_name;
        $config['overwrite']            = false;
        $config['max_size']             = 10240; // 10MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);        
        if ($this->upload->do_upload($image_name)) {
            return $this->upload->data('file_name');
        }else {
            // echo $this->upload->display_errors();
            return '0';
        }
        
        // return '';
    }
}
?>