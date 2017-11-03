<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }


    public function index()
    {
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['u_id'] = $session_data['u_id'];
            $this->load->view('Dashboard', $data);
        }else {
            redirect('/','refresh');
        }
       
    }


    public function _remap($method) {
        
        // 헤더 include
        $this->load->view('Head'); 
        // 사이드 메뉴 include
        $this->load->view('Menu'); 
        
        //바디
        if(method_exists($this, $method)) {
            
           $this->{"{$method}"}();
          }
        // 푸터 include
        $this->load->view('Footer');
    }
}

?>