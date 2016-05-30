<hr>
<div class="container">
        <div class="col-md-12" >
        <div class="well bs-docs-section ">
          <form role="form" method="post" onsubmit="return checkCheckBox(this)" action="<?php echo site_url('create_user.html');?>" enctype="multipart/form-data">
            <fieldset>
              <legend>Registration</legend>
              
              <div class="form-group">
                <label for="username" class="col-md-2 control-label">Username</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="user_name" required name="user_name" autofocus="" placeholder="Username">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email</label>
                <div class="col-md-10">
                  <input type="email" class="form-control" id="user_email" required name="user_email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-md-2 control-label">Password</label>
                <div class="col-md-10">
                  <input type="password" class="form-control" id="user_pwd" required name="user_pwd" placeholder="Password">
                </div>
              </div>
              
              <div class="form-group">
                  <label for="selectArea" class="col-md-2 control-label"><strong>User Level</strong></label>
                <div class="col-md-2">
                    <select id="user_level" name="user_level" required  class="div-toggler form-control" autofocus>
                    <option>Please Select</option>
                    <option value="2" >Administrator</option>
                    <option value="1" >Normal user</option>
                    <option value="3" >Cafeteria Owner</option>
              
                    
                  </select>
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













