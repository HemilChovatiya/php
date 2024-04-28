<?php
  include('vendor/inc/config.php');
  //Add USer
  if(isset($_POST['reset-pwd']))
    {
            $u_email=$_POST['u_email'];
            $query="select u_pwd from user where u_email=? limit 1";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('s',$u_email);
            $stmt->execute();
            $res=$stmt->get_result();
            $row=$res->fetch_object();
            if ($row) {
              $pwd = $row->u_pwd;
              if ($stmt) {
                $to_email = $u_email;
                $subject = "Reset Password to  your account";
                $body = "Hi, This is reset email pasword Email:".$u_email .'  Password:' .$pwd;
                $headers = "From: hemilchovatiya4@gmail.com";

                if (mail($to_email, $subject, $body, $headers)) {
                  $succ = "Email successfully sent to $to_email...";
                } else {
                  $err = "Email sending failed...";
                }
              } else {
                $err = "Please Try Again Later";
              }

            } else {
              $err1 = 'invalid username!';
            }



}
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Virtual APMC">

   <title>Virtual APMC | User - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="vendor/css/sb-admin.css" rel="stylesheet">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>

        <form method ="POST"> 
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="u_email" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Enter email address</label>
            </div>
            <p class='text-danger'><spam><?php if(isset($err1)) { echo $err1; } ?></spam></p>
          </div>
          <input type="submit"  class="btn btn-success btn-block" name="reset-pwd" value="Reset Password">
        </form>

        <div class="text-center">
          <a class="d-block small" href="index.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>

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
 <!--INject Sweet alert js-->
 <script src="vendor/js/swal.js"></script>

</body>

</html>
