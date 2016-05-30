<div class="container">
  <div class="col-md-12" >
      
         <div class="well row">
          
             
        <div class="page-header">
          <h3>Room Menu</h3>
          <h5>Please select an area</h5>
        </div>
             
           <div class="form-group">
                  <label for="selectArea" class="col-md-1 control-label"><strong>Select Area</strong></label>
                <div class="col-md-5">
                  <select id="selectArea"  class="div-toggler form-control" data-target=".my-info-1" >
                    <option >Please Select</option>
                    <option value="0" data-show=".eastwing">Blok B - East Wing</option>
                    <option value="1" data-show=".westwing">Blok C -West Wing</option>
                   
                  </select>
                </div>
              </div>
             
             <br>
             <br>
             <br>
             
        <div class="my-info-1">
            
            <div class="bs-docs-section eastwing hide">
            <div class="row">   
            <div class="col-md-12">
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
                <tr>
                  <td>1</td>
                  <td><a href="#">Orkid</a></td>
                  <td>10</td>
                  <td>ozil@gmail.com</td>
                  <td>038882910</td>
                  <td>This room only for footballer</td>
                  <td><button type="submit" class="btn btn-warning btn-raised">Disable</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">Anggerik</a></td>
                  <td>30</td>
                  <td>dicaprio@gmail.com</td>
                  <td>099992286</td>
                  <td>This room only for Actors</td>
                  <td><button type="submit" class="btn btn-warning btn-raised">Disable</button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#">Cempaka</a></td>
                  <td>20</td>
                  <td>batman@gmail.com</td>
                  <td>045567765</td>
                  <td>This room only for Superhero</td>
                  <td><button type="submit" class="btn btn-warning btn-raised">Disable</button></td>
                </tr>
                <tr class="danger">
                  <td>3</td>
                  <td><a href="#">Teratai</a></td>
                  <td>6</td>
                  <td>cleaner@gmail.com</td>
                  <td>045567765</td>
                  <td>This room only for Cleaner</td>
                  <td><button type="submit" class="btn btn-info btn-raised">Enable</button></td>
                </tr>

                </tbody>
              </table>
            </div><!-- /example -->
        </div>
         </div>
        </div>
            
           <div class="bs-docs-section westwing hide">
            <div class="row">   
            <div class="col-md-12">
                
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
            <tr>
              <td>1</td>
              <td><a href="<?php echo base_url(); ?>/home/bookRoom">Teratai</a></td>
              <td>10</td>
              <td>cleaner@gmail.com</td>
              <td>03445544</td>
              <td>This room only for cleaner</td>
              <td><button type="submit" class="btn btn-warning btn-raised">Disable</button></td>
            </tr>
            <tr>
              <td>2</td>
              <td><a href="#">Selasih</a></td>
              <td>30</td>
              <td>apple@gmail.com</td>
              <td>09223322</td>
              <td>This room only for Apple users</td>
              <td><button type="submit" class="btn btn-warning btn-raised">Disable</button></td>
            </tr>
            <tr>
              <td>3</td>
              <td><a href="#">Meja Perbincangan UTP</a></td>
              <td>20</td>
              <td>android@gmail.com</td>
              <td>033224455</td>
              <td>This room only for Android users</td>
              <td><button type="submit" class="btn btn-warning btn-raised">Disable</button></td>
            </tr>
            
            </tbody>
          </table>
        </div><!-- /example -->
      </div>
    </div>
    </div>
            
            
      
            <hr>
       
          <form class="form-horizontal eastwing westwing hide">
            <fieldset>
              <legend>Create Room</legend>
              
              <div class="form-group">
                <label for="area" class="col-md-2 control-label">Area</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="area" disabled value="Block B - East Wing">
                </div>
              </div>
              <div class="form-group">
                <label for="roomName" class="col-md-2 control-label">Room Name</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="roomName" placeholder="Room Name">
                </div>
              </div>
              <div class="form-group">
                <label for="maxcapa" class="col-md-2 control-label">Maximum Capacity</label>
                <div class="col-md-1">
                  <input type="number" class="form-control" id="maxcapa" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="pic" class="col-md-2 control-label">Person In charge</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="pic" placeholder="Person In Charge">
                </div>
              </div>
              <div class="form-group">
                <label for="picemail" class="col-md-2 control-label">Person In charge Email</label>
                <div class="col-md-5">
                  <input type="email" class="form-control" id="picemail" placeholder="Person In charge Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputRoomConNum" class="col-md-2 control-label">Room Admin Contact Number</label>
                <div class="col-md-3">
                    <input type="number" maxlength="10" class="form-control" id="inputRoomConNum" required placeholder="Admin Contact Number">
                </div>
              </div>
              <div class="form-group">
                <label for="textRoomDesc" class="col-md-2 control-label">Room Description</label>

                <div class="col-md-10">
                  <textarea class="form-control" rows="3" id="textRoomDesc"></textarea>
                  <span class="help-block"></span>
                </div>
              </div>
              
              
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  <button type="button" class="btn btn-default btn-raised">Cancel</button>
                  <button type="submit" class="btn btn-primary btn-raised">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
              </div><!--myinfo end -->
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