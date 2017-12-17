<?php
class Visit_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
       $this->load->database();
    }
    public function get_visit_total(){
        $sql = "select count(id) count from web_traffic GROUP BY date(time)";
        $query = $this->db->query($sql)->result_array();
        return count($query);
    }
  
    public function get_visit_day_li($p,$dispay_num){
        $sql = "select count(id) count,date(time) time from web_traffic group by date(time) order by date(time) desc";
        return $this->db->query($sql)->result_array();
    }
    public function get_visit_ipcount($time){
         $sql = "select count(ip) ipcount from web_traffic where date(time)='$time' group by ip";
        $query = $this->db->query($sql)->result_array();
        return count($query);
    }
    //获取当前访问记录
    public function get_day_visit_li($date){
        $sql = "select * from web_traffic where date(time) = '$date' order by time desc";
        return $this->db->query($sql)->result_array();
    }
}
?>