<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function get_data($nama_table){
        $this->db->select("*");
        $this->db->from($nama_table);
        $this->db->where("fdelete", "0");
        $query = $this->db->get();

        return $query->result_array();
        
    }

    public function get_data_by_slug($slug, $nama_table){
        $this->db->select("*");
        $this->db->from($nama_table);
        $this->db->where("fdelete", "0");
        $this->db->where("slug", $slug);
        $query = $this->db->get();

        return $query->row_array();
    }

    // PRODUK PAGE
    public function get_header_produk($id, $nama_table){
        $this->db->select("*");
        $this->db->from($nama_table);
        $this->db->where("fdelete", "0");
        $this->db->where("id", $id);
        $query = $this->db->get();

        return $query->row_array();
    }

    public function get_detail_produk($product_id, $type){
        $this->db->select("*");
        $this->db->from("productdetail");
        $this->db->where("fdelete", "0");
        if($type == "by_id_produk"){
            $this->db->where("product_id", $product_id);
        }else{
            $this->db->where("id", $product_id);
        }
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_spesifikasi_produk($produkdetail_id){
        $this->db->select("*");
        $this->db->from("productspecifikasi");
        $this->db->where("fdelete", "0");
        $this->db->where("produkdetail_id", $produkdetail_id);
        $query = $this->db->get();
        return $query->result_array();
        
    }
}
