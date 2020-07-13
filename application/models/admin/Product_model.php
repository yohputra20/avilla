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
            'slug' => str_replace(" ", "-", $data['product_title']),
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

            if($result['img_path']!=''){
                if (file_exists("./assets/admin/upload/product/" . $result['img_path'])) {
                    unlink("./assets/admin/upload/product/" . $result['img_path']);
                }
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
            'slug' => str_replace(" ", "-", $data['product_title']),
            'modifiedBy' =>  $this->username,
            'modifiedDate' => $datetime,
        );
        $this->db->where('id', $data['productId']);
        $product_update = $this->db->update('product', $update_data);
        return $product_update;
    }

    public function productGet($id)
    {
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

    private function _uploadexcel($file_name, $excel_name)
    {
        // $this->load->library('upload'); // Load librari upload

        $config['upload_path'] = './assets/upload/product/excel_spec/';
        $config['allowed_types'] = 'xlsx|csv|xls';
        $config['max_size']  = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = $file_name;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload($excel_name)) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('status' => '1', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('status' => '0', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    function readExcelSpecProductDetail($data)
    {
        $datetime = date('Y-m-d H:i:s');
        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('assets/upload/product/excel_spec' .  $data['filename'] . ".xlsx"); // Load file yang tadi diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);
        // echo json_encode(sizeof($sheet));die();
        if (sizeof($sheet) > 0) {
            $x = 2;
            foreach ($sheet as $row) {
                $model = '';
                $engine = '';
                $outputKvaPrp = '';
                $outputKvaEsp = '';
                $outputKwPrp = '';
                $outputKwEsp = '';
                $loadfuel='';
                $ot_l='';
                $ot_w='';
                $ot_h='';
                $ot_weight='';
                $st_l='';
                $st_w='';
                $st_h='';
                $st_weight='';
                $ismodel=false;
                $isop=false;
                $isst=false;

                if ($x > 2) {
                    if ($x == 3 && strtolower(trim($row['B'])) == 'model') { //kolomprovinsi
                        $ismodel=true;
                    }
                    if ($x == 3 && strtoupper(trim($row['I'])) == 'SILENT TYPE') { //kolomprovinsi
                        $isop=false;
                    }else if($x == 3 && strtoupper(trim($row['I'])) == 'OPEN TYPE'){
                        $isop=true;
                    }

                    if($x == 3 && strtoupper(trim($row['M'])) == 'SILENT TYPE'){
                        $isst=true;
                    }


                    if($x>6 &&  $isop==false && $ismodel==true && $isst=false){
                        $insert_data = array(
                            'productdetail_id'=>$data['productdetail_id'],
                            'model' => $row['B'],
                           'engine' => $row['C'],
                            'outputKvaPrp' => $row['D'],
                            'outputKvaEsp' => $row['E'],
                            'outputKwPrp' => $row['F'],
                            'outputKwEsp' => $row['G'],
                            'loadFuel'=> $row['H'],
                            'st_l' => $row['I'],
                            'st_w' => $row['J'],
                            'st_h' => $row['K'],
                            'st_weight' => $row['L'],
                            'fdelete' => '0',
                            'createdDate' => $datetime,
                            'createdBy' =>  $this->username,
                        );
                    }else if($x>6 &&  $isop==true && $ismodel==true && $isst=true){
                         $insert_data = array(
                            'productdetail_id'=>$data['productdetail_id'],
                            'model' => $row['B'],
                           'engine' => $row['C'],
                            'outputKvaPrp' => $row['D'],
                            'outputKvaEsp' => $row['E'],
                            'outputKwPrp' => $row['F'],
                            'outputKwEsp' => $row['G'],
                            'loadFuel'=> $row['H'],
                            'ot_l' => $row['I'],
                            'ot_w' => $row['J'],
                            'ot_h' => $row['K'],
                            'ot_weight' => $row['L'],
                            'st_l' => $row['M'],
                            'st_w' => $row['N'],
                            'st_h' => $row['O'],
                            'st_weight' => $row['P'],
                            'fdelete' => '0',
                            'createdDate' => $datetime,
                            'createdBy' =>  $this->username,
                        );
                    }else if($x>6 &&  $isop==true && $ismodel==true && $isst=false){
                        $insert_data = array(
                           'productdetail_id'=>$data['productdetail_id'],
                           'model' => $row['B'],
                          'engine' => $row['C'],
                           'outputKvaPrp' => $row['D'],
                           'outputKvaEsp' => $row['E'],
                           'outputKwPrp' => $row['F'],
                           'outputKwEsp' => $row['G'],
                           'loadFuel'=> $row['H'],
                           'ot_l' => $row['I'],
                           'ot_w' => $row['J'],
                           'ot_h' => $row['K'],
                           'ot_weight' => $row['L'],
                          
                           'fdelete' => '0',
                           'createdDate' => $datetime,
                           'createdBy' =>  $this->username,
                       );
                   }
                   $product_insert = $this->db->insert('productspecifikasi', $insert_data);
                    
                }
                $x++;
            }
            $balikan = array(
                'status' => 1,
                'msg' => 'Data berhasi di simpan'
            );
        } else {
            $balikan = array(
                'status' => 0,
                'msg' => 'File Excel tidak ada data'
            );
        }
        return  $balikan;
    }
    function getProdukDetail($id)
    {
        $this->db->select('*');
        $this->db->where('product_id', $id);
        $this->db->where('fdelete', '0');
        $this->db->order_by('modifiedDate', 'desc');
        $query = $this->db->get('productdetail');
        $result_array = $query->result_array();
        $json['aaData'] = array();
        if (sizeof($result_array) > 0) {
            $x = 1;
            foreach ($result_array as $row) {
                $row['path_img'] = $row['path_img'] != '' ? base_url() . "/assets/admin/upload/product/" . $row['path_img'] : base_url() . "/assets/admin/img/no_photo.jpg";
                $row['path_img'] = $row['path_logo'] != '' ? base_url() . "/assets/admin/upload/product/" . $row['path_logo'] : base_url() . "/assets/admin/img/no_photo.jpg";
                $btndetail = ' <button id="productspecdetail" class="btn btn-info margin5" data-value="' . $row['id'] . '">
                <i class="fa fa-list"></i>
            </button>';
                $btnedit = ' <button id="productDetailEdit" class="btn btn-warning margin5" data-value="' . $row['id'] . '">
                <i class="fa fa-edit"></i>
            </button>';
                $btndelete = ' <button id="productDetailDelete" class="btn btn-danger margin5" data-value="' . $row['id'] . '">
                <i class="fa fa-trash"></i>
            </button>';
                $json['aaData'][] = array(
                    $x,
                    $row['title'],
                    $row['slug'],
                    '<img id="preview_image_list" alt="image preview" width="400" src="' . $row['path_img'] . '" />',
                    '<img id="preview_logo_list" alt="image preview" width="200" src="' . $row['path_logo'] . '" />',
                    $btndetail . " " . $btnedit . " " . $btndelete
                );
                $x++;
            }
        }



        return $json;
    }

    function insertProductDetail($data){
        $datetime = date('Y-m-d H:i:s');

        if (!empty($_FILES['image_source_product']['name'])) {
            $image ='assets/admin/upload/product/'. $this->_uploadImage('product' . '_' . uniqid(), 'image_source_product');
            if ($image == '0') {
                return '0';
            }
        } else {
            $image = $data['product_old_image'];
        }

        if (!empty($_FILES['image_source_productlogo']['name'])) {
            $imagelogo = $this->_uploadImage('logo' . '_' . uniqid(), 'image_source_product');
            if ($imagelogo == '0') {
                return '0';
            }
        } else {
            $imagelogo = $data['productlogo_old_image'];
        }
        // echo json_encode($_FILES['excel_product_spec']);die();
        if (!empty($_FILES['excel_product_spec']['name'])) {
            $excelname= str_replace(" ", "_", $data['product_title']). '_' .uniqid();
            $excel =  $this->_uploadexcel($excelname, 'excel_product_spec');
            if ($excel == '0') {
                return '0';
            }
        } else {
            $excel = '';
            $excelname='';
        }


        $insert_data = array(
            'product_id'=>$data['productId'],
            'title' => $data['product_title'],
            'meta_title' => $data['meta_title'],
            'path_img' => $image,
            'path_logo' => $imagelogo,
            'description' => $data['descdetail'],
            'slug' => str_replace(" ", "-", $data['product_title']),
            'path_spec'=>$excel,
            'fdelete' => '0',
            'createdDate' => $datetime,
            'createdBy' =>  $this->username,
        );
        echo json_encode($insert_data);die();
        $product_insert = $this->db->insert('productdetail', $insert_data);
        $insert_id = $this->db->insert_id();  
        if($product_insert==1 && $excelname!='' )  {
            $data['filename']=$excelname;
            $data['productdetail_id']=$insert_id;
            $readexcel= $this->readExcelSpecProductDetail($data);
            $balikan=$readexcel;
        }else{
            $balikan = array(
                'status' => 0,
                'msg' => 'File Excel tidak di upload'
            );
        } 
        
        return $balikan;
    }
}
