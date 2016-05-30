<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_cafe extends CI_Model {
    
    function all_cafe(){
                
                $query = $this->db->query("SELECT * FROM mrbs_cafe");

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
            
            function checkcafe($cafe_id){
                
                $query = $this->db->query("SELECT * FROM mrbs_cafe WHERE cafe_id=".$cafe_id );

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