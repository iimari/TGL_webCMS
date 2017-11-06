<?php
class Manager_model extends CI_Model { 
    function __construct()
    {        
        parent::__construct();
        
    }    
    function get_companyinfo()
    {                    
         $query = $this->db->get('company');
        // $query = $this->db->get_where('company', array('c_name'=>$name)->row();        
        $result = $query->result_array();
        return $result;
    }

    function get_company_detailinfo($c_num)
    {          
          
     
        return $this->db->get_where('company', array('c_num'=>$c_num))->row();        
    }
}



?>

