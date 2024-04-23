<?php 
  include('../config/constants.php');
  include('../config/functions.php');
  $index_user_data = index_loginval($conn);

  $userid= $index_user_data['user_id'];
  $name=$index_user_data['username'];
  $id = $_GET['id'];


  if($index_user_data == false){
      header("Location: ../index.php");
  }

  //   getting data from database
  $sql = "SELECT * FROM users WHERE id=$id";

  $res = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($res);
  $row=mysqli_fetch_assoc($res);

  $id = $row['id'];
  $firstname = $row['first_name'];
  $lastname = $row['last_name'];
  $user_type = $row['user_type'];
  $username = $row['username'];
  $userid = $row['user_id'];
  $password = $row['password'];

  if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // something was posted
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $user_type = $_POST['user_type'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($firstname) && !empty($lastname) && !empty($user_type) && !empty($username) && !empty($password)){

            $user_id = random_num(9);
            $query = "UPDATE users SET 
            first_name = '". $firstname ."',
            last_name = '". $lastname ."',
            user_type = '". $user_type ."',
            username = '". $username ."',
            password = '". $password ."'
            WHERE id='". $id ."'";

            mysqli_query($conn,$query);

            header("Location: manage_admin.php");
        }
        else{
            echo "enter valid information!";
        }
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
  <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0/dist/quill.snow.css" rel="stylesheet" />
  <style>
    .ck-editor__editable[role="textbox"] {
    /* Editing area */
    min-height: 200px;
}
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="dashboard.php"><img src="../assets/img/raceeducare.png" class="mr-2"style="height:65px;" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="../assets/img/raceeducare.png" alt="logo"/></a>
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
        <div class="blog-post">
            <h2>Add Admin</h2>
            
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
            <input type="text" class="form-control"  placeholder="First name" name="firstname"value="<?php echo $firstname; ?>" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text"class="form-control" placeholder="Last name" name="lastname"value="<?php echo $lastname; ?>"required>
            </div>
        </div>
            
           
            <select name="user_type" class="custom-select" >
               <?php if($user_type == "admin"){
                echo'<option value="admin" selected>Admin</option>';
               }
               else{
                echo'<option value="editor" selected>editor</option>';
               }
                ?>
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
            </select> <br> <br>
            <input type="text" placeholder="username" name="username" value="<?php echo $username; ?>"required><br>
            <input type="text" placeholder="password" name="password"value="<?php echo $password; ?>"required>
            
            <input type="submit"name="submit" value="Submit" class="subbtn">
        </form>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
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
  <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>

</body>

</html>

