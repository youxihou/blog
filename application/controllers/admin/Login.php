<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public $res_url ='res/';
	public $adm_url = 'admin/';
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->res_url = base_url().$this->res_url;
        $this->adm_url = base_url().$this->adm_url;
        $this->load->model('admin/admin_model','model');
    }

	public function index()
	{
		
		if($_POST){
			$username = $this->input->post('username');
			$pwd = $this->input->post('pwd');
			//echo md5($pwd);
			if($username && $pwd){
				$admin_info = $this->model->get_admin_info($username);

				if($admin_info){
					//var_dump($admin_info);exit();
					//echo $admin_info['password'];
					//echo md5($pwd);exit();	
					if( $admin_info['password'] == md5($pwd) ){
						$this->load->library('session');
						$this->session->set_userdata('is_login',1);
                        $this->session->set_userdata('adm_name',$admin_info['username']);
                        $this->session->set_userdata('adm_id',$admin_info['id']);
						redirect(site_url().'admin');
					}
				}
			}

			redirect(site_url().'admin/login');
		}
		$data['res_url'] = base_url().'res/';
		$this->load->view('admin/login.php',$data);
	}


	
}
