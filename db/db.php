<?php  
  $host = "localhost:3307";
  $user = "root";
  $pass = "";
  $db = "db_connect";

  $con = mysqli_connect($host,$user,$pass,$db);

  if(!$con){
      die("Database Connection Error");
  }
?>