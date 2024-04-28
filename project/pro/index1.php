<?php

session_start();
//include('db.php');
$sql = "select * from login;";

$nam=$_SESSION['name'];
$succ=$_SESSION['SUCCESS'];
// insert in database 
//$rs = mysqli_query($con, $sql);

if($_SESSION['SUCCESS'] != 'yes'){

//header("Location: /project/pro/index.php");
//exit();
  redirect('/project/pro/index.php');
}

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
  <body style="margin: 11px;">
        <?php 
        include('contactUs_form.php');?>
        

<!-- navbar -->
 <div class="bg-white">
    <div class="max-w-7xl mx-auto relative text-gray-700 body-font">
      <div class="container flex flex-col flex-wrap items-center justify-between py-5 md:flex-row">
        <a href="#_"
          class="flex items-center order-first font-medium text-gray-900 lg:order-none lg:w-auto title-font lg:items-center lg:justify-center">
          <span class="text-xl font-black leading-none text-gray-900 select-none logo">Chem<span class="text-red-600">X</span>.</span>
        </a>
        <div class="relative flex flex-col md:flex-row items-center">
          <nav
            class="flex flex-wrap items-center pt-2 pb-2 pb-5 text-base border-b border-gray-200 md:pt-0 md:mb-0 md:border-b-0 md:pr-3 md:mr-3 md:border-r md:pb-0">
            <a href="/project/pro/index1.php"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">Home</a>
            <a href="/project/pro/product.php"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">Our Products</a>
            <a href="#aboutUs"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">About
              Us</a>
            <a href="#pricing"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">Pricing</a>
            <a href="#HowItsWork"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">How
              It Works</a>
            <a href="#faq"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">Faq</a>
            <a href="#statistics"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">Stats</a>
          </nav>
          <div class="inline-flex items-center justify-center ml-5 space-x-4 md:space-x-10 md:justify-end">
          
          
      
            

              <div id='accnt_list' class="relative inline-block text-left">
              <div>
                <button type="checkbox" class="inline-flex rounded-3xl h-10 w-10 w-full" id="menu-button" aria-expanded="true" aria-haspopup="true">
                <img src="/project/icons/log.png"
                class="inline-flex items-center rounded-3xl h-10 w-10">
                <div class="inline-flex h-10 w-10 items-center"><small><?php echo $_SESSION['name'];?></small></div>
                  <!-- Heroicon name: mini/chevron-down -->
                  <div class="inline-flex h-10 w-10 items-center"><svg class="-mr-1 ml-2 h-5 w-5"  viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                  </svg></div>
                </button>
              </div>
            
              <!--
                Dropdown menu, show/hide based on menu state.
            
                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              <div id="account_list" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                <ul class="dropdown">
                  <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                  <li><a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a></li>
                  <li><a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Support</a></li>
                  <li><a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">License</a></li>
                  <li><form method="POST" action="/project/login/index.php" role="none">
                    <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                  </form></li>
                </ul>
                </div>
              </div>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  


  
        
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
