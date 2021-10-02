<?php defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) 
        {
            redirect('admin_login', 'refresh');
        }
    }
    
    public function index()
    {
        $data = array();
        $data['title'] = 'Dashboard';
        $data['dashboard'] = $this->load->view('admin/dashboard', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_date_time');
        $sdata['exception'] = 'You are Successfully Logout ';
        $this->session->set_userdata($sdata);
        redirect('admin_login');
    }
    
    public function edit_admin($admin_id) 
    {
        $data = array();
        $data['title'] = 'Edit Admin';
        $data['admin_info'] = $this->admin_model->select_admin_by_id($admin_id);
        $data['dashboard'] = $this->load->view('admin/edit_admin', $data, true);
        $sdata = array();
        $sdata['edit_admin'] = 'Update Admin Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_admin() 
    {
        $this->admin_model->update_admin_info();
        redirect('admin');
    }
    
    public function add_news()
    {
        $data = array();
        $data['title'] = 'Add News';
        $data['dashboard'] = $this->load->view('admin/add_news', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function save_news()
    {
        $data=array();
        $data['news_title'] = $this->input->post('news_title', true);
        $data['news'] = $this->input->post('news', true);
        $data['news_date'] = $this->input->post('news_date', true);  
        /** IF THEY DO NOT SELECT A IMAGE **/
            $cnt = 0;
            foreach ($_FILES as $eachFile)
            {
                if ($eachFile['size'] > 0)
                {

                    $config['upload_path'] = 'upload_image/news_image_' . $cnt . '/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '10240';
                    $config['max_width'] = '5000';
                    $config['max_height'] = '5000';
                    $error = '';
                    $fdata = array();
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('news_image_' . $cnt))
                    {
                        $error = $this->upload->display_errors();
                        echo $error;
                        exit();
                    } 
                    else 
                    {
                        $fdata = $this->upload->data();
                        $index = 'news_image_' . $cnt;
                        $up['main'] = $config['upload_path'] . $fdata['file_name'];
                    }        
                    /** START IMAGE RESIZE **/
                    $config['image_library'] = 'gd2';
                    $config['new_image'] = 'upload_image/news_image_' . $cnt . '/';
                    $config['source_image'] = $up['main'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['overwrite'] = TRUE;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = '640';
                    $config['height'] = '427';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    if (!$this->image_lib->resize()) {
                        $error = $this->image_lib->display_errors();
                        echo $error;
                        exit();
                    } else {
                        $index = 'news_image_' . $cnt;
                        $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                        unlink($fdata['full_path']);
                        }
                    /** END IMAGE RESIZE **/
                    }
                    $cnt++;
            }
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $this->admin_model->save_news_info($data);
        $sdata = array();
        $sdata['save_news'] = 'News Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_news');
    }
    
    public function manage_news()
    {
        $data = array();
        $data['title'] = 'Manage News';
        $data['all_news'] = $this->admin_model->select_all_news();
        $data['dashboard'] = $this->load->view('admin/manage_news', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_news($news_id) 
    {
        $data = array();
        $data['title'] = 'Edit News';
        $data['news_info'] = $this->admin_model->select_news_by_id($news_id);
        $data['dashboard'] = $this->load->view('admin/edit_news', $data, true);
        $sdata = array();
        $sdata['edit_news'] = 'Update News Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_news()
    {
        $this->admin_model->update_news_info();
        $sdata = array();
        $sdata['save_news'] = 'News Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_news');
    }

    public function delete_news($news_id) 
    {        
        $this->admin_model->delete_news_by_id($news_id);
        redirect('admin/manage_news');
    }
        
    public function add_slide()
    {
        $data = array();
        $data['title'] = 'Add Slide';
        $data['dashboard'] = $this->load->view('admin/add_slide', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_slide()
    {
        $data=array();
        $data['slide_text'] = $this->input->post('slide_text', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/slide_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('slide_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'slide_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/slide_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = true;
                $config['width'] = '786';
                $config['height'] = '521';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'slide_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $this->admin_model->save_slide_info($data);
        $sdata = array();
        $sdata['save_slide'] = 'Slide Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_slide');
    }
    
    public function manage_slider()
    {
        $data = array();
        $data['title'] = 'Manage Slider';
        $data['all_slide'] = $this->admin_model->select_all_slide();
        $data['dashboard'] = $this->load->view('admin/manage_slider', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_slide($slide_id) 
    {
        $data = array();
        $data['title'] = 'Edit Slide';
        $data['slide_info'] = $this->admin_model->select_slide_by_id($slide_id);
        $data['dashboard'] = $this->load->view('admin/edit_slide', $data, true);
        $sdata = array();
        $sdata['edit_slide'] = 'Update Slide Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_slide()
    {
        $data=array();
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/slide_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('slide_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'slide_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/slide_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = true;
                $config['width'] = '786';
                $config['height'] = '521';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'slide_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
		}
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['slide_text'] = $this->input->post('slide_text', true);
        $this->admin_model->update_slide_info($data);
        $sdata = array();
        $sdata['save_slide'] = 'Slide Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_slider');
    }
    
    public function delete_slide($slide_id) 
    {        
        $this->admin_model->delete_slide_by_id($slide_id);
        redirect('admin/manage_slider');
    }
    
    public function add_message()
    {
        $data = array();
        $data['title'] = 'Add Message';
        $data['dashboard'] = $this->load->view('admin/add_message', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_message()
    {
        $this->admin_model->save_message_info();
        $sdata = array();
        $sdata['save_message'] = 'Message Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_message');
    }
    
    public function manage_message()
    {
        $data = array();
        $data['title'] = 'Manage Messager';
        $data['all_message'] = $this->admin_model->select_all_message();
        $data['dashboard'] = $this->load->view('admin/manage_message', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_message($message_id) 
    {
        $data = array();
        $data['title'] = 'Edit Message';
        $data['message_info'] = $this->admin_model->select_message_by_id($message_id);
        $data['dashboard'] = $this->load->view('admin/edit_message', $data, true);
        $sdata = array();
        $sdata['edit_message'] = 'Update Message Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_message()
    {
        $this->admin_model->update_message_info();
        $sdata = array();
        $sdata['save_message'] = 'Message Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_message');
    }

    public function delete_message($message_id) 
    {        
        $this->admin_model->delete_message_by_id($message_id);
        redirect('admin/manage_message');
    }

    public function add_project()
    {
        $data = array();
        $data['title'] = 'Add Project';
        $data['dashboard'] = $this->load->view('admin/add_project', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_project()
    {
        $data=array();
        $data['project_name'] = $this->input->post('project_name', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/project_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('project_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'project_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/project_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = true;
                $config['width'] = '786';
                $config['height'] = '521';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'project_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['project_summery'] = $this->input->post('project_summery', true);
        $this->admin_model->save_project_info($data);
        $sdata = array();
        $sdata['save_project'] = 'Project Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_project');
    }
    
    public function manage_project()
    {
        $data = array();
        $data['title'] = 'Manage Project';
        $data['all_project'] = $this->admin_model->select_all_project();
        $data['dashboard'] = $this->load->view('admin/manage_project', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_project($project_id) 
    {
        $data = array();
        $data['title'] = 'Edit Project';
        $data['project_info'] = $this->admin_model->select_project_by_id($project_id);
        $data['dashboard'] = $this->load->view('admin/edit_project', $data, true);
        $sdata = array();
        $sdata['edit_project'] = 'Update Project Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_project()
    {
        $data=array();
        $data['project_name'] = $this->input->post('project_name', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/project_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('project_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'project_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/project_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = true;
                $config['width'] = '786';
                $config['height'] = '521';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'project_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
		}
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['project_summery'] = $this->input->post('project_summery', true);
        $this->admin_model->update_project_info($data);
        $sdata = array();
        $sdata['save_project'] = 'Project Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_project');
    }
    
    public function delete_project($project_id) 
    {        
        $this->admin_model->delete_project_by_id($project_id);
        redirect('admin/manage_project');
    }
    
    public function settings()
    {
        $data = array();
        $data['title'] = 'Settings';
        $data['home_page_address_info'] = $this->admin_model->select_home_page_address_info();
        $data['all_contact_page_address'] = $this->admin_model->select_all_contact_page_address();
        $data['dashboard'] = $this->load->view('admin/settings', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_home_address()
    {
        $this->admin_model->save_home_address_info();
        $sdata = array();
        $sdata['settings'] = 'Home Address Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/settings');
    }
    
    public function save_contact_page_address()
    {
        $this->admin_model->save_contact_page_address_info();
        $sdata = array();
        $sdata['settings'] = 'Contact Page Address Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/settings');
    }
    
    public function delete_address($address_id) 
    {
        $this->admin_model->delete_address_by_id($address_id);
        redirect('admin/settings');
    }
       
    public function about()
    {
        $data = array();
        $data['title'] = 'LabTrio';
        $data['dashboard'] = $this->load->view('admin/about', $data, true);
        $this->load->view('admin/master', $data);
    }
}