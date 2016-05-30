<div class="container">
    
      <div class="well bs-docs-section">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h3>Upload Receipt</h3>
         </div>  
          
           <br>
           
       <div class="my-info-1">
           
        <div class="bs-component">
          <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
              <th>No</th>
              <th>Activity</th>
              <th>Booking Date</th>
              <th>Date of Application</th>
              <th>Status</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
            </thead>
             <tbody>
                                     <?php   
                                     $x = 1;
                                       foreach($booking_list as $row) {  ?>
                                <tr>
                                  <td><?php echo $x; ?></td>
                                  <td><?php echo $row['en_name']; ?></td>
                                  <td><?php echo $row['en_start_time']; ?><br><?php echo $row['en_end_time']; ?></td>
                                  <td><?php echo $row['en_date_apply']; ?></td>
                                  <td><?php if($row['en_status'] == 1){  echo 'Pending';}; ?></td>
                                  <td><?php echo $row['en_desc']; ?></td>
                                  <td><a type="submit" class="btn btn-info btn-raised" href="<?php echo base_url(); ?>upload_receipt.html/<?php echo  $row['en_id']; ?>">See More</a></td>
                                 <?php  $x++;}?>
      
                                </tr>

                                </tbody>
          </table>
        </div><!-- /bs component -->
        
        
        
        
        
        
        
        
      </div><!-- my info end -->   
      </div>
    </div>
  
        


 

          
   
      
</div>

</div>