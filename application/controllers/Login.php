<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'Main.php';

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');        
        $this->load->driver('cache');
        $this->load->library('form_validation');

        //모델 호출
        $this->load->model('User_model');        

    }

    public function index()
    {
        $this->load->view('Login_view');           
        
    }
    function sign_in()
    {                                
        $this->form_validation->set_rules('u_id','아이디','trim|required');
        $this->form_validation->set_rules('password','비밀번호','trim|required|callback_basisdata_cek');   
        if($this->form_validation->run() == false)
        {
            $this->load->view('Login_view');
        }else {
            redirect(site_url('/Main'), 'refresh');
        }

    }
    function basisdata_cek($password)
    {     
        $auth_data = array( 
            'u_id' => $this->input->post('u_id'),
            'password' => $this->input->post('password')
        );
        
        $user = $this->User_model->get_u_id($auth_data);  

        if($user)
        {                          
            $sess_array = array();                         
            $sess_array = $arrayName = array('u_id'=>$user->u_id);                        
            $this->session->set_userdata('logged_in',$sess_array);                                                                         
            return true;            
            
        }else{          

            return false;                
        }                                    
    }         

    function sign_out()
    {
        //session_destroy();
        $this->session->sess_destroy();
        $this->cache->clean();
        // $this->load->view('Login_view');
        redirect('/','refresh');
    }

 
}
?>