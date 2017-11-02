<?php
class User_model extends CI_Model { 
    function __construct()
    {        
        parent::__construct();
    }
    
    function get_u_id($option)
    {     
    $result = $this->db->get_where('user', array('u_id'=>$option['u_id']))->row();
        return $result;
    }
}



?>

