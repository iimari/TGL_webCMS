<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //모델 호출
        $this->load->model('Manager_model');
    }


    public function index()
    {  
        // if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['u_id'] = $session_data['u_id'];
            $this->load->view('Dashboard', $data);            
    }

    function site_info()
    {
        $company_infodata['list'] = $this->Manager_model->get_companyinfo();
        $this->load->view('Site_info', $company_infodata);
    }

    function hosting_info()
    {
        $this->load->view('Hosting');            
    }

    function domain_info()
    {
        $company_infodata['list'] = $this->Manager_model->get_companyinfo();
        $this->load->view('Domain',$company_infodata);            
    }

    function managerment_info()
    {
        $this->load->view('Managerment');            
    }

    public function _remap($method) {
        
        $this->load->view('/include/Common');
        // // 헤더 include
        $this->load->view('/include/Head'); 
        // 사이드 메뉴 include
        $this->load->view('/include/Menu'); 
        
        //바디
         
        if(method_exists($this, $method)) {
            if($this->session->userdata('logged_in')){
                $this->{"{$method}"}();
            }else {
                redirect('/','refresh');
            }
        }

        // 푸터 include
        $this->load->view('/include/Footer');
        // }

     }
}

?>