<?php
class User_model extends CI_Model { 
    function __construct()
    {        
        parent::__construct();
        
    }    
    function get_u_id($option)
    {   
        $limit = 1;          
        $result = $this->db->get_where('user', array('u_id'=>$option['u_id'], 'password'=>$option['password']), $limit)->row();
        return $result;
    }
    
}



?>

