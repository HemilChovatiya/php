 <!-- Header Navbar -->
 <?php 
   
 ?>
 <nav class="fixed top-0 left-0 z-20 w-full border-b border-gray-200 bg-white py-2.5 px-6 sm:px-4">
    <div class="container mx-auto flex max-w-6xl flex-wrap items-center justify-between">
      <a href="#" class="flex items-center hover:no-underline hover:text-green-800">  
        <span class="self-center whitespace-nowrap text-xl font-semibold"><i class="fi fi-rr-wheat text-green-800"></i> Virtual APMC</span>
      </a>
      <div class="mt-2 sm:mt-0 sm:flex md:order-2">
        <!-- Login Button -->
        <?php 
        if(isset($_SESSION['u_id']) || isset($_SESSION['a_id']))
        {
           if(isset($_SESSION['u_id']))
           {
            $ret="SELECT * FROM user where u_id='".$_SESSION['u_id']."' LIMIT 1 "; //get all feedbacks
            $stmt= $mysqli->prepare($ret) ;
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            $cnt=1;
            while($row=$res->fetch_object())
            {
              $name=$row->u_fname.' '.$row->u_lname;
              $dashboard='usr/user-dashboard.php';
              $signout='usr/user-logout.php';
            }
           }
           if(isset($_SESSION['a_id']))
           {
            $ret="SELECT * FROM tms_admin where a_id='".$_SESSION['a_id']."' LIMIT 1 "; //get all feedbacks
            $stmt= $mysqli->prepare($ret) ;
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            $cnt=1;
            while($row=$res->fetch_object())
            {
              $name=$row->a_name;
              $dashboard='admin/admin-dashboard.php';
              $signout='admin/admin-logout.php';
            }
           }
          ?>
            <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-white bg-green-700 hover:bg-white-800 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
            <img src="vendor/img/profile.png"
                  class="inline-flex items-center rounded-3xl h-6 w-6"/>
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                  <div class="font-medium truncate capitalize"><?php echo $name;?></div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                  <li>
                    <a href="index.php" class="block px-4 py-2 hover:text-gray-900 hover:bg-gray-100 hover:no-underline dark:hover:bg-gray-600 dark:hover:text-white">Home</a>
                  </li>
                  <li>
                    <a href="<?php echo $dashboard;?>" class="block px-4 py-2 hover:text-gray-900 hover:bg-gray-100 hover:no-underline dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                  </li>
                </ul>
                <div class="py-2">
                  <a href="<?php echo $signout;?>" class="block px-4 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100 hover:no-underline dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </div>
            </div>
        <?php } else {?>
        <a href="usr/index.php" class="rounded mr-3 hidden border border-green-700 py-1.5 px-6 text-center text-sm font-medium text-green-700 focus:outline-none focus:ring-4 focus:ring-green-400 md:inline-block rounded-lg hover:no-underline hover:text-green-900">Login</a>
        <a href="usr/usr-register.php" class="rounded mr-3 hidden border border-green-700 py-1.5 px-6 text-center text-sm font-medium text-green-700 focus:outline-none focus:ring-4 focus:ring-green-400 md:inline-block rounded-lg hover:no-underline hover:text-green-900">Register</a>
        <a href="admin/" class="rounded mr-3 hidden bg-green-700 py-1.5 px-6 text-center text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-400 md:mr-0 md:inline-block rounded-lg hover:no-underline">Admin</a>
          
        <?php }?>
        

      </div>
      <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-sticky">
        <ul class="mt-2 flex flex-col  bg-gray-50 p-0 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:text-sm md:font-medium">
          <li>
            <a href="index.php" class="block rounded py-2 pl-3 pr-4 hover:no-underline hover:text-green-800 text-gray-700 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-green-700" aria-current="page">Home</a>
          </li>
          <li>
            <a href="about.php" class="block rounded py-2 pl-3 pr-4 hover:no-underline hover:text-green-800 text-gray-700 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-green-700">About</a>
          </li>
          <li>
            <a href="product.php" class="block rounded py-2 pl-3 pr-4 hover:no-underline hover:text-green-800 text-gray-700 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-green-700">Product</a>
          </li>
          <li>
            <a href="contact.php" class="block rounded py-2 pl-3 pr-4 text-gray-700 hover:no-underline hover:text-green-800 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-green-700">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  


  