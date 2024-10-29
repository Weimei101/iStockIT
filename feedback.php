<?php
  include "conn.php";

 

  $get_name = mysqli_query($conn, "SELECT * FROM admins");
  while($row = mysqli_fetch_object($get_name)){
  
      $name = $row -> name;
      
      /////////////////////////////////////* rating *//////////////////////////////////
      $VerySatisfactory = mysqli_query($conn,  "SELECT * FROM `feedback` WHERE rating = 'Very Satisfactory'");
      $num_verysatisfactory = mysqli_num_rows($VerySatisfactory); 

      $Satisfactory = mysqli_query($conn,  "SELECT * FROM `feedback` WHERE rating = 'Satisfactory'");
      $num_satisfactory = mysqli_num_rows($Satisfactory); 

      $medicore = mysqli_query($conn,  "SELECT * FROM `feedback` WHERE rating = 'Medicore'");
      $num_medicore = mysqli_num_rows($medicore); 

      $Poor = mysqli_query($conn,  "SELECT * FROM `feedback` WHERE rating = 'Poor'");
      $num_poor = mysqli_num_rows($Poor); 
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
    <link href="assets/img/ui3.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  
    <title>ITSD - Feedback</title>
     
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)); /* Adjust the width of columns as needed */
        grid-gap: 20px; /* Adjust the gap between grid items */
    }

    .grid-item {
        border: 5px solid #ccc;
        padding: 20px;
        font-size: 18px; /* Adjust the font size */
        overflow-wrap: break-word; /* Ensure text wrapping */
        word-wrap: break-word; /* For older browser compatibility */
    }

    .grid-item strong {
        font-size: 18px; /* Adjust the font size for strong elements */
    }
</style>
    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="tables.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">ITSD<sup>FeedBack</sup></div>
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
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Inventory</span></a>
            </li>

             <!-- Nav - Reservation -->
             <li class="nav-item">
                <a class="nav-link" href="reservation.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reservation</span></a>
            </li>
             <!-- Nav - Reservation -->
             <li class="nav-item active">
                <a class="nav-link" href="feedback.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Feedback</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php
                                    echo $name;
                                 ?>
                                </span>
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

                    <!-- Page Heading -->
                     <!-- table sulat2 -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                   

                    <!-- DataTales Example -->
                     <!-- Iya ka table ni sa inventory -->
                     <div class="card shadow mb-4">
                     <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary">Faculty FeedBack</h1>
    
      
</div>

<!-------------------------- Logout Modal----------------------->
<!-- ############################################################################################################################################# -->
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

            </div>
            <div class="row">

        <!-- Pending Request -->
        <div class="col-md-3 mb-5">
            <a href="#" class="card-link">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                Very Satisfactory
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  <?php echo $num_verysatisfactory ?>
                                 
                                </div>
                            </div>
                            <div class="col-auto">
                            <i class="bi bi-emoji-heart-eyes fa-2x" style="color: green;"></i>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-5">
            <a href="#" class="card-link">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                Satisfactory
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  <?php echo $num_satisfactory ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-emoji-smile fa-2x" style="color: blue;"></i>
                              
                               
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-5">
            <a href="#" class="card-link">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-secondary text-uppercase mb-1">
                                    Medicore
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  <?php echo $num_medicore ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-emoji-expressionless fa-2x" style="color: gray"></i>
                              
                               
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-5">
            <a href="#" class="card-link">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-danger text-uppercase mb-1">
                                  Poor
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  <?php echo $num_poor ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-emoji-frown fa-2x" style="color: red"></i>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
      
        
        
            <div class="grid-container mt-5">
        <?php
$getdata = mysqli_query($conn, "SELECT * FROM feedback ORDER BY feedback_id DESC");
while ($row = mysqli_fetch_array($getdata)) {

    $backgroundcolor="";
    if($row['rating'] == "Very Satisfactory"){
        $backgroundcolor = "success";
    }
    elseif ($row['rating'] == "Satisfactory"){
        $backgroundcolor = "primary";
    }
    elseif ($row['rating'] == "Medicore"){
        $backgroundcolor = "secondary";
    }
   
    elseif ($row['rating'] == "Poor"){
        $backgroundcolor = "danger";
    }
?>
    
    <div class="grid-item">
        <div><strong>Date:</strong> &nbsp;<?php echo $row['datetoday']; ?></div>
        <div><strong>Rating: </strong> &nbsp; <?php echo "<button class='btn btn-$backgroundcolor'> ".$row['rating']."</button>"; ?></div><br>        
        <div><strong>Message:</strong> &nbsp; <?php echo $row['message']; ?></div>
    </div>
<?php
}
?>

            </tbody>
        </table>
<script>
    // DataTables initialization
    $(document).ready(function () {
        $('#dataTable').DataTable();
        
    });
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