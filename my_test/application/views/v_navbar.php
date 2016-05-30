<script>
$(function() {
    $('select').change(function() {
        var val = $(this).val();
        if (val) {
            $('div:not(#div' + val + ')').slideUp();
            $('#div' + val).slideDown();
        } else {
            $('div').slideDown();
        }
    });
});
</script>


<?php if($this->session->userdata('logged_in')!=""){ ?>
    
    <div class="bs-component">
          <div class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="javascript:void(0)"><strong>Meeting Room Booking System</strong></a>
              </div>
              <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <?php if($this->session->userdata('user_level') == 1){?>
                  <li ><a href="<?php echo base_url(); ?>choose_room.html">Home</a></li>
                    <?php } ?>
                   <?php if($this->session->userdata('user_level') == 2){?>
                  <li ><a href="<?php echo base_url(); ?>process_room.html">Home</a></li>
                    <?php } ?>
                  
                  <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Room
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url(); ?>choose_room.html">Book a Room</a></li>
                      <li><a href="<?php echo base_url(); ?>booking_list.html">Upload Receipt</a></li> 
                    </ul>
                  </li>
                  
                 <?php if($this->session->userdata('user_level') == 2){?> 
                  <li class="dropdown" >
                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Admin
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url(); ?>process_room.html">Process Room Application</a></li>
                     <!-- <li><a href="<?php //echo base_url(); ?>/home/createArea">Area</a></li> -->
                      <li><a href="<?php echo base_url(); ?>load_room.html">Room</a></li>
                      <li><a href="<?php echo base_url(); ?>load_cafe.html">Cafeteria</a></li>
                      
                      
                      <li class="divider"></li>
                      <li class="dropdown-header">Other Admin Menu</li>
                      <li><a href="<?php echo base_url(); ?>home/history">History</a></li>
                      <li><a href="<?php echo base_url(); ?>user_list.html">User List</a></li>
                      <li><a href="<?php echo base_url(); ?>register_user.html">Register User</a></li>
                     
                    </ul>
                      
                  </li>
                 <?php } ?>
                  
                  
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                  
                  <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($this->session->userdata('logged_in')==""){echo 'Login';}else{echo $this->session->userdata('user_name');} ?>
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?php if($this->session->userdata('logged_in')==""){echo 'Login';}else{echo $this->session->userdata('user_name');} ?></a></li>
                    <!--  <li><a href="<?php echo base_url(); ?>login.html">Login</a></li> -->
                      
                      <li><a href="<?php echo base_url(); ?>help.html">Help</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url(); ?>logout.html">Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    
<?php }
    else{  ?>
        
        <div class="bs-component">
          <div class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="javascript:void(0)"><strong>Meeting Room Booking System</strong></a>
              </div>
              <div class="navbar-collapse collapse navbar-responsive-collapse">
               
                
                <ul class="nav navbar-nav navbar-right">
                  
                  <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($this->session->userdata('logged_in')==""){echo 'Login';}else{echo $this->session->userdata('user_name');} ?>
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(); ?>login.html"><?php if($this->session->userdata('logged_in')==""){echo 'Login';}else{echo $this->session->userdata('user_name');} ?></a></li>
                    <!--  <li><a href="<?php echo base_url(); ?>login.html">Login</a></li> -->
                      <li><a href="<?php echo base_url(); ?>home/signup">Sign Up</a></li>
                      <li><a href="javascript:void(0)">Help</a></li>
                      <li class="divider"></li>
                      <li><a href="javascript:void(0)">Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        
 <?php   } ?>



