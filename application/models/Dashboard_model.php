<?php
class Dashboard_model extends CI_Model { 


    function __construct()
    {        
        parent::__construct();
        
    }
   
    function get_limitdata($table){

    if($table == 'manager'){
        $manager = 'manager_info';
        $menu_table = $manager;
        $menu_id = 'm_';                                     
        $state_check = 'managerment';
    } else if ($table == 'domain'){
        $domain = 'domain_info';
        $menu_table = $domain;
        $menu_id = 'd_';                                     
        $state_check = 'domain';
    } else {
        $hosting = 'hosting_info';
        $menu_table = $hosting;
        $menu_id = 'h_';                                     
        $state_check = 'hosting';        
    }
        
        $this->db->select('*');
        $this->db->from('company');
        // $this->db->join('manager_info', 'company.c_num = manager_info.m_num');
        // $this->db->where('m_enddate < (NOW() + INTERVAL 31 DAY) AND m_enddate > NOW() and c_managerment_check=1');
        $this->db->join($menu_table, 'company.c_num = '.$menu_table.'.'.$menu_id.'num');        
        $this->db->where($menu_id.'enddate < (NOW() + INTERVAL 31 DAY) AND '.$menu_id.'enddate > NOW() AND c_'.$state_check.'_check=1');
        $query = $this->db->get();
        $result = $query->result_array();
        
        return $result;

     
    }
    
   

}
