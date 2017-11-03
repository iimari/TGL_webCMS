<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'Main.php';

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('User_model');        
        $this->load->driver('cache');
    }

    public function index()
    {      
       $this->load->view('Login_view');
    }
    function sign_in()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('u_id','아이디','required');
        $this->form_validation->set_rules('password','비밀번호','required');
        
        $user = $this->User_model->get_u_id(array('u_id'=>$this->input->post('u_id')));  

        if($this->form_validation->run() === TRUE){
        if(
            $this->input->post('u_id') === $user->u_id && 
            $this->input->post('password') === $user->password)
        {
            //$this->load->view('Dashboard');
            
            redirect(base_url('/index.php/Main'), 'refresh');
                               
            } else{
                echo "불일치";      
            }
        } else{
            echo "아이디/비밀번호를 입력하세요";
        }
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