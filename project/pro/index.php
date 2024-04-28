<?php
session_start();
include('db.php');
include('function_inc.php');

$sql = "select * from login;";

// insert in database 
$rs = mysqli_query($con, $sql);

/*while($row = mysqli_fetch_assoc($rs))
		{
			echo $row['u_id'];
      echo $row['u_name'];
      echo $row['password'];
		}*/
?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChemX</title>
    <link rel='stylesheet' href='/project/tw_css/h.css'>
    <script src='/project/pro/s.js'></script>
    <!-- <script src='https://cdn.tailwindcss.com/'></script> -->
    <style>
      #menu-button:active{
          border:red;
          color:red;
          }
          small{
            display:inline;
            text-transform:capitalize;
          }
          #accnt_list:hover #account_list{
                       display: block;
            
          }
          #account_list{
            display:none;
          }
          #account_list:hover{
            color:red;
          }
          .dropdown li:hover {
  background-color: lavenderblush;
 }
     </style>
  </head>
  <body>
        <?php 
        include('contactUs_form.php');
        if(!isset($_SESSION['SUCCESS']))
        {
        include('nav.php');
        }
        else if($_SESSION['SUCCESS'] == 'yes')
        {
          include('nav_login.php');
        }?>
        <div class="" id="HowItsWork"><?php include('HowItsWork.php');  ?></div>
        <div class="" id="aboutUs"><?php include('aboutUs.php');  ?></div>
        <div class="" id="pricing"><?php include('pricing.php');  ?></div>
        <div class="" id="faq"><?php include('faq.php');  ?></div>
        <div class="" id="testinomial"><?php include('testinomial.php');  ?></div>
        <div class="" id="statistics"><?php include('statistics.php');  ?></div>
        <?php include('sellchem.php'); include('priceDiscover.php');?> 
        <div class="" id="contactUs"> <?php include('contactUs.php');  ?></div>
        <div class="" id="footer"><?php include('footer.php');  ?></div>
        


</body>
  </html>
