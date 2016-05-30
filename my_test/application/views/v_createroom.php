<div class="container">
  <div class="col-md-12" >
      
         <div class="well row">
             
             
             
             <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('create_room.html');?>" enctype="multipart/form-data">
            <fieldset>
              <legend>Create Room</legend>
              
              
              <div class="form-group">
                <label for="roomName" class="col-md-2 control-label">Room Name</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="room_name" name="room_name" required autofocus placeholder="Room Name">
                </div>
              </div>
              <div class="form-group">
                <label for="maxcapa" class="col-md-2 control-label">Maximum Capacity</label>
                <div class="col-md-1">
                  <input type="number" class="form-control" id="room_cap" name="room_cap" >
                </div>
              </div>
              <div class="form-group">
                <label for="pic" class="col-md-2 control-label">Person In charge</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" id="room_pic" name="room_pic" placeholder="Person In Charge">
                </div>
              </div>
              <div class="form-group">
                <label for="picemail" class="col-md-2 control-label">Person In Charge Email</label>
                <div class="col-md-5">
                  <input type="email" class="form-control" id="room_pic_email" name="room_pic_email" placeholder="Person In charge Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputRoomConNum" class="col-md-2 control-label">Room Admin Contact Number</label>
                <div class="col-md-3">
                    <input type="number" maxlength="10" class="form-control" id="room_pic_phone" name="room_pic_phone" required placeholder="Admin Contact Number">
                </div>
              </div>
              <div class="form-group">
                <label for="textRoomDesc" class="col-md-2 control-label">Room Description</label>

                <div class="col-md-10">
                  <textarea class="form-control" rows="3" id="room_desc" name="room_desc"></textarea>
                  <span class="help-block"></span>
                </div>
              </div>
              
              
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  <button type="button" class="btn btn-default btn-raised">Cancel</button>
                  <button type="submit" class="btn btn-primary btn-raised">Create</button>
                </div>
              </div>
            </fieldset>
          </form>
          
             
       
            
            
            <hr>
       
          <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">List of Room</h3>
                      </div>
                      <div class="panel-body">

                              
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
                                  <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                     <?php   
                                     $x = 1;
                                       foreach($allroom as $row) {  ?>
                                <tr>
                                  <td><?php echo $x; ?></td>
                                  <td><?php echo $row['room_name']; ?></a></td>
                                  <td><?php echo $row['room_cap']; ?></td>
                                  <td><?php echo $row['room_pic_email']; ?></td>
                                  <td><?php echo $row['room_pic_phone']; ?></td>
                                  <td><?php echo $row['room_desc']; ?></td>
                                  <td> <a type="submit" class="btn <?php if($row['room_status'] == 2){ echo "btn-warning";}else{echo "btn-info";} ?> btn-raised" href="<?php echo base_url(); ?>room/statusupdate/<?php echo  $row['room_id']; ?>" onClick="return confirm('Are you sure? ');"> <?php if($row['room_status'] == 2){ echo "Disable";}else{echo "Enable";} ?></a></td>
                                 <?php  $x++;}?>
      
                                </tr>

                                </tbody>
                              </table>
                            </div><!-- /example -->
                          </div>
                    </div>
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