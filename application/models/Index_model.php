<?php
class Index_model extends CI_Model {

    public function __construct()
    {
       parent::__construct();
       $this->load->database();
    }

    //添加网站流量
    public function insert_visit($visit){
        $this->db->insert('web_traffic',$visit);
        if($this->db->insert_id())
            return true;
    }
}
?>