<?php
   include "conn.php";
  
    
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
  
    <title>ITSD - USERS</title>
     
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
                <div class="sidebar-brand-text mx-3">ITSD<sup>USERS</sup></div>
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
                Components
            </div>
            </li>
             <!-- IYA NI SA KA UTILITIES DASHBOARD-->
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Account Management</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="#" data-bs-toggle="modal" data-bs-target="#CreateAdminmodal">Create Admin Account</a>                   
                        <a class="collapse-item" href="record_user.php">Account Records</a>
                        <a class="collapse-item" href="#">Account Admin</a>
                    </div>
                </div>
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
             <li class="nav-item">
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

                    <!-- Page Heading -->
                     <!-- table sulat2 -->
                    <h1 class="h3 mb-2 text-gray-800">RECORDS</h1>
                   

                    <!-- DataTales Example -->
                     <!-- Iya ka table ni sa inventory -->
                     <div class="card shadow mb-4">
                     <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary">Faculty Account</h1>
</div>
<div class="card-body">
    <div class="table-responsive">
    <?php
       
        $query = "SELECT * FROM user";
        $query_run = mysqli_query($conn, $query);
    ?>
   
        
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">FACULTY ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>                  
                    <th scope="col">School ID</th>
                    <th scope="col">Department</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  if($query_run)
                  {
                    foreach($query_run as $row)
                  {
            ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['pass']; ?></td>
                        <td><?php echo $row['schoolid']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                       
                       

                        <td>
                           
                            <button type="button" class="btn btn-success editbtn" data-bs-toggle="modal" data-bs-target="#editUserModal-<?php echo $row['id']; ?>">
                                <i class="fas fa-edit"></i></button> 

                            <button type="button" class="btn btn-danger editbtn"  data-bs-toggle="modal" data-bs-target="#deleteModal-<?php echo $row['id'] ?>">                                
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </button>


                                             <!-- Delete Inventory Modal -->
<!-- ############################################################################################################################################# -->
                <div class="modal fade" id="deleteModal-<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel-<?php echo $row['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel-_<?php echo $row['id'] ?>">Confirm Deletion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this item?
                            </div>
                            <div class="modal-footer">
                                <form action="delete_user.php" method="POST">
                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                    <button type="submit" class="btn btn-danger" name="delete_user">Delete</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                           


                            <!-------------------------- UPDATE USER MODAL-------------------------------------->
<!-- ############################################################################################################################################# -->
              <div class="modal fade" id="editUserModal-<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-primary">
                      <h3 class="modal-title text-white" style="font-weight: bold;" id="staticBackdropLabel">Update Faculty Account</h3>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                          
           <!--------------------------FORM USER MODAL-------------------------------------->
                          <form action="process.php" method="POST">

                    <input type="hidden" name="account_update" value="<?php echo $row['id']; ?>">
                            <div class="input-group" style="border: 2px solid; padding: 1px;">
                                <div class="input-group-text bg-primary text-white">
                                <i class="bi bi-person-circle"></i>
</div>
                           <input type="text" class="form-control"  name="fname" id="fname" placeholder="First Name:" value="<?php echo $row['fname']; ?>">
 </div><br>
                            <div class="input-group" style="border: 2px solid; padding: 1px;">
                                <div class="input-group-text bg-primary text-white">
                                <i class="bi bi-person-check-fill"></i>
 </div>
                            <input type="text" class="form-control"  name="lname" id="lname" placeholder="Last Name:" value="<?php echo $row['lname']; ?>">
</div><br>
                             <div class="input-group" style="border: 2px solid; padding: 1px;">
                                 <div class="input-group-text bg-primary text-white">
                                 <i class="bi bi-envelope-arrow-up-fill"></i>     
 </div>
                            <input type="text" class="form-control"  name="email" id="email" placeholder="New Email:" value="<?php echo $row['email']; ?>">
</div><br>
                              <div class="input-group" style="border: 2px solid; padding: 1px;">
                                  <div class="input-group-text bg-primary text-white">
                                  <i class="bi bi-lock-fill"></i> 
</div>
                            <input type="text" class="form-control"  name="pass" id="pass" placeholder="New Password:" value="<?php echo $row['pass']; ?>">
</div><br>                  
                                 <div class="input-group" style="border: 2px solid; padding: 1px;">
                                    <div class="input-group-text bg-primary text-white">
                                    <i class="bi bi-clipboard-check-fill"></i> 
</div>
                            <input type="text" class="form-control"  name="schoolid" id="schoolid" placeholder="New Schoolid:" value="<?php echo $row['schoolid']; ?>">
</div><br>

                                 <div class="input-group" style="border: 2px solid; padding: 1px;">
                                    <div class="input-group-text bg-primary text-white">
                                    <i class="bi bi-buildings-fill"></i>   
</div>
                            <input type="text" class="form-control"  name="department" id="department" placeholder=" New Department :" value="<?php echo $row['department']; ?>">
</div><br>

                <div class="modal-footer">             
                          <input type="reset" class="btn btn-secondary btn-lg " value="Clear">
                          <input type="submit" name="user_update" class="btn btn-success btn-lg"value="Save Data">
            </div>
        </div>
    </div>
 </div>
                  </form>
                            </td>
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