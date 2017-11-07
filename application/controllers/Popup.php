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

    function insert_comapany()
    {
        $this->form_validation->set_rules('c_name', '업체이름', 'required');
        $this->form_validation->set_rules('c_homepage', '홈페이지', 'required');
        $this->form_validation->set_rules('c_manager', '담당자', 'required');
        $this->form_validation->set_rules('c_tel', '담당자 전화번호', 'required');

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
                // 'd_servicename' => $this->input->post('hosting_ftp_pw')
                // 'd_name' => $this->input->post('hosting_name'),
                'd_startdate' => $this->input->post('domain_st_d'),
                'd_enddate' => $this->input->post('domain_ed_d')
                // 'd_ftpid' => $this->input->post('hosting_ftp_id'),
                // 'd_ftppw' => $this->input->post('hosting_ftp_pw')                                   
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
  
            redirect(site_url('/main/site_info'), 'refresh');
    }
        
    }



}

