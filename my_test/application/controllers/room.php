<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {
    
      public function bookRoom(){
          
          if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
                {
                    $this->load->view('v_header');
            $this->load->view('v_navbar');
            
           $d['room_id'] =  $this->uri->segment(2);
                    
            
            $data['all_month'] = $this->m_room->allmonth();
            $data['room_detail'] = $this->m_room->room_detail($d['room_id']);
            $data['all_data'] = array();
            //$data['month'] = array(1=>"jan", 2=>"feb", 3=>"mac",4=>"apr", 5=>"may",6=>"jun",7=>"jul",8=>"aug",9=>"sep",10=>"oct",11=>"nov",12=>"dec");
            
            for($month=1;$month <=12;$month++){
                $data_temp = $this->m_room->user_booking_room_list($d['room_id'],$month);
                
                
                array_push($data['all_data'],$data_temp);
              
            }
            
            foreach($data['room_detail'] as $row){
                $data['room_name'] = $row['room_name'];
                $data['room_id'] = $row['room_id'];
            }
            
            
            
            $this->load->view('v_book_room',$data);
            
            
             $this->load->view('v_footer');
              
                } else{
                    
                    header('location:'.base_url().'logon.html'); 
            
            }
            
            }
            
            public function savebooking(){
                
                if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
                {
                    
//                    $in['en_name'] = $this->input->post('en_name');
//                    $in['en_desc'] = $this->input->post('en_desc');
//                    $in['en_participant'] = $this->input->post('en_participant');
//                    $in['en_start_time'] = $this->input->post('en_start_time');
//                    $in['en_end_time'] = $this->input->post('en_end_time');
                    
                    if($this->input->post('en_refreshment_bf') == "on"){
                    $bf = 1;
                    }
                    else{
                     $bf = 0;   
                    }
                    if($this->input->post('en_refreshment_ln') == "on"){
                    $ln = 1;
                    }
                    else{
                        $ln = 0;
                    }
                    if($this->input->post('en_refreshment_tb') == "on"){
                    $tb = 1;
                    }
                    else{
                        $tb=0;
                    }
                    
                    $data = array(
                        'en_name' => $this->input->post('en_name'),
                        'en_create_by' => $this->session->userdata('user_name'),
                        'en_room_id' => $this->input->post('en_room_id'),
                        'en_desc' => $this->input->post('en_desc'),
                        'en_participant' => $this->input->post('en_participant'),
                        'en_start_time' => date('%d/%M/%Y %H:%i', strtotime($this->input->post('en_start_time'))),
                       // 'en_start_time' => date(STR_TO_DATE( $this->input->post('en_start_time'), '%d/%M/%Y %H:%i' )) ,
                       // 'en_end_time' =>  date(STR_TO_DATE( $this->input->post('en_end_time'), '%d/%M/%Y %H:%i' )),
                        'en_end_time' => date('Y-m-d', strtotime($when)),
                        'en_refreshment_bf' => $bf,
                        'en_refreshment_ln' => $ln,
                        'en_refreshment_tb' => $tb,
                        
                    );
                    
                    //var_dump($data);
                    $this->db->insert("mrbs_entry",$data);
                    
            
            //header('location:'.base_url().'load_room.html');
                    
                }else{
                    
                    header('location:'.base_url().'logon.html'); 
            
            }
                
            
                
                
            }
   
    
     public function selectRoom(){
         
         if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{
            $this->load->view('v_header');
            $this->load->view('v_navbar');
 
            $data['allroom'] = $this->m_home->all_active_room();

            $this->load->view('v_selroom',$data);
            $this->load->view('v_footer');
            }
              else{
                    
                    header('location:'.base_url().'logon.html'); 
            
            }
     }
    
    public function selToProRoom(){
        
         if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{  
            $this->load->view('v_header');
            $this->load->view('v_navbar');
            
            $data['allroom'] = $this->m_home->all_active_room();
            
            $this->load->view('v_seltoproroom',$data);
            $this->load->view('v_footer');
                 }
                else{
                    
                    header('location:'.base_url().'logon.html'); 
            
            }
    }      
            
     public function loadroom(){
         
         if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{  
            $this->load->view('v_header');
            $this->load->view('v_navbar');
            
            $data['allroom'] = $this->m_home->all_room();
            
            $this->load->view('v_createroom',$data);
            $this->load->view('v_footer');
                }
            else{
                    
                    header('location:'.base_url().'logon.html'); 
            
            }
            }
      
            
            
            
            
    public function statusupdate(){
                  /***** semak maklumat room************/
                    $d['room_id'] =  $this->uri->segment(3);
                    
                    $d['room_info'] = $this->m_room->checkroom($d['room_id']);
            
            
           if(!empty($d['room_info'])){
               foreach ($d['room_info'] as $row) 
                        {  
                           $d['room_status'] = $row['room_status'];
    
                        }
                        
            if($d['room_status'] == 1){
                            
                        $data = array(
                                   'room_status' => 2,
                                );

                    $this->db->where('room_id', $d['room_id']);
                    $this->db->update('mrbs_room', $data); 

            header('location:'.base_url().'load_room.html'); 
                            
                        }else{
                            
                        $data = array(
                                   'room_status' => 1,
                                );

                    $this->db->where('room_id', $d['room_id']);
                    $this->db->update('mrbs_room', $data); 
                    
                    
            header('location:'.base_url().'load_room.html'); 
            
                        }
           }else{
               echo 'haha';
            }
   
        }
   
  public function createRoom(){
        
        
         if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{
             
            $in['room_name'] = $this->input->post('room_name');
            $in['room_cap'] = $this->input->post('room_cap');
            $in['room_pic'] = $this->input->post('room_pic');
            $in['room_pic_email'] = $this->input->post('room_pic_email');
            $in['room_pic_phone'] = $this->input->post('room_pic_phone');
            $in['room_desc'] = $this->input->post('room_desc');
            
            $this->db->insert("mrbs_room",$in);
            
            header('location:'.base_url().'load_room.html');
                } 
                else{
                    
                    header('location:'.base_url().'logon.html'); 
                }

    }
    
        
            public function roomapplication(){
                
            $d['room_id'] =  $this->uri->segment(2);
                    
                 
                  
            $this->load->view('v_header');
            $this->load->view('v_navbar');
            
            $data['all_month'] = $this->m_room->allmonth();
            $data['room_detail'] = $this->m_room->room_detail($d['room_id']);
            $data['all_data'] = array();
            //$data['month'] = array(1=>"jan", 2=>"feb", 3=>"mac",4=>"apr", 5=>"may",6=>"jun",7=>"jul",8=>"aug",9=>"sep",10=>"oct",11=>"nov",12=>"dec");
            
            for($month=1;$month <=12;$month++){
                $data_temp = $this->m_room->roomapplication($d['room_id'],$month);
                
                
                array_push($data['all_data'],$data_temp);
              
            }
            
            foreach($data['room_detail'] as $row){
                $data['room_name'] = $row['room_name'];
            }
            
           //var_dump($data['all_data']);
            
            
            $this->load->view('v_roomapplication',$data);
             $this->load->view('v_footer');
                  
                
            }
            
            
            
            
           public function proRoomDetail(){
               
           $d['booking_id'] =  $this->uri->segment(2);    
               
            $this->load->view('v_header');
            $this->load->view('v_navbar');
            
            $data['all_cafe'] = $this->m_cafe->all_cafe();
            
            $check_data['check_booking_status'] = $this->m_room->book_detail_first($d['booking_id']);
            
            foreach ($check_data['check_booking_status'] as $row) 
                    {
                    $status = $row['en_status'];
                    $receipt = $row['en_receipt'];
                    $cafe_id = $row['en_cafe_id'];
                    }
                    
                    
                    //mula2 mohon
                    if($status == 1 && $receipt == NULL && $cafe_id == NULL){
                        
                        $data['booking_detail'] = $this->m_room->book_detail_first($d['booking_id']);
                            foreach ($data['booking_detail'] as $row) 
                                { 
                                    $data['en_create_by'] = $row['en_create_by'];
                                    $data['en_name'] = $row['en_name'];
                                    $data['user_email'] = $row['user_email'];
                                    $data['en_participant'] = $row['en_participant'];
                                    $data['en_start_time'] = $row['en_start_time'];
                                    $data['en_end_time'] = $row['en_end_time'];
                                    $data['en_refreshment_bf'] = $row['en_refreshment_bf'];
                                    $data['en_refreshment_ln'] = $row['en_refreshment_ln'];
                                    $data['en_refreshment_tb'] = $row['en_refreshment_tb'];
                                    $data['en_id'] = $row['en_id'];
                                    $data['en_receipt'] = "";
                                    
                                    $data['en_status'] = $row['en_status'];
                                }
                    }
                    //dah mohon dan dah pilih cafe dan dah upload receipt
                    elseif($status == 1 && $receipt != NULL && $cafe_id != NULL){
                           
                            $data['booking_detail'] = $this->m_room->book_detail($d['booking_id']);
                            foreach ($data['booking_detail'] as $row) 
                                { 
                                    $data['en_create_by'] = $row['en_create_by'];
                                    $data['en_name'] = $row['en_name'];
                                    $data['user_email'] = $row['user_email'];
                                    $data['en_participant'] = $row['en_participant'];
                                    $data['en_start_time'] = $row['en_start_time'];
                                    $data['en_end_time'] = $row['en_end_time'];
                                    $data['en_refreshment_bf'] = $row['en_refreshment_bf'];
                                    $data['en_refreshment_ln'] = $row['en_refreshment_ln'];
                                    $data['en_refreshment_tb'] = $row['en_refreshment_tb'];
                                    $data['en_id'] = $row['en_id'];
                                    $data['en_receipt'] = $row['en_receipt'];
                                    $data['cafe_name'] = $row['cafe_name'];
                                    $data['en_status'] = $row['en_status'];
                                    $data['cafe_id'] = $row['cafe_id'];
                                }
                    }
                     elseif($status == 2 && $receipt != NULL && $cafe_id != NULL){
                           
                    }
            
            
            
            
                   
            $this->load->view('v_proroomdetail',$data);
            $this->load->view('v_footer');
            
            }
            
            public function setcafe(){
                
                
                 if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{
                
                //accept
                if (!empty($this->input->post('accept'))) {
                    
                      $data = array(
                                   'en_cafe_id' => $this->input->post('selectcafe'),
                                   'en_approve_by' => $this->input->post('en_approve_by')
                );
                      
                   $in['cafe_id'] = $this->input->post('selectcafe');
                   $in['en_id'] = $this->input->post('en_id');

                   $this->db->where('en_id', $this->input->post('en_id'));
                   $this->db->update('mrbs_entry', $data); 
                      
                   
                   
                   $email_data = array(
                                   'en_cafe_id' => $this->input->post('selectcafe'),
                                   'user_email' => $this->input->post('hid_email'),
                                   'en_name' => $this->input->post('hid_act_name'),
                                   'en_approve_by' => $this->input->post('en_approve_by'),
                                   'start_date' => $this->input->post('hid_start'),
                                   'end_date' => $this->input->post('hid_end'),
                                   'cafe_name' => $cafe_name,
                                   'status' => "Approve"
                             
                                );
                   
                     
                                
                            $this->send_email($email_data);//create an email
                        
                            if($this->email->send())
                            {
                                   header('location:'.base_url().'process_room.html'); 
                            }

                            else
                            {
                                show_error($this->email->print_debugger());
                            }
                      
                }
                
                }
                
                else
                            {
                                header('location:'.base_url().'logon.html'); 
                            }
                
            }
            
            public function bookinglist(){
                
                 if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{
                     $this->load->view('v_header');
                     $this->load->view('v_navbar');

                     $data['booking_list'] = $this->m_room->booking_list($this->session->userdata('user_name'));
                     
                     //var_dump($data);
                     $this->load->view('v_booking_list',$data);
                     $this->load->view('v_footer');
                }
                else
                            {
                                header('location:'.base_url().'logon.html'); 
                            }
                
            }
            
            public function uploadreceipt(){
                if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{
                    $d['booking_id'] =  $this->uri->segment(2);
                         
                     $this->load->view('v_header');
                     $this->load->view('v_navbar');

                     $data['booking_detail'] = $this->m_room->book_detail($d['booking_id']);
            //var_dump($data);
                        foreach ($data['booking_detail'] as $row) 
                            { 
                                $data['en_create_by'] = $row['en_create_by'];
                                $data['en_name'] = $row['en_name'];
                                $data['user_email'] = $row['user_email'];
                                $data['en_participant'] = $row['en_participant'];
                                $data['en_start_time'] = $row['en_start_time'];
                                $data['en_end_time'] = $row['en_end_time'];
                                $data['en_refreshment_bf'] = $row['en_refreshment_bf'];
                                $data['en_refreshment_ln'] = $row['en_refreshment_ln'];
                                $data['en_refreshment_tb'] = $row['en_refreshment_tb'];
                                $data['en_id'] = $row['en_id'];
                                

                            }
                     
                     //var_dump($data);
                     $this->load->view('v_uploadreceipt',$data);
                     $this->load->view('v_footer');
                }
                else
                            {
                                header('location:'.base_url().'logon.html'); 
                            }
                
            }
            
            
            
            public function savereceipt(){
                
                 if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{ 
                   
                     
                    
                $config['upload_path'] = '/wamp/www/my_test/media/';
                $config['allowed_types'] = 'jpg|jpeg|gif|png|bmp|pdf';
                $config['max_width']  = '1920';
                $config['max_height']  = '1080';

                $this->load->library('upload',$config);

                if(!$this->upload->do_upload())
                    {
                        $error = array('error'=>$this->upload->display_errors());
                   //  var_dump($error);
                   
                        $in['filename'] = '/media/';
                    }
                else
                    { 
              
                        $file_data = $this->upload->data();
                        $in['filename'] = '/media/'.$file_data['file_name'];
                       //  echo 'successs';
                    }
                  
                    if (!empty($this->input->post('accept'))) {
                    
                      $data = array(
                                   'en_receipt' => $in['filename'],
                                   
                );
                      
                   $this->db->where('en_id', $this->input->post('en_id'));
                   $this->db->update('mrbs_entry', $data); 
                      
                /////////////////////////////////////////////////////////////  
                      
                $email_data = array(
                                   
                                   'user_email' => $this->input->post('hid_email'),
                                   'en_name' => $this->input->post('hid_act_name'),
                                   
                                   'start_date' => $this->input->post('hid_start'),
                                   'end_date' => $this->input->post('hid_end'),
                                   'status' => "Reject"
                                );
                
                                //var_dump($email_data);
                   
                    $this->send_email2($email_data);//create an email
                        
                            if($this->email->send())
                            {
                                  header('location:'.base_url().'booking_list.html'); 
                            }

                            else
                            {
                                show_error($this->email->print_debugger());
                            }
                            
                /////////////////////////            
                  
                 
                }
                else
                            {
                                header('location:'.base_url().'logon.html'); 
                            }
                    }
            
     }


            
            
            public function approveroom(){
                
            if($this->session->userdata('logged_in')!="" && $this->session->userdata('user_name')!="")
		{
                
                //accept
                if (!empty($this->input->post('accept'))) {
                    
                      $data = array(
                                   
                                   'en_status' => 2,
                                   'en_approve_by' => $this->input->post('en_approve_by')
                                );
                      
                    
                
               
                //$in['en_id'] = $this->input->post('en_id');

                   $this->db->where('en_id', $this->input->post('en_id'));
                   $this->db->update('mrbs_entry', $data); 
                   
                   ///////////////////////////////////////////give cafe id to query
                   
                   $data['cafe'] = $this->m_room->accept_cafe($this->input->post('cafe_id'));
                   
                   
                   foreach ($data['cafe'] as $cafe){
                      $cafe_name =  $cafe['cafe_name'];
                   }
                   
                     $email_data = array(
                                   'en_cafe_id' => $this->input->post('selectcafe'),
                                   'user_email' => $this->input->post('hid_email'),
                                   'en_name' => $this->input->post('hid_act_name'),
                                   'en_approve_by' => $this->input->post('en_approve_by'),
                                   'start_date' => $this->input->post('hid_start'),
                                   'end_date' => $this->input->post('hid_end'),
                                   'cafe_name' => $cafe_name,
                                   'status' => "Approve"
                             
                                );
                   
                     
                                
                            $this->send_email($email_data);//create an email
                        
                            if($this->email->send())
                            {
                                   header('location:'.base_url().'process_room.html'); 
                            }

                            else
                            {
                                show_error($this->email->print_debugger());
                            }
           

                   
              
                 
                    
                    
                }
                //reject
                 if (!empty($this->input->post('reject'))) {
                     
                     
                      $data = array(
                                   'en_cafe_id' => $this->input->post('selectcafe'),
                                   'en_status' => 3,
                                   'en_approve_by' => $this->input->post('en_approve_by')
                                );
                
                    $in['cafe_id'] = $this->input->post('selectcafe');
                    $in['en_id'] = $this->input->post('en_id');
                    
                    

                   $this->db->where('en_id', $this->input->post('en_id'));
                   $this->db->update('mrbs_entry', $data); 
                   
                   
                   $email_data = array(
                                   'en_cafe_id' => $this->input->post('selectcafe'),
                                   'user_email' => $this->input->post('hid_email'),
                                   'en_name' => $this->input->post('hid_act_name'),
                                   'en_approve_by' => $this->input->post('en_approve_by'),
                                   'start_date' => $this->input->post('hid_start'),
                                   'end_date' => $this->input->post('hid_end'),
                                   'status' => "Reject"
                                );
                
                   
                    $this->send_email($email_data);//create an email
                        
                            if($this->email->send())
                            {
                                  header('location:'.base_url().'process_room.html'); 
                            }

                            else
                            {
                                show_error($this->email->print_debugger());
                            }
           

                   
              
           
                    
                 }
                
                
               
                } 
                else{
                    
                    header('location:'.base_url().'logon.html'); 
            }}
            
            function send_email($email_data)
        {
        
        //ssl://smtp.gmail.com
		//'ssl://smtp.googlemail.com'
            
            $email_config = array(
             "protocol"  => "smtp",
            "smtp_host" => "ssl://smtp.googlemail.com",
            "smtp_port" => 465,
            "smtp_user" => "adminbspp@ukm.edu.my",
            "smtp_pass"=> "adminbsppptm123",
            "mailtype"  => "html",
            "starttls"  => true,
            "newline"   => "\r\n",
            "charset" => 'iso-8859-1'
            
        );

        $this->load->library('email', $email_config);
        

        
        
        $this->email->from('sharhanarean@gmail.com','MRBS System Generate');
        $this->email->to($email_data['user_email'],'User MRBS');
       // $this->email->cc($email_data['user_email']);
        $this->email->subject('MRBS Booking Notification');
        
        
      
        $email = $this->load->view('emel', $email_data, TRUE);
      
        $this->email->message($email);
       
                   
        }
        
         function send_email2($email_data)
        {
        
        //ssl://smtp.gmail.com
		//'ssl://smtp.googlemail.com'
            
            $email_config = array(
             "protocol"  => "smtp",
            "smtp_host" => "ssl://smtp.googlemail.com",
            "smtp_port" => 465,
            "smtp_user" => "adminbspp@ukm.edu.my",
            "smtp_pass"=> "adminbsppptm123",
            "mailtype"  => "html",
            "starttls"  => true,
            "newline"   => "\r\n",
            "charset" => 'iso-8859-1'
            
        );

        $this->load->library('email', $email_config);
        

        
        
        $this->email->from($email_data['user_email'],'MRBS System Generate');
        $this->email->to('sharhan@ukm.edu.my','Admin MRBS');
       // $this->email->cc($email_data['user_email']);
        $this->email->subject('MRBS Receipt Upload Notification');
        
        
      
        $email = $this->load->view('emel2', $email_data, TRUE);
      
        $this->email->message($email);
       
                   
        }
   
}