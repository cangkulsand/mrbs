 <!DOCTYPE html>

<html>

   

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>Meeting Room Booking System</title>

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>materialdesign/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="<?php echo base_url(); ?>materialdesign/dist/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>materialdesign/dist/css/ripples.min.css" rel="stylesheet">


  <link href="<?php echo base_url(); ?>materialdesign/dist/css/snackbar.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">           
  
  <!-- -->
   <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript">
    $(function () {
        $('#en_start_time').datetimepicker({
            sideBySide: true
        });
        $('#en_end_time').datetimepicker({
            
            useCurrent: false, //Important! See issue #1075
            sideBySide: true
        });
        $("#en_start_time").on("dp.change", function (e) {
            $('#en_end_time').data("DateTimePicker").minDate(e.date);
        });
        $("#en_end_time").on("dp.change", function (e) {
            $('#en_start_time').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
    
 <!-- <script src="//code.jquery.com/jquery-1.10.2.min.js"></script> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>materialdesign/dist/js/ripples.min.js"></script>
<script src="<?php echo base_url(); ?>materialdesign/dist/js/material.min.js"></script>
<script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
</script>

 



</head><body>