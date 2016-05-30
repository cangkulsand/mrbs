<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
        public function registeruser(){
            
            if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{
            $this->load->view('v_header');
            $this->load->view('v_navbar');
            $this->load->view('v_registeruser');
            $this->load->view('v_footer');
            
            //header('location:'.base_url().'user_list.html');
                }
                else{ 
                    header('location:'.base_url().'logon.html'); }
            }
            
        public function createuser(){
            
            if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{
            $in['user_name'] = $this->input->post('user_name');
            $in['user_email'] = $this->input->post('user_email');
            $in['user_level'] = $this->input->post('user_level');
            $in['user_pwd'] = md5($this->input->post('user_pwd'));
            
            $this->db->insert("mrbs_user",$in);
            
            header('location:'.base_url().'user_list.html');
                } 
                else{
                    
                    header('location:'.base_url().'logon.html'); 
                }
        }
        
        public function signupuser(){
            
            
            $in['user_name'] = $this->input->post('user_name');
            $in['user_email'] = $this->input->post('user_email');
            $in['user_level'] = $this->input->post('user_level');
            $in['user_pwd'] = md5($this->input->post('user_pwd'));
            
            $this->db->insert("mrbs_user",$in);
            
            header('location:'.base_url().'logon.html');
               
        }
        
        public function userlist(){
            
            if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{
                
            $this->load->view('v_header');
            $this->load->view('v_navbar');

            $data['alluser'] = $this->m_user->all_user();
            
            $this->load->view('v_listuser',$data);
            $this->load->view('v_footer');
                
                
            
           // header('location:'.base_url().'load_cafe.html');
                } 
                else{
                    
                    header('location:'.base_url().'logon.html'); 
                }
        }
            
}
