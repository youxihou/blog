<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	public $adm_url ='admin/';
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('admin/admin_model','admin_model');
        $this->adm_url = site_url().$this->adm_url;
        $this->load->library('session');
        if(!$this->session->userdata('is_login')){
        	redirect($this->adm_url.'login');
        }
    }
    public function quit(){x1x``
        $this->session->sess_destroy();
        redirect($this->adm_url.'login');

    }

	public function header(){
		return $this->load->view('admin/header.php','',true);;
	} 
    public function aside(){
        return $this->load->view('admin/aside.php','',true);;
    } 
    private function visit(){
        //获取前8天访问记录
        $now_date = date('Y-m-d',time());
        $before_date = date('Y-m-d',strtotime("-12 day"));
        $visit_li = $this->admin_model->get_visit($now_date,$before_date);
        $ipstr = '';
        $pvstr = '';
        for($i=0;$i<13;$i++){
            $is_exist = false;
            foreach ($visit_li as $key => $value) {
                //$is_exist = false;
                if($value['visit_time'] == date('Y-m-d', strtotime('-'.$i.' day'))){
                    //date('Y-m-d', strtotime('-'.$i.' day'));
                    $ipstr.= $value['ipcount'].',';
                    $pvstr.= $value['pvcount'].',';
                    $is_exist = true;
                    continue;
                }
            }
            if(!$is_exist){
               $ipstr .= '0,';
               $pvstr .= '0,'; 
            }      
        }

        return array('ipstr'=>rtrim($ipstr,','),'pvstr'=>rtrim($pvstr,','));

    }
    private function servinfo_area(){

        return $this->load->view('admin/servinfo_area.php','',true);   
    }
    private function visit_area(){
        //获取当前访问信息
        $data['now_visit'] = $this->admin_model->get_visit_info();
        $data['now_pvcount'] = $this->pv_count($data['now_visit']);

        $data['prev_visit'] = $this->admin_model->get_visit_info(1);
        $data['prev_pvcount'] = $this->pv_count($data['prev_visit']);

        $data['prev2_visit'] = $this->admin_model->get_visit_info(2);
        $data['prev2_pvcount'] = $this->pv_count($data['prev2_visit']);

        $data['month'] = $this->admin_model->get_visit_info('month');
        $data['month_pvcount'] = $this->pv_count($data['month']);        

        $data['all'] = $this->admin_model->get_visit_info('all');
        $data['all_pvcount'] = $this->pv_count($data['all']);
        return $this->load->view('admin/visit_area.php',$data,true);   
    }
    private function pv_count($visit){
        $pv_count = 0;
        foreach ($visit as $key => $value) {
            $pv_count+=$value['count'];
        }
        return $pv_count;
    }
	public function index(){
        //获取当前访问信息
        $data['now_visit'] = $this->admin_model->get_visit_info();
        $data['now_pvcount'] = $this->pv_count($data['now_visit']);
        
        //获取浏览器份额
        $browser_arr = $this->admin_model->get_browser();
        $visit_total = 0;
        foreach ($browser_arr as $k=> $v) {
            $visit_total += $v['count'];
        }

        //份额百分比
        $percent = '';
        foreach ($browser_arr as $k=> $v) {
            $browser_arr[$k]['percent'] = round(($v['count']/$visit_total)*100,1);
            $percent .= $v['browser'].','.$browser_arr[$k]['percent'].':';
        }
        $data['percent'] = rtrim($percent,':');
        $data['aside'] = $this->aside();
		$data['header'] = $this->header();
		$data['servinfo'] = $this->servinfo_area();
        $data['visit_info'] = $this->visit_area();
        $this->load->view('admin/index.php',$data);
	} 	

}
