<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Popup extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');        
        $this->load->driver('cache');
        $this->load->library('form_validation');
         //모델 호출
        $this->load->model('Manager_model');        

    }
    //업체상세정보
    function detailinfo($c_num){
        $data = $this->Manager_model->get_company_detailinfo($c_num);
        $this->load->view('Company_info', array('data'=>$data));
       
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

