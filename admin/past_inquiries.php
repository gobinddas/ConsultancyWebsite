<?php 
  include('../config/constants.php');
  include('../config/functions.php');
  $index_user_data = index_loginval($conn);

  $userid= $index_user_data['user_id'];
  $name=$index_user_data['username'];

  if($index_user_data == false){
      header("Location: ../index.php");
  }
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../assets/img/raceeducare.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="dashboard.php"><img src="../assets/img/raceeducare.png" class="mr-2"style="height:65px;" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="dashboard.php="><img src="../assets/img/raceeducare.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <h3 toUpperCase()><?php echo ucfirst($name) ?></h3>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
              <a href="logout.php" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
        </ul>
        
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Blogs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add_blog.php">Add blog</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage_blog.php">Manage blogs</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add_admin.php"> Add Admins </a></li>
                <li class="nav-item"> <a class="nav-link" href="manage_admin.php"> Manage Admins </a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="inquiry.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title"><Inp>Inquiries</Inp></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="past_inquiries.php">
              <i class="icon-archive menu-icon"></i>
              <span class="menu-title">Past Inquiries</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Education Level</th>                        
                        <th>Preferred Destination</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if(isset($_GET['page'])){
                      $page = $_GET['page'];
                      }
                      else{
                          $page = 1;
                      }
                      
                      $offset = ($page - 1) * 10;
                        
                        // create a sql query to get all data
                        $sql = "SELECT * FROM inquiry WHERE status= 'completed' LIMIT $offset, 10";
                        $sql2 = "SELECT * FROM inquiry WHERE status= 'completed'";
    
                        $res = mysqli_query($conn, $sql);
                        $res2 = mysqli_query($conn, $sql2);
    
                        $count = mysqli_num_rows($res2);
                        $rowsPerPage = 10; // You've already limited the query to 2 rows per page
                        $total = ceil($count / $rowsPerPage);
                        
                        $sn=1;
  
                        if($count>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $name = $row['name'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $education_level = $row['education_level'];
                            $age = $row['age'];
                            $preferred_destination = $row['preferred_destination'];

                            ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo ucfirst($name); ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo ucfirst($education_level); ?></td>
                        <td><?php echo ucfirst($preferred_destination); ?></td>
                        <td>
                           
                            <a href="<?php echo SITEURL; ?>admin/inq_delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    else
                    {
                        echo "ERROR";
                    }

                    ?>
                </tbody>
            </table>
          </div>
          <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item ">
              <a class="page-link" href="<?php if($page <=1){echo '#';}else{echo "?page=".$page -1;} ?>" tabindex="-1">Previous</a>

            </li>
            
            <?php 
                
                
                for($i = 1; $i <= $total; $i++){

                    if($page==$i)
                    {
                        $active= "page_active";
                    }
                    else{
                        $active="";
                    }
            
                    // echo"<a href='?page=$i'><span class='$active'>". $i ."</span></a>";
                    echo"<li class='page-item'><a class='page-link' href='?page=$i'class='$active'>". $i ."</a></li>";

                }
                
                if($page!==$i)
                {
                 
                }
            
            ?>
            <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li> -->
            <li class="page-item">
              <a class="page-link" href="<?php if($page >= $total){echo '#';}else{echo "?page=".$page +1;} ?>">Next</a>
            </li>
          </ul>
        </nav>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 Company ko naam All rights reserved.</span>
            
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  
</body>

</html>

