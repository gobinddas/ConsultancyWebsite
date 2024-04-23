<?php
 include('adminHeader.php');
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="mainblock">
            <div class="block">
              Administrative Users 
              <br><br>
              <?php
                    $sql = "SELECT * FROM users";
                    $res = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($res);
                
                ?>
              <p><?php echo $count;?></p>
            </div>
            <div class="block">
              Blog counts
              <br><br>
              <?php
                    $sql = "SELECT * FROM blogs";
                    $res = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($res);
                
                ?>
              <p><?php echo $count;?></p>
            </div>
            <div class="block">
              Inquires
              <br><br>
              <?php
                    $sql = "SELECT * FROM inquiry WHERE status ='processing'";
                    $res = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($res);
                
                ?>
              <p><?php echo $count;?></p>
            </div>
            <div class="block">
              Responded Inquiries
              <br><br>
              <?php
                    $sql = "SELECT * FROM inquiry WHERE status ='completed'";
                    $res = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($res);
                
                ?>
              <p><?php echo $count;?></p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 Company ko naam. All rights reserved.</span>
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

