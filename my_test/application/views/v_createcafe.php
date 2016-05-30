<div class="container">
        <div class="col-md-10" >
        <div class="well bs-component ">
            
            <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('create_cafe.html');?>" enctype="multipart/form-data">
            <fieldset>
              <legend>Create Cafeteria</legend>
              
              <div class="form-group">
                <label for="cafeName" class="col-md-2 control-label">Cafe Name</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="cafe_name" name="cafe_name" required autofocus placeholder="Cafe Name">
                </div>
              </div>
              <div class="form-group">
                <label for="cafePhone" class="col-md-2 control-label">Cafe Phone No</label>
                <div class="col-md-5">
                    <input type="number" class="form-control" id="cafe_phone" name="cafe_phone" required placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="cafeDesc" class="col-md-2 control-label">Cafe Description</label>
                <div class="col-md-10">
                    <textarea class="form-control" rows="3" id="cafe_desc" name="cafe_desc"></textarea>
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
                        <h3 class="panel-title">List of Cafeteria</h3>
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
                  <th>Cafe Name</th>
                  <th>Cafe Phone No.</th>
                  <th>Cafe Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tbody>
                                     <?php   
                                     $x = 1;
                                       foreach($allcafe as $row) {  ?>
                                <tr>
                                  <td><?php echo $x; ?></td>
                                  <td><?php echo $row['cafe_name']; ?></a></td>
                                  <td><?php echo $row['cafe_phone']; ?></a></td>
                                  <td><?php echo $row['cafe_desc']; ?></td>
                                  <td> <a type="submit" class="btn <?php if($row['cafe_status'] == 2){ echo "btn-warning";}else{echo "btn-info";} ?> btn-raised" href="<?php echo base_url(); ?>cafe/statusupdate/<?php echo  $row['cafe_id']; ?>" onClick="return confirm('Are you sure? ');"> <?php if($row['cafe_status'] == 2){ echo "Disable";}else{echo "Enable";} ?></a></td>
                                      <?php  $x++;}?>
                                   
                                </tr>

                                </tbody>
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
