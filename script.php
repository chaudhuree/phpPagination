<?php 
   // connecting to the database.
   $mysqli = new mysqli('localhost', 'root', 'root', 'pagination');
   if($mysqli->connect_errno != 0){
      echo $mysqli->connect_error;
      exit();
   }else{
      $mysqli->set_charset("utf8mb4");	
   }

   $start=0;
   $rows_per_page=4;

  //  get the total of rows
  $records=$mysqli->query("SELECT * FROM `products`");
  $number_of_rows = $records->num_rows;

  // calculate the number of pages we are going to have
  $pages = ceil($number_of_rows/$rows_per_page);

   if(isset($_GET['page-no'])){
    $page=$_GET['page-no']-1;
    $start=$rows_per_page*$page;
   }


   $result=$mysqli->query("SELECT * FROM `products` LIMIT $start, $rows_per_page");