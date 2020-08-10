<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function get_data($nama_table)
    {
        $this->db->select("*");
        $this->db->from($nama_table);
        $this->db->where("fdelete", "0");
        $query = $this->db->get();

        return $query->result_array();

    }

    public function get_data_by_slug($slug, $nama_table)
    {
        $this->db->select("*");
        $this->db->from($nama_table);
        $this->db->where("fdelete", "0");
        $this->db->where("slug", $slug);
        $query = $this->db->get();

        return $query->row_array();
    }

    // PRODUK PAGE
    public function get_header_produk($id, $nama_table)
    {
        $this->db->select("*");
        $this->db->from($nama_table);
        $this->db->where("fdelete", "0");
        $this->db->where("id", $id);
        $query = $this->db->get();

        return $query->row_array();
    }

    public function get_detail_produk($product_id, $type)
    {
        $this->db->select("*");
        $this->db->from("productdetail");
        $this->db->where("fdelete", "0");
        $this->db->where("parent", "0");
        $this->db->order_by('orderby', 'asc');
        if ($type == "by_id_produk") {
            $this->db->where("product_id", $product_id);
        } else {
            $this->db->where("id", $product_id);
        }

        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_spesifikasi_produk($produkdetail_id)
    {
        $this->db->select("*");
        $this->db->from("productspecifikasi");
        $this->db->where("fdelete", "0");
        $this->db->where("produkdetail_id", $produkdetail_id);
        $query = $this->db->get();
        return $query->result_array();

    }
    public function getdetailSpec($detailid)
    {
        $this->db->select('*');
        $this->db->where('id', $detailid);
        $this->db->where('fdelete', '0');
        $this->db->order_by('modifiedDate', 'desc');
        $query = $this->db->get('productdetail');
        $result_array = $query->row_array();
        // $checkproduct = $this->getOneProdukDetail($detailid);
        $title = '';
        $image = '';
        $logo = '';
        $desc = '';
        $productspec = array();
        $opentype = 0;
        $silenttype = 0;
        if (sizeof($result_array) > 0) {
            $title = $result_array['title'];
            $desc = $result_array['description'];
            $image = ($result_array['path_img'] == '' ? '' : base_url() . '/assets/admin/upload/product/' . $result_array['path_img']);
            $logo = ($result_array['path_logo'] == '' ? '' : base_url() . '/assets/admin/upload/product/' . $result_array['path_logo']);
            $this->db->select('*');
            $this->db->where('produkdetail_id', $detailid);
            $this->db->where('fdelete', '0');
// $this->db->order_by('modifiedDate', 'desc');
            $query = $this->db->get('productspecifikasi');
            $result_array = $query->result_array();
            if (sizeof($result_array) > 0) {
                foreach ($result_array as $row) {
                    if ($row['ot_l'] != null && $row['ot_w'] != null && $row['ot_h'] != null && $row['ot_weight'] != null) {
                        $opentype = 1;
                    }
                    if ($row['st_l'] != null && $row['st_w'] != null && $row['st_h'] != null && $row['st_weight'] != null) {
                        $silenttype = 1;
                    }

                }
            }
            $productspec = $result_array;
        }

        $balikan = array(
            'title' => $title,
            'image' => $image,
            'logo' => $logo,
            'desc' => $desc,
            'productspec' => $productspec,
            'opentype' => $opentype,
            'silenttype' => $silenttype,
            'categori' => 'genset',
        );
        return $balikan;
    }

    public function getSpesifikasiProdukFooter($product_id)
    {
        $this->db->select("*");
        $this->db->from("productdetail");
        $this->db->where("fdelete", "0");
        $this->db->where("parent", "0");
        $this->db->order_by('orderby', 'asc');

        $this->db->where("product_id", $product_id);
        $this->db->limit(6);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getdetailbyparent($parent_id)
    {
        $this->db->select("*");
        $this->db->from("productdetail");
        $this->db->where("fdelete", "0");
        $this->db->where("parent", $parent_id);
        $this->db->order_by('orderby', 'asc');
        $query = $this->db->get();
        return $query->row_array();

    }
}
