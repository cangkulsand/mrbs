

<div class="container">
    
      <div class="well bs-docs-section">


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Process Room</h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('save_receipt.html');?>" enctype="multipart/form-data">
            <fieldset>
                 <div class="alert alert-info">
                    <strong>Upload your cafeteria receipt</strong>
                </div>
              <div class="form-group">
                <label for="inputFile" class="col-md-2 control-label">File</label>

                <div class="col-md-3">
                  <input type="text" readonly="" class="form-control" placeholder="Browse...">
                  <input type="file" id="userfile" name="userfile">
                </div>
            </div>
                
               
                
         
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
             
            
              
              
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                <!--  <button type="submit" class="btn btn-raised btn-primary" name="reject" value="<?php echo 1; ?>">Reject</button> -->
                  <button type="button" class="btn btn-raised btn-primary" onclick="goBack()"  name="cancel">Cancel</button>
                  <button type="submit" class="btn btn-raised btn-info" name="accept" onClick="return confirm('Are you sure?');" value="<?php echo 2; ?>">Upload</button>
                  
                 
                </div>
              </div>
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
