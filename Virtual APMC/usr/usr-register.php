<!--Server Side Scripting To inject Login-->
<?php
  //session_start();
  include('vendor/inc/config.php');
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
  //Add USer
  if(isset($_POST['add_user']))
    {

            $u_fname=$_POST['u_fname'];
            $u_lname = $_POST['u_lname'];
            $u_phone=$_POST['u_phone'];
            $u_addr=$_POST['u_addr'];
            $u_email=$_POST['u_email'];
            $u_pwd=$_POST['u_pwd'];
            $query="insert into user(u_fname, u_lname, u_phone, u_addr, u_email, u_pwd) values(?,?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('ssssss', $u_fname,  $u_lname, $u_phone, $u_addr, $u_email, $u_pwd);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "Account Created Proceed To Log In";
                    
                }
                else 
                {
                    $err = "Please Try Again Later";
                }
            }
?>
<!--End Server Side Scriptiong-->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tranport Management System, Saccos, Matwana Culture">
  <meta name="author" content="MartDevelopers ">

  <title>Virtual APMC Client- Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
  <link href="vendor/css/sb-admin.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-dark">
<?php if(isset($succ)) {?>
                        <!--This code for injecting an alert-->
        <script>
                    setTimeout(function () 
                    { 
                        swal("Success!","<?php echo $succ;?>!","success");
                        location='index.php';
                        
                    },
                        100);
                        
                        
        </script>

        <?php } ?>
        <?php if(isset($err)) {?>
        <!--This code for injecting an alert-->
        <script>
                    setTimeout(function () 
                    { 
                        swal("Failed!","<?php echo $err;?>!","Failed");
                    },
                        100);
        </script>

        <?php } ?>
        <section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-0 md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
              
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-3 sm:p-5">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Create an account
              </h1>
              <form class="space-y-8 md:space-y-0" method="POST">
                  <div>
                      <label for="firstname" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                      <input type="text" name="u_fname" id="exampleInputEmail1" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your First Name" required="">
                  </div>
                  <div>
                      <label for="lastname" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                      <input type="text" name="u_lname" id="exampleInputEmail1" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Last Name" required="">
                  </div>
                  <div>
                      <label for="contantno" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Contact No</label>
                      <input type="text" name="u_phone" id="exampleInputEmail1" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+91 9956734572" required="">
                  </div>
                  <div>
                      <label for="address" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                      <input type="text" name="u_addr" id="exampleInputEmail1" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="City" required="">
                  </div>
                  <div>
                      <label for="inputemail" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                      <input type="email" name="u_email" id="exampleInputEmail1" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@123.emqil" required="">
                  </div>
                  <div>
                      <label for="inputpassword" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="u_pwd" id="exampleInputPassword1" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5 mt-2" >
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                          </div>
                          <div class="ml-2 mt-2 text-sm">
                          <label for="remember" class="text-splate-500 dark:text-gray-300">I accept the Terms and Conditions</label> 
                          </div>
                      </div>

                      <!-- <a href="usr-forgot-pwd.php" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a> -->
                  </div>
                  <button type="submit"  name="add_user" onclick()="index.php" class="focus:outline-none text-white w-full bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Sign in</button>
                  <div class="flex items-center justify-between">                   
                          <div class="ml-0 mt-1 text-sm">
                          <label for="remember" class="text-splate-500 dark:text-gray-300">Already Have an Account </label> <a href="index.php" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Login?</a>
                          </div>
                      </div>

              </form>
          </div>
      </div>
  </div>
</section>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!--INject Sweet alert js-->
 <script src="vendor/js/swal.js"></script>

</body>

</html>





























