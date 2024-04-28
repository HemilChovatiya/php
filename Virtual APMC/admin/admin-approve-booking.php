<?php
  session_start();
  include('vendor/inc/apmcconfig.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['a_id'];
  //Add Booking
  if(isset($_POST['approve_booking']))
    {
            $o_id = $_GET['o_id'];
            $o_status  = $_POST['o_book_status'];
            $query="update apmc_order set o_status=? where apmc_order.o_id=?";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('si',  $o_status, $o_id);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "Booking Approved";
                }
                else 
                {
                    $err = "Please Try Again Later";
                }
            }
?>
<!DOCTYPE html>
<html lang="en">

<?php include('vendor/inc/head.php');?>

<body id="page-top">
 <!--Start Navigation Bar-->
  <?php include("vendor/inc/nav.php");?>
  <!--Navigation Bar-->

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("vendor/inc/sidebar.php");?>
    <!--End Sidebar-->
    <div id="content-wrapper">

      <div class="container-fluid">
      <?php if(isset($succ)) {?>
                        <!--This code for injecting an alert-->
        <script>
                    setTimeout(function () 
                    { 
                        swal("Success!","<?php echo $succ;?>!","success");
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

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Bookings</a>
          </li>
          <li class="breadcrumb-item active">Approve</li>
        </ol>
        <hr>
        <div class="card">
        <div class="card-header">
          Approve Booking
        </div>
        <div class="card-body">
          <!--Add User Form-->
          <?php
          $o_id = $_GET['o_id'];
          $ret = "select * from apmc_order where o_id=?";
          $stmt = $mysqli->prepare($ret);
          $stmt->bind_param('i', $o_id);
          $stmt->execute(); //ok
          $res = $stmt->get_result();
          //$cnt=1;

            while($row=$res->fetch_object())
        {
        ?>
          <form method ="POST"> 
          <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" value="<?php echo $row->f_name;?>" required class="form-control" id="exampleInputEmail1" readonly name="u_fname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" value="<?php echo $row->l_name;?>" id="exampleInputEmail1" readonly name="u_lname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contact</label>
                <input type="text" class="form-control" value="<?php echo $row->o_phone;?>" id="exampleInputEmail1" readonly name="u_phone" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" value="<?php echo $row->o_add;?>" id="exampleInputEmail1" readonly name="u_addr" required>
            </div>      

             
            <div class="form-group">
              <label for="exampleFormControlSelect1">Product id:</label>
              <input type="text" class="form-control" value="<?php echo $row->p_id;?>" id="exampleInputEmail1" readonly name="id">
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Product Name:</label>
              <input type="text" class="form-control" value="<?php echo $row->p_name;?>" id="exampleInputEmail1" readonly name="p_name">
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Product Category:</label>
              <input type="text" class="form-control" value="<?php echo $row->p_category;?>" id="exampleInputEmail1" readonly name="p_category">
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Product Price:</label>
              <input type="text" class="form-control" value="<?php echo $row->p_price;?>" id="exampleInputEmail1" readonly name="p_price">
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Product Qty:</label>
              <input type="text" class="form-control" value="<?php echo $row->p_qty;?>" id="exampleInputEmail1" readonly name="p_quantity">
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Seller Name:</label>
              <input type="text" class="form-control" value="<?php echo $row->p_seller;?>" id="exampleInputEmail1" readonly name="p_owner">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Booking Date</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->o_date;?>"  name="o_bookdate" readonly required>
            </div>
       
            <div class="form-group">
              <label for="exampleFormControlSelect1">Booking Status</label>
              <select class="form-control" name="o_book_status" id="exampleFormControlSelect1" required>
                <option>Approved</option>
                <option>Pending</option>
              </select>
            </div>
  
            <button type="submit" name="approve_booking" class="btn btn-success">Approve Booking</button>
          </form>
          <!-- End Form-->
        <?php }?>
        </div>
      </div>
       
      <hr>
     

      <!-- Sticky Footer -->
      <?php include("vendor/inc/footer.php");?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="admin-logout.php">Logout</a>
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
