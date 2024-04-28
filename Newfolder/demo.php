<?php
    
    $host ="localhost:3307";
    $dbUsername ="root";
    $dbPassword ="";
    $db ="register";
         

         //create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword,$db);
  
    if(!$conn){
      die("failed errror");
    }
    else{
         
    }
?>