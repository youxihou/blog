<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visit extends CI_Controller {
    public $adm_url ='admin/';
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('admin/visit_model','model',TRUE);
        $this->load->library('session');
        $this->adm_url = site_url().$this->adm_url;
        if(!$this->session->userdata('is_login')){
        	redirect($this->adm_url.'login');
        }        
    }

    private function type_color($type){
    	switch ($type) {
    		case '1':
    			$color = 'pink';
    			break;
    		case '2':
    			$color = 'primary';
    			break;
    		case '3':
    			$color = 'success';
    			break;
    		case '4':
    			$color = 'danger';
    			break;
    		case '5':
    			$color = 'info';
    			break;
    		default:
    			$color = 'info';
    			break;
    	}
    	return $color;
    }

    public function tables(){	
		$this->load->library('pagination');
		$dispay_num = 10;
		$config['base_url'] = site_url().'admin/visit/tables?';
		$config['total_rows'] = $this->model->get_visit_total();
		$config['enable_query_strings'] = TRUE;
		$config['query_string_segment'] = 'per_page';
		$config['page_query_string'] = TRUE;
		$config['per_page'] = $dispay_num;		
		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();
		if($this->input->get('per_page'))
			$p = $this->input->get('per_page');
		else
			$p = 0;

		$data['visit_li'] = $this->model->get_visit_day_li($p,$dispay_num);
        foreach($data['visit_li']  as $k => $v)
           $data['visit_li'][$k]['ipcount'] = $this->model->get_visit_ipcount($v['time']);

		$data['aside'] = $this->aside();
		$data['header'] = $this->header();
    	$this->load->view('admin/visit/tables.php',$data);	
    }
    //查看当天的访问记录
    public function day_visit_li($date){
        $data['visit_li'] = $this->model->get_day_visit_li($date);
        $data['aside'] = $this->aside();
        $data['header'] = $this->header();
        $data['date'] = $date;
        $this->load->view('admin/visit/day_visit.php',$data);  
    }

    public function header(){
        return $this->load->view('admin/header.php','',true);;
    } 
    public function aside(){
        return $this->load->view('admin/aside.php','',true);;
    } 
}