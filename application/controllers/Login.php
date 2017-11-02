<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'Main.php';

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
<<<<<<< HEAD
        $this->load->model('User_model');        
=======
        $this->load->driver('cache');
>>>>>>> origin/leemw
    }

    public function index()
    {
       $this->load->view('Login_view');
    }
<<<<<<< HEAD
    function sign_in()
    {
        $user = $this->User_model->get_u_id(array('u_id'=>$this->input->post('u_id')));  

        if($this->input->post('u_id') == $user->u_id && $this->input->post('password') == $user->password)
             {            
                $this->session->set_userdata('is_login',true);
                $this->load->view('Dashboard');
                
            } else{
                echo "불일치";      
            }
    }
=======

    function sign_out()
    {
        session_destroy();
        //$this->session->sess_destroy();
        //$this->cache->clean();
        //$this->load->view('Login_view');
        redirect('/','refresh');
    }

>>>>>>> origin/leemw
}

?>