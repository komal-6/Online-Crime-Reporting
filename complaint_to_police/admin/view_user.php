<?php 
session_start();
if (!isset($_SESSION['admin'])) {
 header("location:admin_login.php");
 exit();
}
 ?>
<?php 
require '../common/connection.php';
$select="select * from user_tbl where ISACTIVE!=2 and user_type=1";
$query=mysqli_query($conn,$select);
if ($query) {
  //echo "Data selected";
}
else
{
  echo "error";
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>view User</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index..php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Destination Information
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         <!-- <i class="fas fa-fw fa-cog"></i>-->
         <i class="fas fa-city"></i>
          <span> State</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">State Management</h6>
            <a class="collapse-item" href="state_add.php">Add State</a>
            <a class="collapse-item" href="state_view.php">View State</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <!-- <i class="fas fa-fw fa-wrench"></i> -->
          <i class="fas fa-city"></i>
          <span> City</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">City Management</h6>
            <a class="collapse-item" href="city_add.php">Add City</a>
            <a class="collapse-item" href="city_view.php">view city</a>
            
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities">
          <!-- <i class="fas fa-fw fa-wrench"></i> -->
          <i class="fas fa-city"></i>
          <span> Area</span>
        </a>
        <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Area Management</h6>
            <a class="collapse-item" href="Area_add.php">Area Add</a>
            <a class="collapse-item" href="Area_view.php">Area View</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
     

      

     <!--  <i class="fa fa-user" aria-hidden="true"></i> -->
         

      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      Police Station information
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages">
          <!-- <i class="fas fa-fw fa-folder"></i> -->
          <i class="fas fa-hotel"></i>
          <span>Police Station</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">PoliceStation Management</h6>
            <a class="collapse-item" href="policestation_add.php">Add PoliceStation</a>
             <a class="collapse-item" href="policestation_view.php">View PoliceStation</a>
             <a class="collapse-item" href="view_news.php">View News</a>
              <a class="collapse-item" href="view_complents.php">View Complaints</a>
               <a class="collapse-item" href="view_actions.php">View Actions</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4" aria-expanded="true" aria-controls="collapsePages">
          <!-- <i class="fas fa-fw fa-folder"></i> -->
          <i class="fas fa-list"></i>
          <span>Complaint Category</span>
        </a>
        <div id="collapsePages4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category Management</h6>
            <a class="collapse-item" href="category_add.php">Add Category</a>
             <a class="collapse-item" href="category_view.php">View Category</a>
          </div>
        </div>
      </li>
        
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
           
      <li class="nav-item">
        <a class="nav-link" href="view_user.php">
          <i class="fa fa-user"></i>
          <span>View User</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="feedback.php">
          <i class="fas fa-sticky-note"></i>
          <span>View Feedback</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contect_us.php">
          <i class="fas fa-user"></i>
          <span>Contact Us</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
      

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
     

            <!-- Nav Item - Alerts -->
            

            <!-- Nav Item - Messages -->
          
           <!-- <div class="topbar-divider d-none d-sm-block"></div>-->
              <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
            <!-- Nav Item - User Information -->
            <!--<li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="">
              </a>-->
              <!-- Dropdown - User Information -->
             <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>-->

          </ul>

        </nav>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>ID</th>
                      <th>FIRST_NAME</th>
                      <th>LAST_NAME</th>
                      <th>USERNAME</th>
                      <th>DOB</th>
                      <th>GENDER</th>
                      <th>CONTECT_NUMBER</th>
                      <th>Profile Pic</th>
                      <th>Date Of insert</th>
                      <th>Date of update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        if (mysqli_num_rows($query)>0) {
                        while ($row=mysqli_fetch_assoc($query)) {
                          # code...
                        
                      ?>
                    <tr class="text-center">
                      <td><?php echo $row['ID']; ?></td>
                      <td><?php echo $row['FIRST_NAME']; ?></td>
                      <td><?php echo $row['LAST_NAME']; ?></td>
                      <td><?php echo $row['USERNAME']; ?></td>
                      <td><?php  echo $row['DOB']; ?></td>
                      <td><?php echo $row['GENDER']; ?></td>
                      <td><?php echo $row['CONTECT_NUMBER']; ?></td>
                      <td><img height="120px" width="130px" src="../upload/<?php echo$row['PROFILE_PIC']; ?>"></td>
                      <td><?php echo $row['DOI'];?></td>
                      <td><?php echo $row['DOU'];?></td>
                      <td><a href="delete_user.php?id=<?php echo$row['ID']; ?>" class="btn btn-danger btn-md">Delete</a></td>
                    </tr>
                    <?php 
                      }
                        }
                        else{
                          echo "Data not Found";
                        }
                     ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          <!--<span>xxzzll</span>-->
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
