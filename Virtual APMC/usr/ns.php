<?php
session_start();
include('vendor/inc/config.php');
if(!isset($_GET['category']))
{
  $category="%%";
}
else{ $category=$_GET['category'];}  ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Virtual APMC">
  <meta name="author" content="MartDevelopers">

  <title>Virtual APMC - User| Client Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <!-- <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"> -->

  <!-- Custom styles for this template-->
  <link href="vendor/css/sb-admin.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar static-top" style="background-color: #F3F4F6; ">

    <a class="navbar-brand mr-4" href="admin-dashboard.php"  style="align-self: center; font-size: 1.25rem; line-height: 1.75rem; font-weight: 600; white-space: nowrap;">Virtual APMC</a>

    <button class="btn btn-link btn-sm text-black order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
     <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>-->

    

  </nav>
  <!-- onMouseOver="this.style.backgroundColor='#F3F4F6'" onMouseOut="this.style.backgroundColor='white'" -->
  <!-- hover-#d1d5db color:#374151-->
  <div id="wrapper"  >

    <!-- Sidebar -->
 
            <ul class="sidebar navbar-nav"  style="background-color:#f9fafb;">
                  <li class="nav-item active" >
                    <a class="nav-link"  onMouseOver="this.style.backgroundColor='#d1d5db'" onMouseOut="this.style.backgroundColor='#f9fafb'" style="color: #374151; border-radius:8px;"  href="user-dashboard.php">
                      <i class="fas fa-fw fa-tachometer-alt"  style="color: #374151;"  ></i>
                      <span  style="color: #374151;"  >Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" onMouseOver="this.style.backgroundColor='#d1d5db'" onMouseOut="this.style.backgroundColor='#f9fafb'" style="color: #374151; border-radius:8px;" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-user"></i>
                      <span  >My Profile</span>
                    </a>
                    <div class="dropdown-menu"  aria-labelledby="pagesDropdown" style="color: #374151;">
                      <h6 class="dropdown-header">dcvbn</h6>
                      <a class="dropdown-item"   href="user-view-profile.php" >View</a>
                      <a class="dropdown-item"   href="user-update-profile.php">Update</a>
                      <a class="dropdown-item"     href="user-change-pwd.php">Change Password</a>

                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"   onMouseOver="this.style.backgroundColor='#d1d5db'" onMouseOut="this.style.backgroundColor='#f9fafb'" style="color: #374151; border-radius:8px;" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-shopping-cart"></i>
                      <span >Products</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown"  style="color: #374151;">
                      <h6 class="dropdown-header"  >Available Products:</h6>
                      <a class="dropdown-item"   href="usr-book-product.php">Book</a>
                    </div>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" onMouseOver="this.style.backgroundColor='#d1d5db'" onMouseOut="this.style.backgroundColor='#f9fafb'" style="color: #374151; border-radius:8px;"   href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-fw fa-book"  ></i>
                      <span >Orders</span>
                    </a>
                    <div class="dropdown-menu" style="color: #374151;" aria-labelledby="pagesDropdown">
                      <h6 class="dropdown-header">Orders:</h6>
                      <a class="dropdown-item"  href="usr-book-product.php">Add</a>
                      <a class="dropdown-item"   href="user-view-booking.php">View</a>
                      <a class="dropdown-item"   href="user-manage-booking.php">Manage</a>
                    </div>
                  </li>
                
                  <li class="nav-item">
                    <a class="nav-link" href="user-give-feedback.php" onclick()="style='background-color: #374151;'" onMouseOver="this.style.backgroundColor='#d1d5db'" onMouseOut="this.style.backgroundColor='#f9fafb'" style="color: #374151; border-radius:8px;">
                      <i class="fas fa-fw fa-comments"  ></i>
                      <span >Feedbacks</span></a>
                  </li>
                  
                </ul>
    <!--End Sidebar-->

    <div id="content-wrapper" style="background-color:#F3F4F6;">

      <div class="container-fluid">


      <!-- Product List -->
  <section class="py-0 bg-gray-100">
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
     <article  class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
        <a href="productpage.php?id=<?php echo $row->id;?>">
          <div class="relative flex items-end overflow-hidden rounded-xl">
            <img alt="person capturing an image" src="../vendor/img/<?php echo $row->p_img_loc;?>" tabindex="0" class="focus:outline-none w-full h-44" />
          </div>
  
          <div class="mt-1 p-2">
            <h2 class="text-slate-700 font-bold capitalize"><?php echo "$row->pname";?></h2>
            <div class="mt-0.5 flex items-end justify-between">
            <div class="flex items-center space-x-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M370 63.6C331.4 22.6 280.5 0 226.6 0 111.9 0 18.5 96.2 18.5 214.4c0 75.1 57.8 159.8 82.7 192.7C137.8 455.5 192.6 512 226.6 512c41.6 0 112.9-94.2 120.9-105 24.6-33.1 82-118.3 82-192.6 0-56.5-21.1-110.1-59.5-150.8zM226.6 493.9c-42.5 0-190-167.3-190-279.4 0-107.4 83.9-196.3 190-196.3 100.8 0 184.7 89 184.7 196.3.1 112.1-147.4 279.4-184.7 279.4zM338 206.8c0 59.1-51.1 109.7-110.8 109.7-100.6 0-150.7-108.2-92.9-181.8v.4c0 24.5 20.1 44.4 44.8 44.4 24.7 0 44.8-19.9 44.8-44.4 0-18.2-11.1-33.8-26.9-40.7 76.6-19.2 141 39.3 141 112.4z"/></svg>
                <p class="mt-0 text-l text-slate-700 font-bold capitalize"><?php echo "$row->address";?></p>
           </div></div>
            <p class="mt-0.5 text-l text-slate-700 font-bold capitalize">₹<?php echo "$row->price/$row->p_quantity";?></p>
            <form method="POST" action="../productpage.php?<?php echo 'id='.$row->id;?>">
            <div class="mt-3 flex items-center justify-center px-1">
            <div class="flex items-center space-x-1.5 rounded-lg bg-green-700 px-12 py-1.5 w-full text-white duration-100 hover:bg-green-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                    <button class="justify-center text-sm">Order Now</button>
              </div></div>
            </form>
          </div>
        </a>
      </article>


      <?php }?>


      
      </div>
  </section>
  

      <!-- Sticky Footer -->
     <?php include("vendor/inc/footer.php");?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->


 
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="vendor/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="vendor/js/demo/datatables-demo.js"></script>
  <script src="vendor/js/demo/chart-area-demo.js"></script>

  <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

</body>

</html>
