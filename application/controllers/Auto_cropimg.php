<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto_cropimg extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
    public function index($url = ''){
        if(!$url){
            exit('路径错误');
        }
    		

    	echo $url;return;
    	
    	$this->load->library('Crop_img',array('props' => $url));
 
    }

    public  function  sd(){

    }
  
}
