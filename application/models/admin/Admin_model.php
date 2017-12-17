<?php
class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
       $this->load->database();
    }

    //获取admin信息
    public function get_admin_info($username){
        $sql ="select * from admin where username = '$username'";
        return $this->db->query($sql)->row_array();
    }

    public function get_visit($now_date,$before_date){
        $sql = "select count(ip) ipcount,visit_time,sum(pv) pvcount  from web_traffic where visit_time between '$before_date 00:00:00'  and '$now_date 23:59:59' 
                      group by visit_time";
        return $this->db->query($sql)->result_array();
    }

    public function get_admin($adm_id){
        $this->db->where('id',$adm_id);
        return $this->db->get('admin')->row_array();
    }
    //更新
    public function up_amdin_info($up,$adm_id){
        $this->db->where('id',$adm_id);
        $this->db->update('admin',$up);
    }

    public function get_visit_info($day = ''){
        if($day > 0)
            $datestr = "where date(time)=date_sub(curdate(),interval $day day)";
        elseif($day == 'month')
            $datestr = "where month(time)=month(NOW())";
        elseif($day == 'all')
            $datestr = '';
        else
            $datestr = "where date(time)=date(NOW())";
        $sql = "select count(id) count from web_traffic  $datestr GROUP BY ip";
        return $this->db->query($sql)->result_array();
    }

    //获取浏览器分额
    public function get_browser(){
        $sql = "select count(id) count,browser from web_traffic GROUP BY browser";
        return $this->db->query($sql)->result_array();
    }    
}
?>