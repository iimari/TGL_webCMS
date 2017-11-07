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

    }
    //업체상세정보
    function detailinfo($c_num){
        $data = $this->Manager_model->get_company_detailinfo($c_num);
        $this->load->view('Company_info', array('data'=>$data));              
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

    function c_homepage_check()
    {
        $test =  $this->input->post('c_homepage');
        if($test == null)
        {
            $this->form_validation->set_message('c_homepage_check', '홈페이지 주소는 필수 입력 사항입니다.');                
            return false;
        }else {
            return true;
        }
    }

    function insert_comapany()
    {
        $this->form_validation->set_rules('c_name', '업체이름', 'required|callback_c_name_check');
        $this->form_validation->set_rules('c_homepage', '홈페이지', 'required|callback_c_homepage_check');        

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('insert_company');            
        }
        else
        {   
            $company_array = array(
                'c_name' => $this->input->post('c_name'),
                'c_homepage' => $this->input->post('c_homepage'),
                'c_fax' => $this->input->post('c_fax'),
                'c_tel' => $this->input->post('c_tel'),                
                'c_manager' => $this->input->post('c_manager'),
                'c_phone' => $this->input->post('c_phone'),
                'c_mail' => $this->input->post('c_mail'),
                'c_hosting_check' => $this->input->post('hosting_check'),
                'c_domain_check' => $this->input->post('domain_check'),
                'c_managerment_check' => $this->input->post('managerment_check'),                                         
            );                      

            $hosting_array = array(
                    'h_homepage' => $this->input->post('c_homepage'),
                    'h_name' => $this->input->post('hosting_name'),
                    'h_startdate' => $this->input->post('hosting_st_d'),
                    'h_enddate' => $this->input->post('hosting_ed_d'),
                    'h_ftpid' => $this->input->post('hosting_ftp_id'),
                    'h_ftppw' => $this->input->post('hosting_ftp_pw'),
                    'h_dbid' => $this->input->post('hosting_db_id'),
                    'h_dbpw' => $this->input->post('hosting_db_pw')                    
            );

            $domain_array = array(
                'd_homepage' => $this->input->post('c_homepage'),
                'd_servicename' => $this->input->post('domain_servicename'),
                'd_name' => $this->input->post('domain_name'),
                'd_id' => $this->input->post('domain_id'),
                'd_pw' => $this->input->post('domain_pw'),
                'd_startdate' => $this->input->post('domain_st_d'),
                'd_enddate' => $this->input->post('domain_ed_d')                                          
            );

            $manager_array = array(
                'm_homepage' => $this->input->post('c_homepage'),                
                'm_startdate' => $this->input->post('managerment_st_d'),
                'm_enddate' => $this->input->post('managerment_ed_d'),                
           );
                                            
            $this->Manager_model->insert_company_info($company_array,$hosting_array,$domain_array,$manager_array);                               
            redirect('/popup/insert_comapany','refresh');     
            
        }
    }
    //업체수정시 불러오기
    function detail_modify(){
        $c_num = $this->input->post('c_num');
        $mo_data = $this->Manager_model->get_company_detailinfo($c_num);
        $this->load->view('Main_rewrite', array('mo_data'=>$mo_data));

    }
    function detail_modifysave(){
       
        $this->form_validation->set_rules('c_name', '업체명', 'required');        
        $this->form_validation->set_rules('c_manager', '담당자', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('Main_rewrite');
        }else{   
        $data_num = $this->Manager_model->update_content(
            $this->input->post('c_num'),
            $this->input->post('c_name'),
            $this->input->post('c_manager'),
            $this->input->post('c_phone'),
            $this->input->post('c_mail'),
            $this->input->post('c_fax'),
            $this->input->post('c_homepage'),
            $this->input->post('c_bigo1'),
            $this->input->post('c_createdate'));              
    }
        
    }



}

