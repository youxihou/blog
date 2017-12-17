<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('admin/article_model','model',TRUE);
        $this->load->library('session');
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
    private function joint_li($li){
    	foreach ($li as $key => $value) {
    		$li[$key]['color'] = $this->type_color($value['type']);
    	}
    	return $li;
    }

    public function tables(){
		$type_id = '';$keywords = '';	
		$this->load->library('pagination');
		$dispay_num = 10;
		$config['base_url'] = site_url().'admin/article/tables?';
		$config['total_rows'] = $this->model->get_article_total($type_id);
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

		$data['article_li'] = $this->joint_li($this->model->get_article_li($type_id,$p,$dispay_num));

		$data['aside'] = $this->aside();
		$data['header'] = $this->header();
    	$this->load->view('admin/article/tables.php',$data);	
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
        $data['info'] = $this->model->get_article_info($id);
		if($_POST){
         
            if($_FILES['img']['name']){
                $uploadURL = './uploads/'.date('Ymd',$data['info']['create_time']).'/';               
                if(!is_dir($uploadURL)){
                    mkdir($uploadURL,0777,true);
                }
                $maxsize = 2000000;
                $allowtype = array("gif", "png", "jpg","jpeg");
                $israndname = true;
                $fname = 'img';
                $return_file = $this->file_upload($fname,$uploadURL,$maxsize,$allowtype,$israndname);

                $this->load->library('Crop_img',array('props' => $url));

                if($return_file)    
                    $up['img'] = $return_file;
            }
                        
			$up['title'] = $this->input->post('title');
			$up['type'] = $this->input->post('type');
			$up['pv'] = $this->input->post('PV');
			$up['intro'] = $this->input->post('intro');
			$up['content'] = $this->input->post('article_text');
			$this->model->update_article($up,$id);
		}
		$type_id = '';
		
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
				$israndname = false;
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
	private function file_upload($fname,$uploadURL,$size,$allowtype,$israndname = false){
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