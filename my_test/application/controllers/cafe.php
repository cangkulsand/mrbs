<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cafe extends CI_Controller {
    
    
     public function loadCafe(){
         
          if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{
              
            $this->load->view('v_header');
            $this->load->view('v_navbar');

            $data['allcafe'] = $this->m_cafe->all_cafe();
            
            $this->load->view('v_createCafe',$data);
            $this->load->view('v_footer');
                }
                
                else{
                    
                    header('location:'.base_url().'logon.html'); 
                }
            
            }
            
    public function statusupdate(){
       
    
                              
                    /***** semak maklumat cafe************/
                    $d['cafe_id'] =  $this->uri->segment(3);
                    
                    $d['cafe_info'] = $this->m_cafe->checkcafe($d['cafe_id']);
            
            
           if (!empty($d['cafe_info'])){
               foreach ($d['cafe_info'] as $row) 
                        {  
                           $d['cafe_status'] = $row['cafe_status'];
    
                        }
                        
            if($d['cafe_status'] == 1){
                            
                        $data = array(
                                   'cafe_status' => 2,
                                );

                    $this->db->where('cafe_id', $d['cafe_id']);
                    $this->db->update('mrbs_cafe', $data); 

            header('location:'.base_url().'load_cafe.html'); 
                            
                        }else{
                            
                        $data = array(
                                   'cafe_status' => 1,
                                );

                    $this->db->where('cafe_id', $d['cafe_id']);
                    $this->db->update('mrbs_cafe', $data); 
                    
                    
            header('location:'.base_url().'load_cafe.html'); 
            
                        }
           }else{
               echo 'haha';
            }
            
       
       
            
            
          
   }
            
            

         public function createCafe(){
        
        
         if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{
            $in['cafe_name'] = $this->input->post('cafe_name');
            $in['cafe_phone'] = $this->input->post('cafe_phone');
            $in['cafe_desc'] = $this->input->post('cafe_desc');
            
            $this->db->insert("mrbs_cafe",$in);
            
            header('location:'.base_url().'load_cafe.html');
                } 
                else{
                    
                    header('location:'.base_url().'logon.html'); 
                }
             
        
    }
    
    
}
