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
              <th>Action</th>
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
                    <td><a type="submit" class="btn btn-info btn-raised" href="<?php echo base_url(); ?>booking_detail.html/<?php echo  $row['en_id']; ?>">See More</a></td>
                
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

