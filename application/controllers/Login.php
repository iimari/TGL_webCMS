<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->driver('cache');
    }

    public function index()
    {
       $this->load->view('Login_view');
    }

    function sign_out()
    {
        session_destroy();
        //$this->session->sess_destroy();
        //$this->cache->clean();
        //$this->load->view('Login_view');
        redirect('/','refresh');
    }

}

?>