<?php
  session_start();
  include('admin/vendor/inc/apmcconfig.php');
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
  if(!isset($_GET['category']))
  {
    $category="%%";
  }
  else{ $category=$_GET['category'];}
?>
<!DOCTYPE html>
<html lang="en">

<!--Head-->
<?php include("vendor/inc/head.php");?>
<!--End Head-->

<body class="bg-white">

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>

  <!-- Page Content -->
 
<!-- Breadcrumb -->
<div class="mt-8 ml-28">
  <ol class="inline-flex items-center space-x-1 md:space-x-3 ">
    <li class="inline-flex items-center">
      <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:no-underline hover:text-green-600 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
        </svg>
        Home
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:no-underline hover:text-green-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">All Products</a>
      </div>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
        <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Category : <?php if($category=="%%"){echo " All Product";}else{echo $category;}?></span>
      </div>
    </li>
  </ol>
</div>

        
  
  <!-- Title -->
  <div class="mt-3 pt-2  bg-white">
  <h1 class="text-center text-2xl font-bold text-gray-800"><a href="product.php" class="hover:no-underline hover:text-green-800">All Products</a></h1>
  </div>
  <!-- Tab Menu -->
  <div class="flex flex-wrap items-center  overflow-x-auto overflow-y-hidden py-10 justify-center   bg-white text-gray-800">
      <a href="product.php?category=Crops" rel="noopener noreferrer"  class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 text-gray-600 hover:text-green-800 hover:no-underline">
      <i class="fi fi-rr-wheat">
          <span>Crops</span></i>
      </a>
      <a  href="product.php?category=Organic" rel="noopener noreferrer"  class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 rounded-t-lg text-gray-900 hover:text-green-800 hover:no-underline">
            <i class="fi fi-rr-grape"></i>
             <span>Organic</span>
      </a>
      <a href="product.php?category=Fruits" rel="noopener noreferrer"  class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600 hover:text-green-800 hover:no-underline">
        <i class="fi fi-rr-apple-whole"></i>
          <span>Fruits</span>
      </a>
      <a href="product.php?category=Vegetable" rel="noopener noreferrer"  class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600 hover:text-green-800 hover:no-underline">
      <i class="fi fi-rr-tomato"></i>
          <span>Vegetable</span>
      </a>
      <a href="product.php?category=Other" rel="noopener noreferrer" class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 hover:text-green-800 text-gray-600 hover:no-underline">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
              <circle cx="12" cy="12" r="10"></circle>
              <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
          </svg>
          <span>Other</span>
      </a>
  </div>
  
  <!-- Product List -->
  <section class="py-10 bg-gray-100">
    <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"> 
   
    
    <?php
      
      $ret="SELECT * FROM product where category LIKE '".$category."' ORDER BY RAND() LIMIT 51 "; //get all feedbacks
      $stmt= $mysqli->prepare($ret) ;
      $stmt->execute() ;//ok
      $res=$stmt->get_result();
      $cnt=1;
      while($row=$res->fetch_object())
      {
    ?>
    <!-- Project One -->
     <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:no-underline hover:scale-105 duration-300 ">
        <a href="productpage.php?<?php echo 'id='.$row->id;?>" class="hover:no-underline">
          <div class="relative flex items-end overflow-hidden rounded-xl">
            <img alt="person capturing an image" src="vendor/img/<?php echo $row->p_img_loc;?>" tabindex="0" class="focus:outline-none w-full h-44" />
          </div>
  
          <div class="mt-1 p-2">
            <h2 class="text-slate-700 font-bold capitalize"><?php echo "$row->pname";?></h2>
            <div class="mt-0.5 flex items-end justify-between">
            <div class="flex items-center space-x-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M370 63.6C331.4 22.6 280.5 0 226.6 0 111.9 0 18.5 96.2 18.5 214.4c0 75.1 57.8 159.8 82.7 192.7C137.8 455.5 192.6 512 226.6 512c41.6 0 112.9-94.2 120.9-105 24.6-33.1 82-118.3 82-192.6 0-56.5-21.1-110.1-59.5-150.8zM226.6 493.9c-42.5 0-190-167.3-190-279.4 0-107.4 83.9-196.3 190-196.3 100.8 0 184.7 89 184.7 196.3.1 112.1-147.4 279.4-184.7 279.4zM338 206.8c0 59.1-51.1 109.7-110.8 109.7-100.6 0-150.7-108.2-92.9-181.8v.4c0 24.5 20.1 44.4 44.8 44.4 24.7 0 44.8-19.9 44.8-44.4 0-18.2-11.1-33.8-26.9-40.7 76.6-19.2 141 39.3 141 112.4z"/></svg>
                <p class="mt-0 text-l text-slate-700 font-bold capitalize"><?php echo "$row->address";?></p>
           </div></div>
            <p class="mt-0.5 text-l text-slate-700 font-bold capitalize">₹<?php echo "$row->price/$row->p_quantity";?></p>
            
            <form  method="POST" action="usr/user-confirm-booking.php?<?php echo "id=".$row->id?>">
            <div class="mt-3 flex items-center justify-center px-1">
            <div class="flex items-center space-x-2.5 rounded-lg bg-green-700 px-12 py-1.5 w-full text-white duration-100 hover:bg-green-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                
                <button type="submit" class="justify-center text-sm">Order Now</button>
              </div>
            </div>
            </form>
          </div>
        </a>
      </article>


      <?php }?>


      
      </div>
  </section>
  

  <?php include("vendor/inc/footer.php");?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
