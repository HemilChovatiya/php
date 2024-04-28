<?php

   
  $host = "localhost:3307";
  $user = "root";
  $pass = "";
  $db = "chemx";

  $con = mysqli_connect($host,$user,$pass,$db);

  if(!$con){
      die("Database Connection Error");
  }

    $msg = '';

    if(isset($_POST['contactus'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['tel'];
        $chemical_name=$_POST['chemicalname'];
        $chemical_requirment=$_POST['totalchemicalrequirement'];
           
      $res = mysqli_query($con," INSERT INTO contactus(name,email,number,chemical_name,chemical_requirment) VALUES('$name','$email','$number','$chemical_name','$chemical_requirment') ");
      
  
      if($res==1){      
        
        
      }
      else{
        $msg = "Please Enter valid details";
      }
    }




?>