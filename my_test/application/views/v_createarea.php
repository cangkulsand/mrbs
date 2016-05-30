<div class="container">
        <div class="col-md-10" >
        <div class="well bs-component ">
            
            <div class="page-header">
              <h3>Area Menu</h3>
              <h5>List of Area</h5>
            </div>

            <div class="bs-component">
              <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Area Name</th>
                  <th>Area Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td><a href="#">Block B - East Wing</a></td>
                  <td>Meeting room in Block B only available at East Wing</td>
                  <td><button type="submit" class="btn btn-warning btn-raised">Disable</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">Block C - West Wing</a></td>
                  <td>Meeting room in Block C only available at West Wing</td>
                  <td><button type="submit" class="btn btn-warning btn-raised">Disable</button></td>
                </tr>
                </tbody>
              </table>
            </div><!-- /example -->
         
        
            <hr>
            
            
            
          <form class="form-horizontal">
            <fieldset>
              <legend>Create Area</legend>
              
              <div class="form-group">
                <label for="area" class="col-md-2 control-label">Area Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="inputPlace" required placeholder="Area Name">
                </div>
              </div>
              <div class="form-group">
                <label for="areaDesc" class="col-md-2 control-label">Area Description</label>
                <div class="col-md-10">
                  <textarea class="form-control" rows="3" id="areaDesc"></textarea>
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
        </div>
      </div>
</div>
