<?php
  
  $server="aws.connect.psdb.cloud";
  $user="hkzrqby43n2xy3ktak23";
  $password="pscale_pw_rXaPTwGPSr2rQWbw6HFpNkCMClQlT7Coz8HT4srgajL";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password);
  mysqli_select_db($con,$dbname);
   
?>
