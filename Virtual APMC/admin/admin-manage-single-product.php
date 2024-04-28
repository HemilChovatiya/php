<?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/apmcconfig.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['a_id'];
  //Add USer
  if(isset($_POST['upate_product']))
    {
            $id = $_GET['id'];
            $p_name=$_POST['p_name'];
            $p_des = $_POST['p_des'];
            $p_price=$_POST['p_price'];
            $p_quantity=$_POST['p_quantity'];
            $address=$_POST['address'];
            $phone=$_POST['phone'];
            $p_owner=$_POST['p_owner'];
            $p_category=$_POST['p_category'];
            $p_status=$_POST['p_status'];
            $p_pic_loc=$_FILES["p_pic_loc"]["name"];
            
		        move_uploaded_file($_FILES["p_pic_loc"]["tmp_name"],"../vendor/img/".$_FILES["p_pic_loc"]["name"]);

            if(empty($p_pic_loc) || !isset($p_pic_loc) || $p_pic_loc == UPLOAD_ERR_NO_FILE)
            {
                $ret="SELECT * FROM product"; //sql code to get to ten trains randomly
                if(isset($stmt)){
                $stmt->close();}
                $stmt= $mysqli->prepare($ret) ;
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                $cnt=1;
                $row=$res->fetch_object();
                $p_pic_loc=$row->p_img_loc;
            }
            $query="update product set pname=?, category=?, price=?, address=?, p_owner=?, p_status=?,description=?,p_quantity=?, p_img_loc=?,phone=? where id = ?";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('ssssssssssi', $p_name, $p_category,$p_price,$address,$p_owner,$p_status,$p_des,$p_quantity,$p_pic_loc,$phone,$id);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "Product Update $p_pic_loc;";
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
            <a href="#">Product</a>
          </li>
          <li class="breadcrumb-item active">Update Product</li>
        </ol>
        <hr>
        <div class="card">
        <div class="card-header">
            Update Product
        </div>
        <div class="card-body">
          <!--Add User Form-->
          <?php
            $aid=$_GET['id'];
            $ret="select * from product where id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
        {
        ?>
          <form method ="POST" enctype="multipart/form-data"> 
            
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" value="<?php echo $row->pname;?>" required class="form-control" id="exampleInputEmail1" name="p_name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Product Short Description</label>
                <input type="text" value="<?php echo $row->description;?>" class="form-control" id="exampleInputEmail1" name="p_des">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Product Total Price</label>
                <input type="text" value="<?php echo $row->price;?>" class="form-control" id="exampleInputEmail1" name="p_price">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Product Total Quantity</label>
                <input type="text" value="<?php echo $row->p_quantity;?>" class="form-control" id="exampleInputEmail1" name="p_quantity">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" value="<?php echo $row->address;?>" class="form-control" id="exampleInputEmail1" name="address">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="text" value="<?php echo $row->phone;?>" class="form-control" id="exampleInputEmail1" name="phone">
            </div>
 
            <div class="form-group">
              <label for="exampleFormControlSelect1">Product Owner</label>
              <select class="form-control" name="p_owner" id="exampleFormControlSelect1">
                <?php

                $ret="SELECT * FROM user"; //sql code to get to ten trains randomly
                if(isset($stmt)){
                $stmt->close();}
                $stmt= $mysqli->prepare($ret) ;
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                
                $cnt=1;
                while($row=$res->fetch_object())
                {
                ?>
                <option><?php echo $row->u_fname;?> <?php echo $row->u_lname;?></option>
                <?php } ?> 
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Product Category</label>
              <select class="form-control" name="p_category" id="exampleFormControlSelect1">
                <option>Crops</option>
                <option>Vegetable</option>
                <option>Fruits</option>
                <option>Organic</option>
                <option>Other</option>

              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Product Status</label>
              <select class="form-control" name="p_status" id="exampleFormControlSelect1">
                <option>Available</option>
                <option>Ordered</option>
                <option>Not Available</option>
                
              </select>
            </div>
            
            <div class="card form-group" style="width: 30rem">
            <div class="card-body">
                <h5 class="card-title">Product Picture</h5>
                <?php $aid=$_GET['id'];
            $ret="select * from product where id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            $row=$res->fetch_object(); ?>
            <img src="../vendor/img/<?php echo $row->p_img_loc;?>" height='40px' width='40px'>
                <input type="file"  class="btn btn-success" id="exampleInputEmail1" name="p_pic_loc">
            </div>
            </div>
            <hr>
            <button type="submit" name="upate_product" class="btn btn-success">Update Product</button>
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