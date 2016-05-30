<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model {
    
            function  all_active_room(){

                $query = $this->db->query("SELECT * FROM mrbs_room where room_status = 1");

                $num = $query->num_rows();


                $data = array();
                $num = $query->num_rows(); 
                if($num > 0) 
                {
                    //testing : utk lihat data diselect
                   foreach ($query->result_array() as $row) 
                    {
                       //echo $row['cdefectcat14'];
                       $data[] = $row;
                    }  
                    return $data;
                    //tamat testing     
                }

                $query->free_result();
                return $data;


            }
            
            
            function all_room(){
                
                $query = $this->db->query("SELECT * FROM mrbs_room");

                $num = $query->num_rows();


                $data = array();
                $num = $query->num_rows(); 
                if($num > 0) 
                {
                    //testing : utk lihat data diselect
                   foreach ($query->result_array() as $row) 
                    {
                       //echo $row['cdefectcat14'];
                       $data[] = $row;
                    }  
                    return $data;
                    //tamat testing     
                }

                $query->free_result();
                return $data;
            }
            
            
    
    
    
    
}