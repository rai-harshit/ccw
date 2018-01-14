<?php
 

// For local hosting ----> configuration starts

 $mysql_hostname  =  "localhost";
 $mysql_user  =  "root"; 
 $mysql_password  =  "";
 $mysql_database  =  "ccw";
 $bd  =  mysqli_connect($mysql_hostname,  $mysql_user,  $mysql_password);
 mysqli_select_db($bd,$mysql_database);
 $conn  =  mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database); 

// For local hosting ----> configuration ends



// For live hosting ----> configuration starts

 // $mysql_hostname  =  "localhost";
 // $mysql_user  =  "id4272792_abc"; 
 // $mysql_password  =  "root123";
 // $mysql_database  =  "id4272792_mydb";
 // $bd  =  mysqli_connect($mysql_hostname,  $mysql_user,  $mysql_password);
 // mysqli_select_db($bd,$mysql_database);
 // $conn  =  mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database);

// For live hosting ----> configuration ends


 ?>
