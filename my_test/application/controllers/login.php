<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
        {
         
            if($this->session->userdata('logged_in')=="" && $this->session->userdata('user_name')=="")
		{
                
                
                
                        $this->form_validation->set_rules('user_name', 'user_name', 'trim|required');
			$this->form_validation->set_rules('user_pwd', 'user_pwd', 'trim|required');
                        
                        if ($this->form_validation->run() == FALSE)
			{
                            $this->landing();
				//$this->load->view('login',$d);
                             //echo 'false';
			}
			else
                        {
                            ///login credential
                                $data['user_name'] = $this->input->post('user_name');
				$data['user_pwd'] = md5($this->input->post('user_pwd'));
				                                
                                $d['login'] = $this->m_login->verifyLogin($data);
                                
                                 if (!empty($d['login']))
                                {  
                                    foreach ($d['login'] as $row) 
                                    {  
                                       $sess_data['logged_in'] = 'oklogin';
                                       $sess_data['user_name'] = $row['user_name']; 
                                       $sess_data['user_level'] = $row['user_level'];  
                                       $sess_data['user_email'] = $row['user_email'];
                                       
                                       $this->session->set_userdata($sess_data);
                                       
                                    }
                                   
                                    

                                    $this->session->sess_expire_on_close = TRUE;

                                } 
                                else 
                                {
                                       $sess_data['logged_in'] = '';
                                       $sess_data['nama'] = '';
                                       $sess_data['user_level'] = '';
                                       $sess_data['user_email'] = '';
                                    
                                   // flash data set dekat model :D
                                   
                                }
                            
                        }//2 admin 1 normal user
                        if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_level')=="2")
                                    {
                                           header('location:'.base_url().'process_room.html'); 
                                          
                                           
                                    }
                                    else if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_level')=="1"){
                                           header('location:'.base_url().'book_room.html');  
                                           
                                    }
			
                }
                
                 
                if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_level')=="2")
                                    {
                                           header('location:'.base_url().'process_room.html');    
                                           
                                    }
                                    elseif ($this->session->userdata('logged_in')!="" && $this->session->userdata('user_level')=="1") {
                                           header('location:'.base_url().'book_room.html');  
     
                                }
            }
            
            public function landing(){
            $this->load->view('v_header');
            //$this->load->view('v_navbar');
            $this->load->view('v_landing');
            //$this->load->view('v_footer');
            }
            
            public function logout(){
                
                session_destroy();
		//session_start();
		
		header('location:'.base_url().'logon.html'); 
            }
        }
