<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
       $this->load->view('Dashboard');
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