
<div class="container">
        <div class="col-md-12" >
        <div class="well bs-docs-section ">
          
      
   <div class="bs-docs-section ">
    <div class="row">
        
      <div class="col-md-12 ">
        <div class="page-header">
          <h3 id="tables">Room List</h3>
          <h5>*Click Room Name To Process Application</h5>
        </div>

        <div class="bs-component">
          <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
              <th>No</th>
              <th>Room Name</th>
              <th>Room Capacity</th>
              <th>Room Admin Email</th>
              <th>Room Admin Contact Number</th>
              <th>Room Description</th>
            </tr>
            </thead>
             <tbody>
                                     <?php   
                                     $x = 1;
                                       foreach($allroom as $row) {  ?>
                                <tr>
                                  <td><?php echo $x; ?></td>
                                  <td><a href="<?php echo base_url(); ?>room_application.html/<?php echo  $row['room_id']; ?>"</a><?php echo $row['room_name']; ?></td>
                                  <td><?php echo $row['room_cap']; ?></td>
                                  <td><?php echo $row['room_pic_email']; ?></td>
                                  <td><?php echo $row['room_pic_phone']; ?></td>
                                  <td><?php echo $row['room_desc']; ?></td>
                                  
                                 <?php  $x++;}?>
      
                                </tr>

                                </tbody>
          </table>
        </div><!-- /example -->
      </div>
    </div>
    </div>
             
              
              
            </fieldset>
         
        </div>
      </div>
</div>
 

           