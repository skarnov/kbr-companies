<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        
    public function index()
    {
        $data = array();
        $data['title'] = 'Home';
        $data['all_slide'] = $this->admin_model->select_all_slide();
        $data['all_message'] = $this->admin_model->select_all_message();
        $data['all_news'] = $this->admin_model->select_all_news();
        $data['all_project'] = $this->home_model->select_all_project_with_text_limit();
        $data['home_page_address_info'] = $this->admin_model->select_home_page_address_info();
        $data['nav'] = $this->load->view('nav', $data, true);
        $data['home'] = $this->load->view('home', $data, true);
        $this->load->view('master', $data);
    }
    
    public function news_details($news_id)
    {
        $data = array();
        $data['all_slide'] = $this->admin_model->select_all_slide();
        $data['all_message'] = $this->admin_model->select_all_message();
        $data['all_news'] = $this->admin_model->select_all_news();
        $data['news_info'] = $this->admin_model->select_news_by_id($news_id);
        $data['title'] = $data['news_info']->news_title;
        $data['all_project'] = $this->home_model->select_all_project_with_text_limit();
        $data['home_page_address_info'] = $this->admin_model->select_home_page_address_info();
        $data['nav'] = $this->load->view('nav-news', $data, true);
        $data['home'] = $this->load->view('news_details', $data, true);
        $this->load->view('master', $data);
    }
    
    public function project_details($project_id)
    {
        $data = array();
        $data['all_slide'] = $this->admin_model->select_all_slide();
        $data['all_message'] = $this->admin_model->select_all_message();
        $data['all_news'] = $this->admin_model->select_all_news();
        $data['all_project'] = $this->home_model->select_all_project_with_text_limit();
        $data['home_page_address_info'] = $this->admin_model->select_home_page_address_info();
        $data['project_info'] = $this->admin_model->select_project_by_id($project_id);
        $data['title'] = $data['project_info']->project_name;
        $data['nav'] = $this->load->view('nav-project', $data, true);
        $data['home'] = $this->load->view('project_details', $data, true);
        $this->load->view('master', $data);
    }
    
    public function about_us()
    {
        $data = array();
        $data['title'] =  'About Us';
        $data['nav'] = $this->load->view('nav-about_us', $data, true);
        $data['all_project'] = $this->home_model->select_all_project_with_text_limit();
        $data['home_page_address_info'] = $this->admin_model->select_home_page_address_info();
        $data['home'] = $this->load->view('about_us', $data, true);
        $this->load->view('master', $data);
    }
    
    public function our_projects()
    {
        $data = array();
        $data['title'] = 'Our Projects';
        $data['all_project'] = $this->home_model->select_all_project_with_text_limit();
        $data['sidebar_project'] = $this->home_model->select_all_project_with_text_limit();
        $data['home_page_address_info'] = $this->admin_model->select_home_page_address_info();
        $data['nav'] = $this->load->view('nav-project', $data, true);
        $data['home'] = $this->load->view('our_projects', $data, true);
        $this->load->view('master', $data);
    }
    
    public function news()
    {
        $data = array();
        $data['title'] = 'News';
        $data['all_news'] = $this->home_model->select_all_news_with_text_limit();
        $data['all_project'] = $this->home_model->select_all_project_with_text_limit();
        $data['home_page_address_info'] = $this->admin_model->select_home_page_address_info();
        $data['nav'] = $this->load->view('nav-news', $data, true);
        $data['home'] = $this->load->view('news', $data, true);
        $this->load->view('master', $data);
    }
    
    public function contact_us()
    {
        $data = array();
        $data['title'] = 'Contact Us';
        $data['all_project'] = $this->home_model->select_all_project_with_text_limit();
        $data['all_contact_page_address'] = $this->admin_model->select_all_contact_page_address();
        $data['home_page_address_info'] = $this->admin_model->select_home_page_address_info();
        $data['nav'] = $this->load->view('nav-contact_us', $data, true);
        $data['home'] = $this->load->view('contact_us', $data, true);
        $this->load->view('master', $data);
    }
    
    public function contact()
    {
        $mdata = array(); 
        $mdata['name'] = $this->input->post('name', true);
        $mdata['phone'] = $this->input->post('phone', true);
        $mdata['email'] = $this->input->post('email', true);
        $mdata['subject'] = $this->input->post('subject', true);
        $mdata['message'] = $this->input->post('message', true);
        $mdata['from_address'] = $mdata['email'];
        $mdata['admin_full_name'] = 'KBR - Contact Us';
        $mdata['to_address'] = 'subscriber@kbrcompanies.com';
        $mdata['subject'] = 'KBR - New Query';
        $this->mailer_model->sendEmail($mdata, 'contact');
        $sdata = array();
        $sdata['message'] = 'Message Sent';
        $this->session->set_userdata($sdata);
        redirect('home/contact_us');
    }
}