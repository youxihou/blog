<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sysuser extends CI_Controller {
	public $adm_id;
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('admin/sysuser_model','model',TRUE);
        $this->load->library('session');
        if(!$this->session->userdata('is_login')){
        	redirect($this->adm_url.'login');
        }    
        $this->adm_id = $this->session->userdata('adm_id');
    }

    public function index(){


    	$data['sysuser_li'] = $this->model->get_all_sysuser();

		$data['aside'] = $this->aside();
		$data['header'] = $this->header();
		$this->load->view('admin/sysuser/index.php',$data);   	
    }



	public function header(){
		return $this->load->view('admin/header.php','',true);;
	} 

	public function aside(){
		return $this->load->view('admin/aside.php','',true);
	}

	//删除新闻
	public function del_article($id){
		$this->model->del_article($id);
		redirect(site_url().'admin/article/tables');
	}

	//编辑新闻
	public function edit_article($id){
		if($_POST){
			$data['title'] = $this->input->post('title');
			$data['type'] = $this->input->post('type');
			$data['pv'] = $this->input->post('PV');
			$data['intro'] = $this->input->post('intro');
			$data['content'] = $this->input->post('article_text');
			$this->model->update_article($data,$id);
		}
		$type_id = '';
		$data['info'] = $this->model->get_article_info($id);
		//var_dump($data['info']);
		//获取文章类型列表
		$data['articleType_li'] = $this->model->get_articleType_li();
		$data['aside'] = $this->aside();
		$data['header'] = $this->header();
		$this->load->view('admin/article/edit_article.php',$data);				
	}

	public function add_article(){
       
		if($_POST){
		
			if($_FILES){
				$uploadURL = './uploads/'.date('Ymd',time()).'/';				
				if(!is_dir($uploadURL)){
					mkdir($uploadURL,0777,true);
				}
				$maxsize = 2000000;
				$allowtype = array("gif", "png", "jpg","jpeg");
				$israndname = true;
				$fname = 'img';
				$return_file = $this->file_upload($fname,$uploadURL,$maxsize,$allowtype,$israndname);

				if($return_file)	
					$insert['img'] = $return_file;
			}
			
			$insert['title'] = $this->input->post('title');
			$insert['type'] = $this->input->post('type');
			$insert['pv'] = $this->input->post('PV');
			$insert['intro'] = $this->input->post('intro');
			$insert['content'] = $this->input->post('article_text');
			$insert['create_time'] = time();
			$this->model->insert_article($insert);
			
			redirect(site_url().'admin/article/tables');
		}
		//获取文章类型列表
		$data['articleType_li'] = $this->model->get_articleType_li();

		$data['aside'] = $this->aside();
		$data['header'] = $this->header();
		$this->load->view('admin/article/add_article.php',$data);		
	}
	private function file_upload($fname,$uploadURL,$size,$allowtype,$israndname = true){
		$this->load->library('fileUpload');
	    //设置属性
	    $this->fileupload->set("path", $uploadURL);
	    $this->fileupload->set("maxsize", $size);
	    $this->fileupload->set("allowtype", $allowtype);
	    $this->fileupload->set("israndname", $israndname );

	    if($this->fileupload->upload($fname)) {

        	return $this->fileupload->getFileName();
  		}

  		return false;//var_dump($up->getErrorMsg());

	}
}