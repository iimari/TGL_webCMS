<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Popup extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');        
        $this->load->driver('cache');
        $this->load->library('form_validation');

        //모델 호출
        $this->load->model('Manager_model');        

    }
    function detailinfo($c_num){
        $data = $this->Manager_model->get_company_detailinfo($c_num);
        $this->load->view('Company_info', array('data'=>$data));       
       
    }

}

