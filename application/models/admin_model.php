<?php

class Admin_Model extends CI_Model {
    
    public function select_admin_by_id($admin_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_id',$admin_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_admin_info()
    {
        $data=array();
        $data['admin_name'] = $this->input->post('admin_name', true);
        $data['admin_email'] = $this->input->post('admin_email', true);
        $data['admin_password'] = $this->input->post('admin_password', true);
        $data['admin_level'] = $this->input->post('admin_level', true);
        $data['admin_status'] = $this->input->post('admin_status', true);
        $admin_id=$this->input->post('admin_id',true);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin',$data);
    }
    
    public function save_news_info($data)
    {
        $this->db->insert('tbl_news',$data);
    }
    
    public function select_all_news()
    {
        $sql = "SELECT * FROM tbl_news";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_news_by_id($news_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id',$news_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_news_info()
    {
        $data=array();
        $data['news_title'] = $this->input->post('news_title', true);
        $data['news'] = $this->input->post('news', true);
        $data['news_date'] = $this->input->post('news_date', true); 
        $news_id = $this->input->post('news_id', true);
        $this->db->where('news_id',$news_id);
        $this->db->update('tbl_news',$data);
    }
    
    public function delete_news_by_id($news_id)
    {
        $this->db->where('news_id',$news_id);
        $this->db->delete('tbl_news');
    }

    public function save_slide_info($data)
    {
        $this->db->insert('tbl_slide',$data);
    }
    
    public function select_all_slide()
    {
        $this->db->select('*');
        $this->db->from('tbl_slide');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_slide_by_id($slide_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_slide');
        $this->db->where('slide_id',$slide_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_slide_info($data)
    {
        $slide_id=$this->input->post('slide_id',true);
        $this->db->where('slide_id',$slide_id);
        $this->db->update('tbl_slide',$data);
    }
    
    public function delete_slide_by_id($slide_id)
    {
        $this->db->where('slide_id',$slide_id);
        $this->db->delete('tbl_slide');
    }
    
    public function save_message_info()
    {
        $data=array();
        $data['message'] = $this->input->post('message', true);
        $this->db->insert('tbl_message',$data);
    }
    
    public function select_all_message()
    {
        $this->db->select('*');
        $this->db->from('tbl_message');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_message_by_id($message_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_message');
        $this->db->where('message_id',$message_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_message_info()
    {
        $data=array();
        $data['message'] = $this->input->post('message', true);
        $message_id=$this->input->post('message_id',true);
        $this->db->where('message_id',$message_id);
        $this->db->update('tbl_message',$data);
    }
    
    public function delete_message_by_id($message_id)
    {
        $this->db->where('message_id',$message_id);
        $this->db->delete('tbl_message');
    }
    
    public function save_project_info($data)
    {
        $this->db->insert('tbl_project',$data);
    }
    
    public function select_all_project()
    {
        $this->db->select('*');
        $this->db->from('tbl_project');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_project_by_id($project_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_project');
        $this->db->where('project_id',$project_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_project_info($data)
    {
        $project_id=$this->input->post('project_id',true);
        $this->db->where('project_id',$project_id);
        $this->db->update('tbl_project',$data);
    }
    
    public function delete_project_by_id($project_id)
    {
        $this->db->where('project_id',$project_id);
        $this->db->delete('tbl_project');
    }
    
    public function select_home_page_address_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_address');
        $this->db->where('address_type',1);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function select_all_contact_page_address()
    {
        $this->db->select('*');
        $this->db->from('tbl_address');
        $this->db->where('address_type',2);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function save_home_address_info()
    {
        $data=array();
        $data['name'] = $this->input->post('name', true);
        $data['phone'] = $this->input->post('phone', true);
        $data['fax'] = $this->input->post('fax', true);
        $data['email'] = $this->input->post('email', true);
        $data['website'] = $this->input->post('website', true);
        $this->db->where('address_type',1);
        $this->db->update('tbl_address',$data);
    }
    
    public function save_contact_page_address_info()
    {
        $data=array();
        $data['name'] = $this->input->post('name', true);
        $data['phone'] = $this->input->post('phone', true);
        $data['fax'] = $this->input->post('fax', true);
        $data['email'] = $this->input->post('email', true);
        $data['website'] = $this->input->post('website', true);
        $data['address_type'] = 2;
        $this->db->insert('tbl_address',$data);
    }
    
    public function delete_address_by_id($address_id)
    {
        $this->db->where('address_id',$address_id);
        $this->db->delete('tbl_address');
    }
}