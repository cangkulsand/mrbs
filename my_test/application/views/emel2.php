<!DOCTYPE html>
<html>


<body>
        <p>Assalamualaikum & Selamat Sejahtera   </p>

        <p> Room Reservation Payment Receipt :
        </p>

        <table style="width:100%" class="display" border="0">
  <tr>
      <td>Activity Name : <?php echo $en_name ?></td>
 
    </tr>
  <tr>
    <td>Start Time&Date : <?php echo $start_date ?> </td>
	
  </tr>
   <tr>
    <td>End Time&Date : <?php echo $end_date ?> </td>
	
  </tr>
   <tr>
       <td><strong>This email was send by system to notify administrator that user has upload payment receipt. Please call cafeteria to make sure payment has been done.</strong></td>
  </tr>
  <tr>
      <td>Status : Pending <br> <strong>Please Login to MRBS to Approve user Application</strong></td>
  </tr>

 
</table>
 
        <p> Thank You.</p>
    </body>



<style type='text/css'>

body{
    font-family: "Lucida Grande";
    background-color: #fdfdfd;
}
a {
  color: #008ee8;
  text-decoration: none;
  outline: none;
}
a:hover {
  color: #ec8526;
  text-decoration: none;
}


</style>

</html>