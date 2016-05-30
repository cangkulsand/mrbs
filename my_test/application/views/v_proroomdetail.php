

<div class="container">
    
      <div class="well bs-docs-section">


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Process Room</h3>
  </div>
  <div class="panel-body">
   
                
                <?php if ($en_receipt == NULL){ ?>
      
                 <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('set_cafe.html');?>" enctype="multipart/form-data">
            <fieldset>
                 <div class="alert alert-info">
                    <strong>Please Select Cafeteria to Proceed</strong>
                </div>
              <div class="form-group">
                 
                    <label class="col-md-2 control-label" for="cafe">Available Cafeteria</label>
                    <div class="col-md-3">
                    <select class="div-toggler form-control" id="selectcafe" name="selectcafe" autofocus>
                                       
    <?php
                            foreach($all_cafe as $list) 
                            {
                                 
                                 echo "<option value=" .$list['cafe_id']. ">" .$list['cafe_name']. "</option>";
                            }
                          
                        ?>  
			
                    </select></div> 
                </div>
                
               
                    
           <?php     }else{ ?>
                 <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('approve_room.html');?>" enctype="multipart/form-data">
            <fieldset>
                <div class="alert alert-info">
                    <strong>Cafe Receipt as Below</strong>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-2 control-label">Cafeteria</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="cafe_name" name="cafe_name" readonly  disabled value="<?php echo $cafe_name; ?>">
                    </div>
                </div>
                <div class="form-group " color="BLUE">
                    <label for="receipt" class="col-md-2 control-label">Receipt</label>
                    
                    <label class="col-md-1" for="cafe"><a href="<?php echo base_url().$en_receipt; ?> " target="_blank">Click to Download</a> </label>
                    
                    
                </div>
               
                <?php  } ?>
         
                <hr>
                <div class="alert  alert-success">
                    <strong>User Room Booking Details</strong>
                </div>
                
                
              <div class="form-group">
                <label for="name" class="col-md-2 control-label">Name</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="en_create_by" name="en_create_by" readonly  disabled value="<?php echo $en_create_by; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="activity" class="col-md-2 control-label">Activity</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" id="en_name" name="en_name"  readonly  disabled value="<?php echo $en_name; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Email</label>
                <div class="col-md-5">
                    <input type="email" class="form-control" id="user_email" name="user_email"  readonly  disabled value="<?php echo $user_email; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="participant" class="col-md-2 control-label">Participant</label>
                <div class="col-md-2">
                    <input type="number" class="form-control" id="en_participant" name="en_participant"  readonly  disabled value="<?php echo $en_participant; ?>">
                </div>
              </div>
              
              <div class="form-group">
                <label for="startDate" class="col-md-2 control-label">Start Date</label>
                 <div class='col-md-3'>
                     <input type='text' class="form-control"  readonly id="en_start_time" name="en_start_time"  disabled value="<?php echo $en_start_time ; ?>">
                 </div>
              </div>
              <div class="form-group">
                <label for="endDate" class="col-md-2 control-label">End Date</label>
                 <div class='col-md-3'>
                     <input type='text' class="form-control"  readonly id="en_end_time" name="en_end_time"  disabled value="<?php echo $en_end_time; ?>">
                </div>
              </div>
              
              <br>
              <label for="Refreshment" class="col-md-2 control-label">Refreshment</label>
              <div class="form-group">
              <div class="checkbox">
          <label class="col-md-3">
              <input type="checkbox" <?php if($en_refreshment_bf == 1){echo 'checked';} ?> readonly id="en_refreshment_bf" name="en_refreshment_bf"  disabled> Breakfast
          </label>
          <label class="col-md-1">
              <input type="checkbox" <?php if($en_refreshment_ln == 1){echo 'checked';} ?> readonly id="en_refreshment_ln" name="en_refreshment_ln"  disabled> Lunch
          </label>
           <label class="col-md-2">
            <input type="checkbox" <?php if($en_refreshment_tb == 1){echo 'checked';} ?> readonly id="en_refreshment_tb" name="en_refreshment_tb"  disabled> Afternoon Tea Break
          </label>
        </div>
        </div>
              
              
              <input type="hidden" class="form-control" id="hid_start" name="hid_start" value="<?php echo $en_start_time; ?>">
              <input type="hidden" class="form-control" id="hid_end" name="hid_end" value="<?php echo $en_end_time; ?>">
              <input type="hidden" class="form-control" id="hid_act_name" name="hid_act_name" value="<?php echo $en_name; ?>">
              <input type="hidden" class="form-control" id="hid_email" name="hid_email" value="<?php echo $user_email; ?>">
              <input type="hidden" class="form-control" id="en_id" name="en_id" value="<?php echo $en_id; ?>"> 
              <input type="hidden" class="form-control" id="en_approve_by" name="en_approve_by" value="<?php echo $this->session->userdata('user_name'); ?>">
              
              <?php if($en_receipt == NULL && $en_status == 1){ ?>
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                <!--  <button type="submit" class="btn btn-raised btn-primary" name="reject" value="<?php echo 1; ?>">Reject</button> -->
                  <button type="button" class="btn btn-raised btn-primary" onclick="goBack()"  name="cancel">Cancel</button>
                  <button type="submit" class="btn btn-raised btn-info" name="accept" onClick="return confirm('Are you sure?');" value="<?php echo 2; ?>">Submit</button>
                  
                 
                </div>
              </div>
              
              <?php }elseif($en_receipt != NULL && $en_status == 1){ ?>
              
              <input type="hidden" class="form-control" id="cafe_id" name="cafe_id" value="<?php echo $cafe_id; ?>">
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                 <button type="submit" class="btn btn-raised btn-primary" name="reject" value="<?php echo 1; ?>">Reject</button> 
                  <button type="submit" class="btn btn-raised btn-info" name="accept" onClick="return confirm('Are you sure?');" value="<?php echo 2; ?>">Accept</button>
                  
                 
                </div>
              </div>
              
              
              
               <?php }elseif($en_receipt != NULL && $en_status == 2){ ?>
              
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                 <button type="submit" class="btn btn-raised btn-primary" name="reject" value="<?php echo 1; ?>">Reject</button> 
                  <button type="submit" class="btn btn-raised btn-warning" name="accept" onClick="return confirm('Are you sure?');" value="<?php echo 2; ?>">Confirm</button>
                </div>
              </div>
              
              
              
              <?php } ?>
            </fieldset>
          </form>
      </div>
    </div>
  </div>
</div>

<script>
function goBack() {
    window.history.back();
    
}
</script>
