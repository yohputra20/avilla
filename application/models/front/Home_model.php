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
}
