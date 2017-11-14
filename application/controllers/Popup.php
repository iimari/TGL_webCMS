<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Popup extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');        
        $this->load->driver('cache');
        $this->load->helper('Form');
        $this->load->library('form_validation');
         //모델 호출
        $this->load->model('Manager_model');  
        
        $set_num;        

    }
    //업체상세정보
    function detailinfo($c_num){
        $c_data = $this->Manager_model->get_company_detailinfo($c_num);        
        $d_data = $this->Manager_model->get_domain_detailinfo($c_num);
        $h_data = $this->Manager_model->get_hosting_detailinfo($c_num);
        $m_data = $this->Manager_model->get_manager_detailinfo($c_num); 

        $type = $this->uri->segment(2);
        $this->load->view('Company_info', 
                    array(
                            'c_data'=>$c_data,
                            'd_data'=>$d_data,
                            'h_data'=>$h_data,
                            'm_data'=>$m_data,
                            'type'=>$type
                        ));          
    }    
    
    //유지보수상세정보
    function manager_detailinfo($c_num,$mh_domain){
        $m_data = $this->Manager_model->get_manager_detailinfo($c_num);    
        $mh_data = $this->Manager_model->get_manager_history($mh_domain);        
        $c_data = $this->Manager_model->get_company_detailinfo($c_num);                   
        

        $type = $this->uri->segment(2);
        $this->load->view('Managerment_info', 
                    array(
                            'c_data'=>$c_data,
                            'm_data'=>$m_data,
                            'mh_data'=>$mh_data,
                            'type'=>$type
                        ));          
    }   

    //도메인상세정보
    function domain_detailinfo($c_num){
        $d_data = $this->Manager_model->get_domain_detailinfo($c_num);
        $c_data = $this->Manager_model->get_company_detailinfo($c_num);
        

        $type = $this->uri->segment(2);
        $this->load->view('Domain_info', 
                    array(
                            'c_data'=>$c_data,
                            'd_data'=>$d_data,
                            'type'=>$type
                        ));          
    }    
    //호스팅상세정보
    function hosting_detailinfo($c_num){
        $h_data = $this->Manager_model->get_hosting_detailinfo($c_num);     
        $c_data = $this->Manager_model->get_company_detailinfo($c_num);       
        $type = $this->uri->segment(2);
        $this->load->view('Hosting_info', 
                    array(
                            'c_data'=>$c_data,
                            'h_data'=>$h_data,
                            'type'=>$type
                        ));          
    }

    function c_name_check()
    {
        $test =  $this->input->post('c_name');
        if($test == null)
        {
            $this->form_validation->set_message('c_name_check', '업체이름은 필수 입력 사항입니다.');                
            return false;
        }else {
            return true;
        }
    }

    function c_domain_check($id)
    {
        //$test =  $this->input->post('c_domain');
        $result = $this->Manager_model->insert_companyinfo_check($id);                
      
        if($id == null){
            $this->form_validation->set_message('c_domain_check', '홈페이지 주소는 필수 입력 사항입니다.');                
            return false;
        }else if($id == $result['c_domain']){
        // }else if($result['c_domain'] == $id){
            $this->form_validation->set_message('c_domain_check', $id.'는 중복입니다.');                
            return false;

        }else {
            return true;
        }
    }

    function c_manager_check()
    {        
        $test =  $this->input->post('c_manager');
        if($test == null)
        {
            $this->form_validation->set_message('c_manager_check', '담당자는 필수 입력 사항입니다.');                
            return false;
        }else {
            return true;
        }
    }
    
    //업체 생성
    function insert_company()
    {
        $this->form_validation->set_rules('c_name', '업체이름', 'required|callback_c_name_check');
        $this->form_validation->set_rules('c_domain', '홈페이지', 'required|callback_c_domain_check');        
        $this->form_validation->set_rules('c_manager', '담당자', 'required|callback_c_manager_check');        

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('Insert_company');            
        }
        else
        {   
            $company_array = array(
                'c_name' => $this->input->post('c_name'),
                'c_manager' => $this->input->post('c_manager'),
                'c_tel' => $this->input->post('c_tel'),
                'c_phone' => $this->input->post('c_phone'),
                'c_mail' => $this->input->post('c_mail'),
                'c_domain' => $this->input->post('c_domain'),
                'c_hosting_check' => $this->input->post('hosting_check'),
                'c_domain_check' => $this->input->post('domain_check'),
                'c_managerment_check' => $this->input->post('managerment_check')                                        
            );                      

            $hosting_array = array(
                    'h_domain' => $this->input->post('c_domain'),
                    'h_name' => $this->input->post('hosting_name'),
                    'h_id' => $this->input->post('hosting_id'),
                    'h_pw' => $this->input->post('hosting_pw'),
                    'h_startdate' => $this->input->post('hosting_st_d'),
                    'h_enddate' => $this->input->post('hosting_ed_d'),
                    'h_ftpid' => $this->input->post('hosting_ftp_id'),
                    'h_ftppw' => $this->input->post('hosting_ftp_pw'),
                    'h_ftpmemo' => $this->input->post('hosting_ftpmemo'),
                    'h_dbid' => $this->input->post('hosting_db_id'),
                    'h_dbpw' => $this->input->post('hosting_db_pw')   
                 
            );

            $domain_array = array(
                'd_name' => $this->input->post('c_name'),
                'd_servicename' => $this->input->post('domain_servicename'),             
                'd_id' => $this->input->post('domain_id'),
                'd_pw' => $this->input->post('domain_pw'),
                'd_startdate' => $this->input->post('domain_st_d'),
                'd_enddate' => $this->input->post('domain_ed_d'),
                'd_memo' => $this->input->post('domain_memo')
            );

            $manager_array = array(
                'm_domain' => $this->input->post('c_domain'),                
                'm_startdate' => $this->input->post('managerment_st_d'),
                'm_enddate' => $this->input->post('managerment_ed_d')                
           );
                                            
            $this->Manager_model->insert_company_info($company_array,$hosting_array,$domain_array,$manager_array);                               
            redirect('/popup/insert_company','refresh');     
            
        }
    }
    //업체수정시 불러오기
    function detail_modify($type){        
        $c_num = $this->input->post('c_num');
        // $d_num = $this->input->post('c_num');
        // $h_num = $this->input->post('c_num');
        $mo_c_data = $this->Manager_model->get_company_detailinfo($c_num);
        $mo_d_data = $this->Manager_model->get_domain_detailinfo($c_num);
        $mo_h_data = $this->Manager_model->get_hosting_detailinfo($c_num);
        $mo_m_data = $this->Manager_model->get_manager_detailinfo($c_num);        

        $this->load->view('Main_rewrite', array(
            'mo_c_data'=>$mo_c_data,
            'mo_d_data'=>$mo_d_data,
            'mo_h_data'=>$mo_h_data,
            'mo_m_data'=>$mo_m_data,
            'type'=>$type
        ));        
    }
    //업체수정 저장
    function detail_modifysave($type){   

        $this->form_validation->set_rules('c_name', '업체명', 'required');        
        $this->form_validation->set_rules('c_manager', '담당자', 'required');

        $id = $this->input->post('c_num');
        $homepage = $this->input->post('c_domain');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('Main_rewrite');
        }else{  

        $company_array = array(
            'c_num'=> $this->input->post('c_num'),
            'c_name'=>$this->input->post('c_name'),
            'c_manager'=>$this->input->post('c_manager'),
            'c_tel'=>$this->input->post('c_tel'),
            'c_phone'=> $this->input->post('c_phone'),
            'c_mail'=>$this->input->post('c_mail'),
            'c_domain'=>$this->input->post('c_domain'),
            'c_memo'=>$this->input->post('c_memo')
        );
            if($type == 'domain_detailinfo' or $type == 'detailinfo' )
            {
                $domain_array = array(
                    'd_num'=>$this->input->post('d_num'),                    
                    'd_name'=>$this->input->post('d_name'),
                    'd_servicename'=>$this->input->post('d_servicename'),
                    'd_id'=>$this->input->post('d_id'),
                    'd_pw'=>$this->input->post('d_pw'),
                    'd_enddate'=>$this->input->post('d_enddate')
                );                            
            }else {
                $domain_array = array('');
            }

            if($type == 'manager_detailinfo' or $type == 'detailinfo')  
            {
                $manager_array = array(
                    'm_num'=>$this->input->post('m_num'),
                    'm_startdate'=>$this->input->post('m_startdate'),
                    'm_enddate'=>$this->input->post('m_enddate')
                );              
            }else {
                $manager_array = array('');
            }

            if($type == 'hosting_detailinfo' or $type == 'detailinfo')          
            {
                $hosting_array = array(
                    'h_num'=>$this->input->post('h_num'),
                    'h_domain'=>$this->input->post('h_domain'),
                    'h_name'=>$this->input->post('h_name'),
                    'h_id'=>$this->input->post('h_id'),
                    'h_pw'=>$this->input->post('h_pw'),                    
                    'h_startdate'=>$this->input->post('h_startdate'),
                    'h_enddate'=>$this->input->post('h_enddate'),
                    'h_ftpid'=>$this->input->post('h_ftpid'),
                    'h_ftppw'=>$this->input->post('h_ftppw'),
                    'h_ftpmemo'=>$this->input->post('h_ftpmemo'),
                    'h_dbid'=>$this->input->post('h_dbid'),
                    'h_dbpw'=>$this->input->post('h_dbpw')
                );             
            }else {
                $hosting_array = array('');
            }                            
            $this->Manager_model->update_content($company_array, $hosting_array, $domain_array, $manager_array,$type);                
            redirect(site_url("/popup/$type/$id/$homepage"), 'refresh');            
        }        
    }

    //관리내역생성
    function managerment_insert($id,$homepage){

        $this->form_validation->set_rules('mh_worker', '작성자', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {                  
            echo "<script>alert('등록에 실패했습니다.');</script>";   
            redirect(site_url("/popup/manager_detailinfo/$id/$homepage"), 'refresh');            
        }else{
            $managerment_array = array(
                'mh_domain' => $homepage,
                'mh_title'=> $this->input->post('mh_title'),
                'mh_text'=> $this->input->post('mh_text'),
                'mh_worker'=> $this->input->post('mh_worker')
               
            );

        $this->Manager_model->manager_insert($managerment_array);
            redirect(site_url("/popup/manager_detailinfo/$id/$homepage"), 'refresh');
        }
    }
    //관리내역 수정
    function managerment_modify($id,$homepage,$mh_num){       
      
        $mo_m_data = $this->Manager_model->get_managerment_detailinfo($mh_num);
        $this->load->view('Manager_rewrite', array('mo_m_data'=>$mo_m_data,'id'=>$id,'homepage'=>$homepage));

    }
    //관리내역 수정저장
    function managerment_modifysave(){       
        
        $manager_array = array(
            'mh_num'=> $this->input->post('mh_num'),
            'mh_worker'=>$this->input->post('mh_worker'),       
            'mh_text'=>$this->input->post('mh_text')
        );
        $this->Manager_model->manager_modifysave($manager_array);       

        $id = $this->input->post('id');
        $mh_domain = $this->input->post('homepage');
        redirect(site_url("/popup/manager_detailinfo/$id/$mh_domain"), 'refresh');
     }
}

