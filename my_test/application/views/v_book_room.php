        
<div class="container">
    
      
    <div class="well bs-docs-section">


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Process Room</h3>
  
  
  </div>
    <div class="panel-body">
        
        <div class="col-md-12">
        <div class="page-header">
          <h3>Bilik <?php echo $room_name; ?></h3>
         </div>  
          <div class="form-group">
                  <label for="selectArea" class="col-md-1 control-label"><strong>Month</strong></label>
                <div class="col-md-3">
                  <select id="selectArea"  class="div-toggler form-control" data-target=".my-info-1" >
                    <option >Please Select Month</option>
                    <option data-show=".jan">January</option>
                    <option data-show=".feb">February</option>
                    <option data-show=".mac">March</option>
                    <option data-show=".apr">April</option>
                    <option data-show=".may">May</option>
                    <option data-show=".jun">June</option>
                    <option data-show=".jul">July</option>
                    <option data-show=".aug">August</option>
                    <option data-show=".sep">September</option>
                    <option data-show=".oct">October</option>
                    <option data-show=".nov">November</option>
                    <option data-show=".dec">December</option>
                   
                  </select>
                </div>
              </div>
          
          
          <br>
           <br>
           
           <div class="my-info-1">
               <?php 
               $y=0;
               foreach ($all_month as $month){
               
               ?>
               <div class="bs-component <?php echo $month['month_name']; ?> hide">
          <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
              <th>No</th>
              <th>Time/Date of Booked</th>
              <th>Activity</th>
              <th>Participant</th>
              <th>Booker</th>
              <th>Status</th>
              
            </tr>
            </thead>
            <tbody>
                     <?php  
                                $x=1;
                 
                    foreach($all_data[$y] as $row) { ?>
            <tr> 
               
                    <td><?php echo $x; ?></td>
                    <td><?php echo $row['en_start_time']; ?><br><?php echo $row['en_end_time']; ?></td>
                    <td><?php echo $row['en_name']; ?></td>
                    <td><?php echo $row['en_participant']; ?></td>
                    <td><?php echo $row['en_create_by']; ?></td>
                    <td><?php if($row['en_status']==1){echo 'Pending';}if($row['en_status']==2){echo 'Approve';}if($row['en_status']==3){echo 'Reject';} ?> : <?php echo $row['en_approve_by']; //}}?></td>
                    
                
             </tr>
            <?php $x++; } ?>
             </tbody>
           </table>
        </div><!-- /bs component -->
           <?php $y++;} ?>
               
               
           </div>   
           
           
           
      </div>
        
        
        
        
    </div>
</div>

  
        
        
        
<hr>

    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Book Room</h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('save_booking.html');?>" enctype="multipart/form-data">
            <fieldset>
              
              
              <div class="form-group">
                <label for="activity" class="col-md-2 control-label">Activity</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" id="en_name" name="en_name" placeholder="Activity">
                </div>
              </div>
                
                <div class="form-group">
                <label for="activity" class="col-md-2 control-label">Activity Description</label>
                <div class="col-md-5">
                    <textarea type="text" class="form-control" id="en_desc" name="en_desc" placeholder="Activity"></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label for="participant" class="col-md-2 control-label">Participant</label>
                <div class="col-md-2">
                    <input type="number" class="form-control" id="en_participant" name="en_participant" placeholder="Participant">
                </div>
              </div>
              
              <div class="form-group">
                <label for="startDate" class="col-md-2 control-label">Start Date</label>
                 <div class='input-group date col-md-3' id='en_start_time' name="en_start_time">
                     <input type='text' class="form-control" name="en_start_time" id="en_start_time" placeholder="Start Date">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                 </div>
              </div>
              <div class="form-group">
                <label for="endDate" class="col-md-2 control-label">End Date</label>
                 <div class='input-group date col-md-3' id='en_end_time' name="en_end_time">
                     <input type='text' class="form-control" id="en_end_time" name="en_end_time" placeholder="End Date">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              </div>
              
              <br>
              <label for="Refreshment" class="col-md-2 control-label">Refreshment</label>
              <div class="form-group">
              <div class="checkbox">
          <label class="col-md-3">
              <input type="checkbox" id="en_refreshment_bf" name="en_refreshment_bf"> Breakfast
          </label>
          <label class="col-md-1">
              <input type="checkbox" id="en_refreshment_ln" name="en_refreshment_ln"> Lunch
          </label>
           <label class="col-md-2">
               <input type="checkbox" id="en_refreshment_tb" name="en_refreshment_tb"> Afternoon Tea Break
          </label>
        </div>
        </div>
                   
              <input type="hidden" class="form-control" id="name" name="en_room_id" placeholder="en_room_id" value="<?php echo $room_id; ?>">
              
              
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  
                  <button type="submit" class="btn btn-raised btn-primary">Book</button>
                </div>
              </div>
            </fieldset>
          </form>
  </div>
</div>

 

          
   
      
</div>

</div>

<script type="text/javascript">
  $('select.div-toggler').change(function(){
    var target = $(this).data('target');
    $(target).children().addClass('hide');
    var show = $("option:selected", this).data('show');
    $(show).removeClass('hide');
});
</script>



