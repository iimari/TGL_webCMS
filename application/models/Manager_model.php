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
    //수정 디비
    public function update_content($c_num,$c_name,$c_manager,$c_phone,
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
               
    }
}



?>

