<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    /*
	========================================
	** ABOUT
	========================================
    */
    public function select_data_about(){
        $this->db->select("*");
        $this->db->from("about");
        $this->db->where("fdelete", "0");
        $query = $this->db->get();

        if(sizeof($query->row_array()) == 0){
            $html['title'] = "ABOUT BLAIR TOWNSEND";
            $html['description'] = "<p>BA Princeton; Economics</p>
            <p>Masters in Fine Art Otis College</p>
            <p>Worked in New York Gallery World</p>
            <p>Asst to boutique hotelier Ian Schraeger</p>
            <p>Worked for Getty furniture designer Roy McMakin</p>
            <p>One time Hotel owner: Hotel Oloffson, Port-au-Prince,</p>
            <p>Haiti (Hotel from Graham Greene book, The Comedians) which still exists.</p>
            <p>All custom furniture and interior design for producer Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house working under Larry Totah.</p>";
            return $html;
        }else{
            return $query->row_array();
        }
        
    }

    /*
	========================================
	** COMISSIONS
	========================================
    */
    public function select_all_comissions($limit, $start)
    {
        //SELECT * FROM comissions order by modified_date desc LIMIT 6, 6;
        $this->db->select('c.*, cd.image, cd.fdelete as fdelete_detail');
        $this->db->from("comissions as c");
        $this->db->join('comissions_image AS cd', 'c.id = cd.id_comissions');
        $this->db->order_by("c.modified_date", "desc");
        $this->db->where('c.fdelete', "0");
        //$this->db->where('cd.fdelete', "0");
        $this->db->where('cd.status', "1");
        //$this->db->limit("3", "4");
        $this->db->limit($limit, $start);
        
        $query = $this->db->get();
        //echo json_encode($query->result_array());exit();
        return $query->result_array();
    }

    public function select_all_commissions_data(){
        $this->db->select('c.*, cd.image, cd.fdelete as fdelete_detail');
        $this->db->from("comissions as c");
        $this->db->join('comissions_image AS cd', 'c.id = cd.id_comissions');
        $this->db->order_by("c.modified_date", "desc");
        $this->db->where('c.fdelete', "0");
        $this->db->where('cd.status', "1");
        $query = $this->db->get();
        return $query->result_array();
    }
    public function select_detail_comissions($id)
    {

        $this->db->select('*');
        $this->db->from('comissions');
        $this->db->where('comissions.id',$id);
        $this->db->where('comissions.fdelete', '0');
        $query = $this->db->get();
        $result = $query->result_array();

        foreach ($result as $res => $value) {
            $this->db->where('comissions_image.id_comissions', $value['id']);
            $this->db->where('comissions_image.fdelete', '0');
            $this->db->order_by("status", "DESC");
            $image_query = $this->db->get('comissions_image');
            $image_result = $image_query->result_array();
            $result[$res]['image_multiple'] = $image_result;
        }
        //echo json_encode($result);exit();;
        return $result;

    }
    public function select_comissions_related($id){
     

        $this->db->select('c.*, cd.image, cd.fdelete as fdelete_detail');
        $this->db->from("comissions as c");
        $this->db->join('comissions_image AS cd', 'c.id = cd.id_comissions');
        $this->db->order_by("c.modified_date", "desc");
        $this->db->where('c.fdelete', "0");
        $this->db->where('cd.fdelete', "0");
        $this->db->where('cd.id_comissions != ', $id);
        $this->db->where('cd.status', "1");
        $query = $this->db->get();
        //echo json_encode($query->result_array());exit();
        return $query->result_array();
    }


    /*
	========================================
	** GALLERY
	========================================
    */
    public function select_all_gallery()
    {
        $this->db->select("*");
        $this->db->from("gallery");
        $this->db->order_by("modified_date", "desc");
        $this->db->where('fdelete', "0");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function select_detail_gallery_by_id($id){
        $this->db->select("*");
        $this->db->from("gallery");
        $this->db->where('id',$id);
        $this->db->where('fdelete', "0");
        $query = $this->db->get();
        return $query->row_array();
    }

    public function select_gallery_related($id){
        $this->db->select("*");
        $this->db->from("gallery");
        $this->db->where('id != ', $id);
        $this->db->where('fdelete', "0");
        $query = $this->db->get();
        return $query->result_array();
    }
    


    /*
	========================================
	** NEWS
	========================================
    */
    public function select_all_news($limit, $start)
    {
        $this->db->select("*");
        $this->db->from("news");
        $this->db->where('fdelete', "0");
        $this->db->order_by("modified_date", "desc");
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function select_detail_news_by_id($id){
        $this->db->select("*");
        $this->db->from("news");
        $this->db->where('id',$id);
        $this->db->where('fdelete', "0");
        $this->db->order_by("modified_date", "desc");
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function select_news_related($id){
        $this->db->select("*");
        $this->db->from("news");
        $this->db->where('fdelete', "0");
        $this->db->where('id != ', $id);
        $this->db->order_by("modified_date", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
    public function select_all_news_data(){
        $this->db->select("*");
        $this->db->from("news");
        $this->db->where('fdelete', "0");
        $this->db->order_by("modified_date", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
}
