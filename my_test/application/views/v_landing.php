<style>

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}
.container {
  position: relative;
  height: 14rem;
  
}

.jumbotron {
  position: absolute;
  top: 200%;
  left:50%;
  transform: translate(-50%,-50%);
  border: 1px dashed deeppink;
}




    
</style>


<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    
    <hr>
   
        
     <div class="container" >
    
  <div class="jumbotron">
    <div class="col-md-12">
        
             
            <img id="profile-img" class="profile-img-card" src="<?php echo site_url('media/admin.png');?>" />
            <p id="profile-name" class="profile-name-card"></p>
            <form role="form" method="post" onsubmit="return checkCheckBox(this)" action="<?php echo site_url('logon.html');?>" enctype="multipart/form-data">
                
                <!--<span id="reauth-email" class="reauth-email"></span>-->
                <div class="col-md-12">
                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name" required autofocus>
                </div>
                <div class="col-md-12">
                    <input type="password" class="form-control" id="user_pwd" name="user_pwd" placeholder="Password" required>
                </div>

                <button type='submit' class='btn btn-raised btn-primary'>Login</button>
                <a href="<?php echo base_url(); ?>/home/signup"  class='btn btn-raised btn-info'>Sign Up</a>
            </form> <!--//form -->
         
        
        </div>
  </div>
  
</div>
   
    