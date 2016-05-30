<hr>
<div class="container">
        <div class="col-md-12" >
        <div class="well bs-docs-section ">
          <form role="form" method="post" onsubmit="return checkCheckBox(this)" action="<?php echo site_url('signup_user.html');?>" enctype="multipart/form-data">
            <fieldset>
              <legend>Registration</legend>
              
              <div class="form-group">
                <label for="inputUsername" class="col-md-2 control-label">Username</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="user_name" name="user_name" autofocus required placeholder="Username">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Email</label>
                <div class="col-md-10">
                  <input type="email" class="form-control" id="user_email" name="user_email" required placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-md-2 control-label">Password</label>
                <div class="col-md-10">
                  <input type="password" class="form-control" id="user_pwd" name="user_pwd" required placeholder="Password">
                </div>
              </div>
              
              <input type="hidden" class="form-control" id="user_level" name="user_level" value="1">
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  
                  <button type="submit" class="btn btn-primary btn-raised">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
</div>













