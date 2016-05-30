<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('v_home');
		//$this->selectRoom();
	}
        
        
            
        public function signup(){
            $this->load->view('v_header');
            //$this->load->view('v_navbar');
            $this->load->view('v_signup');
            //$this->load->view('v_footer');
            }
    
              
            
//        public function createArea(){
//            $this->load->view('v_header');
//            $this->load->view('v_navbar');  
//            $this->load->view($data,'v_createarea');
//             $this->load->view('v_footer');
//            }
            
       
            
        
  
            
        
            
        public function proRoom(){
            $this->load->view('v_header');
            $this->load->view('v_navbar');
            $this->load->view('v_proroom');
            $this->load->view('v_footer');
            }
            
      
            
        public function uploadReceipt(){
            $this->load->view('v_header');
            $this->load->view('v_navbar');
            $this->load->view('v_uploadreceipt');
             $this->load->view('v_footer');
            }
            
            
        public function test(){
            $this->load->view('v_header');
           // $this->load->view('v_navbar');
            $this->load->view('v_test2');
             //$this->load->view('v_footer');
            }
            
            
            public function meterialdesign(){
            //$this->load->view('v_header');
           // $this->load->view('v_navbar');
            $this->load->view('v_home');
             //$this->load->view('v_footer');
            }
}
