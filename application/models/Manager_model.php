<?php
class Manager_model extends CI_Model { 


    function __construct()
    {        
        parent::__construct();
        
    }
    //만료 
    function get_select_data($menu,$compare_data)     
    {
        $hosting = 'hosting_info';
        $domain = 'domain_info';
        $manager = 'manager_info';

        if($compare_data == 1)
        {
            $compare = '<';
        }else{
            $compare = '>';
        }        

        if($menu == $hosting){
            $menu_table = $hosting;
            $menu_id = 'h_';                                     
            $state_check = 'hosting';
        }else if($menu == $domain){
            $menu_table = $domain;
            $menu_id = 'd_';                                     
            $state_check = 'domain';
        }else if($menu == $manager){
            $menu_table = $manager;
            $menu_id = 'm_';                                     
            $state_check = 'managerment';
        }                
        $this->db->select('*');
        $this->db->from('company');
        $this->db->join($menu_table, 'company.c_num = '.$menu_table.'.'.$menu_id.'num');             
        $this->db->where('company.c_'.$state_check.'_check=1 and '.$menu_table.'.'.$menu_id.'enddate'.$compare.' now()');
        $query = $this->db->get();
        $result = $query->result_array();        
        return $result;

    }
    
    //관리페이지 업체리스트
    function get_companyinfo()
    {                    
         $query = $this->db->get('company');
        // $query = $this->db->get_where('company', array('c_name'=>$name)->row();        
        $result = $query->result_array();
        return $result;
    }
    
    function insert_companyinfo_check($id)
    {        
        return $this->db->get_where('company', array('c_domain'=>$id))->row();        
    }


    function get_activation_companyinfo($menu)
    {
        $compare = 0;           
        return $result = $this->get_select_data($menu, $compare);

    }
    function get_expiration_company($menu)
    {
        $compare = 1;   
        return $result = $this->get_select_data($menu, $compare);        
    }


    //업체상세정보, 수정시 불러오기
    function get_company_detailinfo($c_num)
    {              
       return $this->db->get_where('company', array('c_num'=>$c_num))->row();        
    }
    function get_domain_detailinfo($d_num)
    {              
       return $this->db->get_where('domain_info', array('d_num'=>$d_num))->row();        
    }
    function get_hosting_detailinfo($h_num)
    {              
       return $this->db->get_where('hosting_info', array('h_num'=>$h_num))->row();        
    }
    function get_manager_history($mh_domain)
    {              
       return $this->db->get_where('manager_history', array('mh_domain'=>$mh_domain))->result();    
    }
    function get_manager_detailinfo($m_num)
    {
       return $this->db->get_where('manager_info', array('m_num'=>$m_num))->row();
    }
    //수정 디비 업체
    public function update_content($company_array,$hosting_array,$domain_array,$manager_array, $type){        

            $c_num=$company_array['c_num'];
            $this->db->where('c_num',$c_num);
            $this->db->update('company', $company_array);

        if($type == 'domain_detailinfo' or $type == 'detailinfo' )
        {
            // $d_num=$domain_array['d_num'];
            $this->db->where('d_num',$c_num);
            $this->db->update('domain_info', $domain_array);
        }
        if($type == 'hosting_detailinfo' or $type == 'detailinfo' )
        {
            // $h_num=$hosting_array['h_num'];
            $this->db->where('h_num',$c_num);
            $this->db->update('hosting_info', $hosting_array);
        }     
        if($type == 'manager_detailinfo' or $type == 'detailinfo' )
        {            
            $this->db->where('m_num',$c_num);
            $this->db->update('manager_info', $manager_array);
        }
    }   
    
    //삽입
    function insert_company_info($company_array,$hosting_array,$domain_array,$managerment_array)
    {

        $this->db->set('c_createdate','now()',false);        
        $this->db->insert('company',$company_array);
        
        $this->db->set('h_createdate','now()',false);                
        $this->db->insert('hosting_info',$hosting_array);
        
        $this->db->set('d_createdate','now()',false);                
        $this->db->insert('domain_info',$domain_array);
        
        $this->db->set('m_createdate','now()',false);
        $this->db->insert('manager_info',$managerment_array);                
    }


    function manager_insert($managerment_array)
    {
        $this->db->set('mh_createdate','now()',false);                
        $this->db->insert('manager_history',$managerment_array);
    }

    function get_managerment_detailinfo($mh_num)
    {              
        return $this->db->get_where('manager_history', array('mh_num'=>$mh_num))->row();    
    }

    function manager_modifysave($manager_array){
        $mh_num=$manager_array['mh_num'];
        $this->db->where('mh_num',$mh_num);
        $this->db->update('manager_history',$manager_array);
        


    }

}



?>

