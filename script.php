<?php 
   // connecting to the database.
   $mysqli = new mysqli('localhost', 'root', 'root', 'pagination');
   if($mysqli->connect_errno != 0){
      echo $mysqli->connect_error;
      exit();
   }else{
      $mysqli->set_charset("utf8mb4");	
   }

   $result=$mysqli->query("SELECT * FROM `products` LIMIT 0,4");