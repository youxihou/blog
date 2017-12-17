<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	public $res_url = 'res/front/';
    public function __construct()
    {
        parent::__construct();
        $this->load->library('guest_info');
        $this->load->model('admin/article_model','article_model',TRUE);
        $this->load->model('index_model','index_m',TRUE);
        $this->res_url = base_url().$this->res_url;
        //$this->adm_url = site_url().$this->adm_url;
    }
    //获取热门文章
    private function get_hotArticle_li(){
    	$n = 5;
    	return $this->article_model->get_hotArticle_li($n);
    }

    //获取最新文章
    private function get_newestArticle_li(){
    	$n = 5;
    	return $this->article_model->get_newestArticle_li($n);      	
    }

    //首页
	public function index($type_id = ''){

        $visit['source'] = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'直接输入网址';
		$visit['ip'] = $this->guest_info->GetIP();
        $visit['browser'] = $this->guest_info->GetBrowser();
		$visit['time'] = date('Y-m-d H:i:s',time());
        $visit['os'] = $this->guest_info->GetOS();
        if(getCity($_SERVER["REMOTE_ADDR"])){
	        $address_info = getCity($_SERVER["REMOTE_ADDR"]);
	        if($address_info['region']){
	        	 $visit['address'] = $address_info['country'].','.$address_info['area'].','.$address_info['region'];
	        	 $this->index_m->insert_visit($visit);
	        }
	       
        }
        

		

		//$search = $this->input->get('s')?$this->input->get('s'):'';
		$type_id = $this->input->get('tid') ? $this->input->get('tid'):'';
		$keywords = $this->input->get('keywords') ? $this->input->get('keywords') :'';


		$this->load->library('pagination');
		$dispay_num = 10;
		$config['base_url'] = site_url().'index.html?';
		$config['total_rows'] = $this->article_model->get_article_total($type_id,$keywords);
		$config['enable_query_strings'] = TRUE;
		$config['query_string_segment'] = 'per_page';
		$config['per_page'] = $dispay_num;
		$config['attributes'] = array('class' => 'page-numbers');

		$this->pagination->initialize($config);

		$data['links'] =  $this->pagination->create_links();

		if($this->input->get('per_page'))
			$p = $this->input->get('per_page');
		else
			$p = 0;


		$data['article_li'] = $this->article_model->get_article_li($type_id,$p,$dispay_num,$keywords);
        $data['type_id'] = $type_id;
		$data['head'] = $this->head();
		$data['footer'] = $this->footer();
		$data['hotArticle_li'] = $this->get_hotArticle_li();
		$data['newestArticle_li'] = $this->get_newestArticle_li();		
		$this->load->view('index',$data);
	}
	//文章详情 
	public function article_detail($id){
				//更新阅读量
		$this->article_model->update_readNum($id);

		$data['article_info'] = $this->article_model->get_article_info($id);
		$data['head'] = $this->head();
		$data['footer'] = $this->footer();
		$data['hotArticle_li'] = $this->get_hotArticle_li();				
		$this->load->view('article_info',$data);
	}

	//头部
	public function head(){
		$data['type_li'] = $this->article_model->get_articleType_li();
		return $this->load->view('head.php',$data,TRUE);
	}

	//底部
	public function footer(){
		return $this->load->view('footer.php','',TRUE);
	}
  
}
