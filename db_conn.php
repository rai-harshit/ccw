<?php
 $mysql_hostname  =  "localhost";
 $mysql_user  =  "root"; 
 $mysql_password  =  "";
 $mysql_database  =  "ccw";
 $bd  =  mysqli_connect($mysql_hostname,  $mysql_user,  $mysql_password);
 mysqli_select_db($bd,$mysql_database);
 $conn  =  mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database); ?>
