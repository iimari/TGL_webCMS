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

    function get_manager_history($mh_homepage)
    {              
       return $this->db->get_where('manager_history', array('mh_homepage'=>$mh_homepage))->result();    
    }
    //수정 디비 업체
    public function update_content($company_array,$hosting_array,$domain_array){        

                $c_num=$company_array['c_num'];
                $this->db->where('c_num',$c_num);
                $this->db->update('company',$company_array);

                $h_num=$hosting_array['h_num'];
                $this->db->where('h_num',$c_num);
                $this->db->update('hosting_info',$hosting_array);

                $d_num=$domain_array['d_num'];
                $this->db->where('d_num',$c_num);
                $this->db->update('domain_info',$domain_array);

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
}



?>

