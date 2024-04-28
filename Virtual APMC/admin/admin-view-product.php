<?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/apmcconfig.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">

<?php include('vendor/inc/head.php');?>

<body id="page-top">

 <?php include("vendor/inc/nav.php");?>


  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('vendor/inc/sidebar.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Product</a>
          </li>
          <li class="breadcrumb-item active">View Product</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-store-alt"></i>
                Product</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Phone</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Address</th>
                    <th>Owner</th>
                    <th>Status</th>
                    <th>img</th>
                </thead>
                <?php

                    $ret="SELECT * FROM product "; 
                    $stmt= $mysqli->prepare($ret) ;
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    $cnt=1;
                    while($row=$res->fetch_object())
                {
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $cnt;?></td>
                    <td><?php echo $row->pname;?></td>
                    <td><?php echo $row->category;?></td>
                    <td><?php echo $row->description;?></td>
                    <td><?php echo $row->phone;?></td>
                    <td>Rs.<?php echo $row->price;?></td>
                    <td><?php echo $row->p_quantity;?></td>
                    <td><?php echo $row->address;?></td>
                    <td><?php echo $row->p_owner;?></td>
                    <td><?php if($row->p_status == "Available"){ echo '<span class = "badge badge-success">'.$row->p_status.'</span>'; } else { echo '<span class = "badge badge-danger">'.$row->p_status.'</span>';}?></td>
                    <td><?php echo "<img src='../vendor/img/".$row->p_img_loc."' height='40px' width='40px'>";?></td>
                  </tr>
                </tbody>
                <?php $cnt = $cnt+1; }?>

              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
