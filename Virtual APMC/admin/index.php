<!--Server Side Scripting Language to inject login code-->
<?php
    session_start();
    include('vendor/inc/apmcconfig.php');//get configuration file
    if(isset($_POST['Usr-login']))
    {
      $u_email=$_POST['u_email'];
      $u_pwd=($_POST['u_pwd']);//
      $stmt=$mysqli->prepare("SELECT a_email, a_pwd, a_id FROM tms_admin WHERE a_email=? and a_pwd=? ");
      //sql to log in user
      $stmt->bind_param('ss',$u_email,$u_pwd);//bind fetched parameters
      $stmt->execute();//execute bind
      $stmt -> bind_result($u_email,$u_pwd,$u_id);//bind result
      $rs=$stmt->fetch();
      $_SESSION['a_id']=$u_id;//assaign session to user id
      
      $uip=$_SERVER['REMOTE_ADDR'];
      $ldate=date('d/m/Y h:i:s', time());
      if($rs)
      {//get user logs
         /*$aid=$_SESSION['a_id'];
         $uemail=$_POST['u_email'];
        $ip=$_SERVER['REMOTE_ADDR'];
       /* echo $ip;

        $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
        $addrDetailsArr = unserialize(file_get_contents($geopluginURL));
        $city = $addrDetailsArr['geoplugin_city'];
        $country = $addrDetailsArr['geoplugin_countryName'];
        print_r($addrDetailsArr);
        echo ' '.$city.'  '.$country;
        $log="insert into tms_syslogs(u_id, u_email, u_ip, u_city, u_country) values(?,?,?,?,?)";
        echo $log;
        $stmt=$mysqli->prepare($log);
        $rc=$stmt->bind_param('issss', $uid,$uemail,$ip,$city,$country);
        $stmt->execute();
        */
        // $rc=$stmt->bind_param('isiss',$uid,$uemail,$ip,$city,$country);
        if($stmt)
        {
         header("location:../index.php");
         }
        }
      else
      {
      #echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
      $error = "Access Denied Please Check Your Credentials";
      }
  }
?>
<!--End Server Side Script Injection-->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Virtual APMC - Admin Login</title>

  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->

  <!-- Custom styles for this template-->
  <!-- <link href="vendor/css/sb-admin.css" rel="stylesheet"> -->
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-dark">

<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Sign in to your Admin account
              </h1>
              <?php if(isset($error)) {?>
          <!--This code for injecting an alert-->
              <script>
                    setTimeout(function () 
                    { 
                      swal("Failed!","<?php echo $error;?>!","error");
                    },
                      100);
              </script>
                  
          <?php } ?>
              <form class="space-y-4 md:space-y-6" method="POST">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input type="email" name="u_email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="u_pwd" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                          </div>
                          
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                          </div>
                      </div>
                      <!-- <a href="usr-forgot-password.php" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a> -->
                  </div>
                  <input type="submit" name="Usr-login" placeholder="Sign In" value="Sign In" class="focus:outline-none text-white w-full bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                       Wanted to go home page ? <a href="../index.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Home Page</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>

</body>

</html>
