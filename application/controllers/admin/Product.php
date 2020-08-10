<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //header (seperti #include<stdio.h> pada c
        $this->load->library('session');
        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->model('admin/product_model');

        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('admin'));
        }
    }

    public function index()
    {

        $product_data['query'] = $this->product_model->productData();
        $content = array(
            'username' => $this->session->userdata('username'),
            'product_data' => $product_data,
        );
        $content['data_content'] = "admin/product";
        $content['content_modal'] = "admin/modal/product_modal";

        $this->load->view('admin/header', $content);
    }
    public function add_product()
    {
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }

        $productAdd = $this->product_model->productAdd($data);
        if ($productAdd == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $productAdd,
            ];
        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => [],
            ];
        }
        echo json_encode($balikan);
    }
    public function get_product($id)
    {
        $product_data = $this->product_model->productGet($id);
        if (sizeof($product_data) != 0) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $product_data,
            ];
        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => [],
            ];
        }
        echo json_encode($balikan);

    }
    public function edit_product()
    {
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }

        $productEdit = $this->product_model->productEdit($data);
        if ($productEdit == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $productEdit,
            ];
        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => [],
            ];
        }
        echo json_encode($balikan);
    }

    public function delete_product($id)
    {
        $delete = $this->product_model->productDelete($id);

        if ($delete == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $delete,
            ];
        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => [],
            ];
        }
        echo json_encode($balikan);
    }

    public function listprodukdetailview($id)
    {
        // $getdetail['query'] = $this->product_model->getProdukDetail($id);
        $content = array(
            'username' => $this->session->userdata('username'),
            // 'detaildata' => $getdetail
        );
        $content['product_id'] = $id;
        // $content['data_content'] =  $this->load->view("admin/product_detail",$content,true);
        // $content['content_modal'] =  $this->load->view("admin/modal/productdetail_modal",$content,true);

        // $content = array(
        //     'username' => $this->session->userdata('username'),
        //     'product_data' => $product_data
        // );
        $content['data_content'] = "admin/product_detail";
        $content['content_modal'] = "admin/modal/productdetail_modal";

        $this->load->view('admin/header', $content);
        //    echo json_encode($content);
    }
    public function listprodukdetaildata($id)
    {
        $getdetail = $this->product_model->getProdukDetail($id);
        echo json_encode($getdetail);
    }
    public function getprodukdetaildata($detailid)
    {
        $getdetail = $this->product_model->getOneProdukDetail($detailid);
        echo json_encode($getdetail);
    }
    public function add_productdetail()
    {
        $data = $_POST;

        $savedata = $this->product_model->insertProductDetail($data);
        echo json_encode($savedata);
    }
    public function edit_productdetail()
    {
        $data = $_POST;

        $savedata = $this->product_model->updateProductDetail($data);
        echo json_encode($savedata);
    }
    public function deleteproductdetail($id)
    {
        $delete = $this->product_model->deleteProdukDetail($id);

        if ($delete == 1) {
            $balikan = [
                'status' => '1',
                'message' => 'success',
                'data' => $delete,
            ];
        } else {
            $balikan = [
                'status' => '0',
                'message' => 'failed',
                'data' => [],
            ];
        }
        echo json_encode($balikan);
    }

    public function productdetailgenset($id)
    {
        $getdetailspec = $this->product_model->getdetailSpec($id);

        $contentview = $this->load->view("admin/modal/productdetail_spec_modal", $getdetailspec, true);
        echo $contentview;
    }
    public function productdetaillauntop($id)
    {
        $getdetailspec = $this->product_model->getdetailonedata($id);

        $contentview = $this->load->view("admin/modal/productdetail_spec_modal", $getdetailspec, true);
        echo $contentview;
    }
    public function getcountproductdetail()
    {
        $getproduct = $this->product_model->ProductData();
        echo sizeof($getproduct);
    }
    public function getallproductdetail($productid,$id)
    {
        $html='';;
        $getproduct = $this->product_model->getallproductdetail($productid);
        if(sizeof($getproduct)>0){
            foreach($getproduct as $prod){
                if($id!=''){
                    if($id==$prod['id']){
                        continue;
                    }else{
$html .= '<option value="' . $prod['id'] . '">' . $prod['title'] . "</option>";

                    }
                }else{
                    $html .= '<option value="' . $prod['id'] . '">' . $prod['title'] . "</option>";

                }
                
            }
        }
     echo $html;   

    }
}
