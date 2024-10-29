<?php
   include "conn.php";

    $countpending_query = mysqli_query($conn,  "SELECT * FROM `reservations` WHERE reservation_status = '1'");
    $num_pending = mysqli_num_rows($countpending_query);
    
    $countapproved_query = mysqli_query($conn,  "SELECT * FROM `reservations` WHERE reservation_status = '2'");
    $num_approved = mysqli_num_rows($countapproved_query);
   
    $countreturn_query = mysqli_query($conn,  "SELECT * FROM `reservations` WHERE reservation_status = '4'");
    $num_return = mysqli_num_rows($countreturn_query);
    
    
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/img/ui3.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  
    <title>ITSD - RESERVATION</title>
     
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="tables.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">ITSD<sup>Reservation</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            
           
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Records
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item ">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Inventory</span></a>
            </li>

             <!-- Nav - Reservation -->
             <li class="nav-item active">
                <a class="nav-link" href="reservation.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reservation</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                   
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                             <!--CODE NISA PARA SA DROPDOWN SANG PROFILE SA KILID2 NGA MAY LOGOUT-->
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                              
                        <!-- sa babaw upod admin nga profile sa kilid -->
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Account</span>
                                <img class="img-profile rounded-circle"
                                    src="img/ui3.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-2 text-gray-800">Reservation Management</h1>
                    <div class="clock-container text-dark">
        <div id="dateTime" class="date-text">

        </div>
</div>
</div>
</div>
<main class="bg-secondary bg-opacity-25 min-vh-50">
    
<div class="container-fluid p-3 p-md-4">
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
    <div class="fs-4 text-white fw-bolder">Approved Requests </div>
    <div class="text-secondary lead fw-normal" id="curr_date_time"></div>
  </div>
  <hr>
  <div class="row g-4">
  <div class="col-lg-3 col-md-6">
      <a href="reservation.php" class="text-decoration-none">
        <div class="card bg-gradient shadow-sm custom-card" style="background-color: #A569BD">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="bi bi-pencil-square fa-2x text-white-50"></i></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white">
              <?php
                    $count = mysqli_query($conn, "SELECT * FROM reservations");
                    $count_display = mysqli_num_rows($count);
                    echo $count_display;
                ?>
              </h2>
              <h5 class="text-white-50">View Records</h5>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-6">
      <a href="pending_reservation.php" class="text-decoration-none">
        <div class="card bg-warning bg-gradient shadow-sm custom-card">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="bi bi-folder2-open fa-2x text-white-50"></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white">
              <?php
                    echo $num_pending;
              ?>
                                                 
              </h2>
              <h5 class="text-white-50">Pending Requests</h5>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6">
      <a href="approved_reservation.php" class="text-decoration-none">
        <div class="card bg-primary bg-gradient shadow-sm custom-card">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="bi bi-check2-square  fa-2x text-white-50"></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white">
              <?php
                echo $num_approved
              ?>
              <h5 class="text-white-50">Approved Requests</h5>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6">
      <a href="return_reservation.php" class="text-decoration-none">
        <div class="card bg-success bg-gradient shadow-sm custom-card ">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="bi bi-arrow-clockwise fa-2x text-white-50"></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white">
              <?php
                    echo $num_return;
              ?>
                </h2>
              <h5 class="text-white-50">Returned Devices</h5>
            </div>
          </div>
        </div>
      </a>
    </div> 
   
</main>
     <br>
       <br> 
         <br>
         <div class="card-body">
            <div class="table-responsive">
            <?php
          
            $query = "SELECT * FROM reservations INNER JOIN reservation_status ON reservations.reservation_status=reservation_status.id_status 
            WHERE `label` ='Approved'";
            $query_run = mysqli_query($conn, $query);

        
        ?>
      
        
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">Request ID</th>
                    <th scope="col"> Date Requested</th>
                    <th scope="col">Department</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Request Equipment</th>
                    <th scope="col">Date From</th>                  
                    <th scope="col">Date To </th>
                    <th scope="col">Status</th>
                    <th scope="col">Requested By</th>
                    <th scope="col">Return</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  if($query_run)
                  {
                    foreach($query_run as $row)
                  {
                    $backgroundcolor="";
                    if($row['label'] == "Approved"){
                      $backgroundcolor = "primary";
                    }
            ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['datetoday']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['purpose']; ?></td>
                        <td><?php echo $row['equipment']; ?></td>
                        <td><?php echo $row['fromm']; ?></td>
                        <td><?php echo $row['too']; ?></td>
                        <td><?php echo "<button class='btn btn-$backgroundcolor '>".$row['label']."</button>"; ?></td>
                        <td><?php echo $row['reqparty']; ?></td>
                       
                       

                        <td>
                        <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#returnmodal_<?php echo $row['id']; ?>">
                       <i class="bi bi-arrow-clockwise"></i></button> 

                            
          </td>
                           <!-- Returned modal -->
              <div class="modal fade" id="returnmodal_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header bg-success">
                              <h3 class="modal-title text-white" id="exampleModalLabel">Faculty Returned the Equipment </h3>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <h4>Facilities/Equipment Returned</h4>
                              <br>
                              <h5>Requested Equipment: <?php echo $row['equipment']; ?></h5>                         
                              <h5>Requested Party: <?php echo $row['reqparty']; ?></h5>
                              <h5>Requested Department : <?php echo $row['department']; ?></h5>
                          </div>
                          <div class="modal-footer">
                              <form action="process.php?id=<?php echo $row['id']; ?>" method="POST">
                                   <button class="btn btn-secondary btn-lg" type="button" data-dismiss="modal">Cancel</button>
                                  <input type="submit" name="return_equipment" value="Confirm" class="btn btn-success btn-lg">
                              </form>
                          </div>
                      </div>
                  </div>
              </div>

                    </tr>

                    </div>
             <?php
                }
            }
            else
            {
                echo "no record";
            }
           
            
    
                
        ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<script>
    // DataTables initialization
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
</script>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
    function updateDateTime() {
      // Get the current date and time
      var currentDateTime = new Date();

      // Format the date and time as a string
      var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric'};
      var formattedDateTime = currentDateTime.toLocaleDateString('en-US', options);

      // Display the formatted date and time in the 'dateTime' div
      document.getElementById('dateTime').innerHTML = formattedDateTime;
    }

    // Update the date and time every second
    setInterval(updateDateTime, 1000);

    // Initial call to display the date and time immediately
    updateDateTime();
  </script>
  
    
     <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>