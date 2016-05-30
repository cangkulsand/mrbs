<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

    function verifyLogin($data){
                $this -> db -> select('*');
		$this -> db -> from('mrbs_user');
		$this -> db -> where('user_name', $data['user_name']);
		$this -> db -> where('user_pwd', $data['user_pwd']);
                //$this -> db -> where('status11', 1);
                $this -> db -> limit(1);
		
                $query = $this -> db -> get();
                
                
                
                foreach ($query->result_array() as $row) 
                {
                  $status = $row['user_status'];
                }
                                
                if($status==NULL)//jika password salah nilai status = null..gunakan if ini
                {
                   $this->session->set_flashdata('result_login', "lihat pada view");
                   header('location:'.base_url().'');
                }
                else if($status==0)//jika password betul tetapi status pasif..gunakan else if ini
                {
                   $this->session->set_flashdata('status_login', "lihat pada view");
                   header('location:'.base_url().'');
                }
                else//jika berjaya semua condition :)
                {
                  
                    $num = $query->num_rows(); 
                    $data = array();
                    
                    if($num > 0) 
                    {
                        //testing : utk lihat data ada
                       foreach ($query->result_array() as $row) 
                        {
                          $data[] = $row;
                        }  
                        return $data;
                        //tamat testing     
                    }
                    else 
                    {
                        echo $num;
                     //$this->session->set_flashdata('result_login', "lihat pada view");
                    // header('location:'.base_url().'');   
                    }
                
                }

	}
            
    
    
    
    
}