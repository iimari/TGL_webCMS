<?php
class Manager_model extends CI_Model { 


    function __construct()
    {        
        parent::__construct();
        
    }

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
    function get_companyinfo($menu)
    {
        $compare = 0;           
        return $result = $this->get_select_data($menu, $compare);

    }
    function get_expiration_company($menu)
    {
        $compare = 1;   
        return $result = $this->get_select_data($menu, $compare);
        // $hosting = 'hosting_info';
        // $domain = 'domain_info';
        // $manager = 'manager_info';

        // if($menu == $hosting){
        //     $menu_table = $hosting;
        //     $menu_id = 'h_';                                     
        //     $state_check = 'hosting';
        // }else if($menu == $domain){
        //     $menu_table = $domain;
        //     $menu_id = 'd_';                                     
        //     $state_check = 'domain';
        // }else if($menu == $manager){
        //     $menu_table = $manager;
        //     $menu_id = 'm_';                                     
        //     $state_check = 'managerment';
        // }

        // $this->db->select('*');
        // $this->db->from('company');
        // $this->db->join($menu_table, 'company.c_num = '.$menu_table.'.'.$menu_id.'num');     
        // $this->db->where('company.c_'.$state_check.'_check=1 and '.$menu_table.'.'.$menu_id.'enddate < now()');
        // $query = $this->db->get();
        // $result = $query->result_array();
        // return $result;

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
        //어레이변환 작업 필요
       return $this->db->get_where('manager_history', array('mh_homepage'=>$mh_homepage))->row();        
    }

    //수정 디비 업체
    public function c_update_content($c_num,$c_name,$c_manager,$c_phone,
                                    $c_mail,$c_fax,$c_homepage,$c_bigo1,$c_createdate){        
        
                 $data = array(         
                 'c_name'=>$c_name,
                 'c_manager'=>$c_manager,
                 'c_phone'=>$c_phone,
                 'c_mail'=>$c_mail,
                 'c_fax'=>$c_fax,
                 'c_homepage'=>$c_homepage,
                 'c_bigo1'=>$c_bigo1,
                 'c_createdate'=>$c_createdate                 
                );
                $this->db->where('c_num',$c_num);
                $this->db->update('company',$data);
               
                             
        return $this->db->get_where('company', array('c_num'=>$c_num))->row();        
    }
    //수정 디비 호스팅
    public function h_update_content($h_num,$h_name,$h_startdate,$h_enddate,
                                    $h_ftpid,$h_ftppw,$h_dbid,$h_dbpw){        

                $data = array(         
                'h_name'=>$h_name,
                'h_startdate'=>$h_startdate,
                'h_enddate'=>$h_enddate,
                'h_ftpid'=>$h_ftpid,
                'h_ftppw'=>$h_ftppw,
                'h_dbid'=>$h_dbid,
                'h_dbpw'=>$h_dbpw               
                );
                $this->db->where('h_num',$h_num);
                $this->db->update('hosting_info',$data);


            return $this->db->get_where('hosting_info', array('h_num'=>$h_num))->row();        
    }
    //수정 디비 도메인
                public function d_update_content($d_num,$d_servicename,$d_id,$d_pw,$d_enddate){        

                $data = array(         
                'd_servicename'=>$d_servicename,
                'd_id'=>$d_id,
                'd_pw'=>$d_pw,
                'd_enddate'=>$d_enddate               
                );
                $this->db->where('d_num',$d_num);
                $this->db->update('domain_info',$data);


            return $this->db->get_where('domain_info', array('d_num'=>$d_num))->row();        
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

