<?php
            $aid=$_SESSION['u_id'];
            $ret="select * from user where u_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
        {
        ?>
            <ul class="sidebar navbar-nav"  style="background-color:white">
                  <li class="nav-item active">
                    <a class="nav-link" style="color:#292524" href="user-dashboard.php">
                      <i class="fas fa-fw fa-tachometer-alt"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color:#292524" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-fw fa-user"></i>
                      <span>My Profile</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                      <h6 class="dropdown-header text-capitalize"><?php echo $row->u_fname;?> <?php echo $row->u_lname;?></h6>
                      <a class="dropdown-item" href="user-view-profile.php">View</a>
                      <a class="dropdown-item" href="user-update-profile.php">Update</a>
                      <a class="dropdown-item" href="user-change-pwd.php">Change Password</a>

                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color:#292524" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-store-alt"></i>
                      <span>Products</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                      <h6 class="dropdown-header">Available Products:</h6>
                      <a class="dropdown-item" href="user-add-product.php">Add</a>
                      <a class="dropdown-item" href="user-view-product.php">View</a>
                      <a class="dropdown-item" href="user-manage-product.php">Manage</a>
                      <a class="dropdown-item" href="usr-product-order.php">My Product Order</a>
                    </div>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" style="color:#292524" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-fw fa-book"></i>
                      <span>Orders</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                      <h6 class="dropdown-header">Orders:</h6>
                      <a class="dropdown-item" href="usr-book-product.php">Add</a>
                      <a class="dropdown-item" href="user-view-booking.php">View</a>
                      <a class="dropdown-item" href="user-manage-booking.php">Manage</a>
                    </div>
                  </li>
                
                  <li class="nav-item">
                    <a class="nav-link" style="color:#292524" href="user-give-feedback.php">
                      <i class="fas fa-fw fa-comments"></i>
                      <span>Feedbacks</span></a>
                  </li>
                  
                </ul>
<?php }?>