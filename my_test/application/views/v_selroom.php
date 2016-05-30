<div class="container">
        <div class="col-md-12" >
        <div class="well bs-docs-section ">
  
    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">Book Room</h3>
                      </div>
                      <div class="panel-body">

                              <h5>*Click Room Name To Book A Room</h5>

                       <div class="bs-docs-section ">
                        <div class="row">

                          <div class="col-md-12 ">


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
                                  <td><a href="<?php echo base_url(); ?>book_room.html/<?php echo  $row['room_id']; ?>"</a><?php echo $row['room_name']; ?></td>
                                  <td><?php echo $row['room_cap']; ?>10</td>
                                  <td><?php echo $row['room_pic_email']; ?></td>
                                  <td><?php echo $row['room_pic_phone']; ?></td>
                                  <td><?php echo $row['room_desc'];$x++;} ?></td>
                                </tr>

                                </tbody>
                              </table>
                            </div><!-- /example -->
                          </div>
                    </div>
                </div>
            </div>
     </div>
          
             
              
              
            </fieldset>
         
        </div>
      </div>
</div>
 

           