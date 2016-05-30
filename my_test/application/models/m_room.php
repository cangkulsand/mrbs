<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_room extends CI_Model {
    
    function booking_list($en_create_by){
        
        $query = $this->db->query("SELECT * FROM mrbs_entry,mrbs_cafe WHERE en_create_by='".$en_create_by."' AND en_receipt IS NULL AND en_status = 1 AND mrbs_entry.en_cafe_id IS NOT NULL AND mrbs_entry.en_cafe_id = mrbs_cafe.cafe_id" );

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

    function checkroom($room_id){
                
                $query = $this->db->query("SELECT * FROM mrbs_room WHERE room_id=".$room_id );

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
            
            function accept_cafe($cafe_id){
                
                $query = $this->db->query("SELECT cafe_name FROM mrbs_cafe where cafe_id = ".$cafe_id);

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
                    
            
            
            function allmonth(){
                
                $query = $this->db->query("SELECT * FROM mrbs_month");

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
            
            function room_detail($room_id){
                
                $query = $this->db->query("SELECT * FROM mrbs_room WHERE room_id=".$room_id);

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
            
            function roomapplication($room_id,$month){
                
                $query = $this->db->query("SELECT * FROM mrbs_entry,mrbs_month WHERE en_room_id=".$room_id." AND MONTH(en_start_time)=".$month." AND mrbs_month.month_id=".$month);

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
            
             function user_booking_room_list($room_id,$month){
                
                $query = $this->db->query("SELECT * FROM mrbs_entry,mrbs_month WHERE en_room_id=".$room_id." AND MONTH(en_start_time)=".$month." AND mrbs_month.month_id=".$month." AND en_status=2");

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
            
            function book_detail($booking_id){
                
                $query = $this->db->query("SELECT * FROM mrbs_entry,mrbs_user,mrbs_cafe WHERE en_id=".$booking_id." AND mrbs_entry.en_create_by=mrbs_user.user_name AND mrbs_entry.en_cafe_id=mrbs_cafe.cafe_id" );

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
            
            function book_detail_first($booking_id){
                
                $query = $this->db->query("SELECT * FROM mrbs_entry,mrbs_user WHERE en_id=".$booking_id." AND mrbs_entry.en_create_by=mrbs_user.user_name" );

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