<?php
class Sysuser_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
       $this->load->database();
    }
    //获取用户列表
    public function get_all_sysuser(){
        return $this->db->get('admin')->result_array();
    }
}
?>