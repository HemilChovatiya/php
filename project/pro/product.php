<?php
session_start();
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
            transition-duration: 4s ;
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
        }
        
       
       
        include('cart.php');
        include('footer.php');
        ?>
  </body>
  </html>