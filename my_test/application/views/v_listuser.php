<div class="container">
        <div class="col-md-10" >
        <div class="well bs-component ">
            
          <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">List of Users</h3>
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
                  <th>User Name</th>
                  <th>User Email</th>
                  <th>User Level</th>
                  
                </tr>
                </thead>
                <tbody>
                <tbody>
                                     <?php   
                                     $x = 1;
                                       foreach($alluser as $row) {  ?>
                                <tr>
                                  <td><?php echo $x; ?></td>
                                  <td><?php echo $row['user_name']; ?></a></td>
                                  <td><?php echo $row['user_email']; ?></a></td>
                                  <td><?php if($row['user_level'] == 2){echo "Administrator";}if($row['user_level'] == 1){echo "Normal User";} ?></td>
                                  
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