<?php
  session_start();
  include('admin/vendor/inc/apmcconfig.php');
  include("vendor/inc/head.php");
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
  if(!isset($_GET['id']))
  {
    $id='';
  }
  else{ $id=$_GET['id'];}
?>
<!DOCTYPE html>
<html lang="en">


<body class="bg-white">

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>
  <!-- Page Content -->
  <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <span class="self-center whitespace-nowrap text-xl font-semibold mt-2"> <h1 class="ml-3 mt-4 mb-2">Product Page 
          </h1>

          <div class="mt-0 mb-0">
              <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                  <a href="index.php" class="ml-3 inline-flex items-center text-sm font-medium text-gray-700 hover:no-underline hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    Home
                  </a>
                </li>
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-sm text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Product Details</span>
                  </div>
                </li>
              </ol>
          </div>
          </span>


<div class='mt-2 '>

<?php
      
      $ret="SELECT * FROM product where id='".$id."' LIMIT 1 "; //get all feedbacks
      $stmt= $mysqli->prepare($ret) ;
      $stmt->execute() ;//ok
      $res=$stmt->get_result();
      $cnt=1;
      while($row=$res->fetch_object())
      {
    ?>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
      <div class="flex flex-col md:flex-row -mx-4">
        <div class="md:flex-1 px-1 grid grid-cols-2 grid-rows-1 gap-3">
              <div  class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
              <img alt="person capturing an image" src="vendor/img/<?php echo $row->p_img_loc;?>" tabindex="0" class="rounded-xl focus:outline-none w-full h-full" />
          </div>
        <div class="md:flex-1 px-4">
          <h2 class="mb-2 leading-tight capitalize tracking-tight font-bold text-gray-800 text-2xl md:text-3xl"><?php echo "$row->pname";?></h2>
          <p class="text-gray-500 capitalize text-sm">By <a href="#" class="text-gray-800 hover:text-gray-900 hover:no-underline"><?php echo "$row->p_owner"." [ $row->phone ]";?></a></p>
  
          <div class="flex items-center space-x-4 my-4">
            <div>
              <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                <span class="text-green-800 mr-1 mt-1">₹</span>
                <span class="font-bold text-green-600 capitalize text-3xl"><?php echo "$row->price";?></span>
              </div>
            </div>
            <div>
              <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                /
              </div>
            </div>
            <div>
              <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                <span class="text-green-800 capitalize mr-1 mt-1">Qty:</span>
                <span class="font-bold text-green-600 capitalize text-3xl"><?php echo "$row->p_quantity";?></span>
              </div>
            </div>
            
          </div>
          <div class="mt-0.5 flex items-end justify-between">
            <div class="flex items-center space-x-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M370 63.6C331.4 22.6 280.5 0 226.6 0 111.9 0 18.5 96.2 18.5 214.4c0 75.1 57.8 159.8 82.7 192.7C137.8 455.5 192.6 512 226.6 512c41.6 0 112.9-94.2 120.9-105 24.6-33.1 82-118.3 82-192.6 0-56.5-21.1-110.1-59.5-150.8zM226.6 493.9c-42.5 0-190-167.3-190-279.4 0-107.4 83.9-196.3 190-196.3 100.8 0 184.7 89 184.7 196.3.1 112.1-147.4 279.4-184.7 279.4zM338 206.8c0 59.1-51.1 109.7-110.8 109.7-100.6 0-150.7-108.2-92.9-181.8v.4c0 24.5 20.1 44.4 44.8 44.4 24.7 0 44.8-19.9 44.8-44.4 0-18.2-11.1-33.8-26.9-40.7 76.6-19.2 141 39.3 141 112.4z"/></svg>
                <p class="mt-0 text-l text-slate-700 font-bold capitalize"><?php echo "$row->address";?></p>
           </div></div>
          <p class="text-gray-500">Description :  <?php echo "$row->description";?></p>
          <div class="mt-0.5 flex items-end justify-between">
            <div class="flex items-center space-x-1.5">
              <i class="fi fi-rr-wheat"></i>
              <p class="mt-0 text-l text-slate-700 font-bold capitalize"><?php echo "$row->category";?></p>
           </div></div>
           <form method="POST" action="usr/user-confirm-booking.php?<?php echo "id=".$row->id?>">
           <div class="flex py-2 space-x-4">
            
            <button type="submit" class="h-14 px-6 py-2 font-semibold rounded-xl bg-green-600 hover:bg-green-500 text-white">
              Order Now
            </button>
            
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
 </div>


 <?php }?>


      
</div>
</section>

<div class='mt-16'>
<?php include("vendor/inc/footer.php");?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>

</html>



