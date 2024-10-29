<?php
   include "conn.php";
   session_start();

   $count = mysqli_query($conn, "SELECT * FROM inventory_records");
   $count_display = mysqli_num_rows($count);
  
    /////////////////////////////////////* Count Monitor*//////////////////////////////////
    $countmonitor_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'MONITOR'");
    $num_monitor = mysqli_num_rows($countmonitor_query);
    /* Count Monitor Available*/
    $countmonitorAvailable_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'MONITOR' AND status ='AVAILABLE'");
    $num_monitoravailable = mysqli_num_rows($countmonitorAvailable_query);
    /* Count Monitor USED*/
    $countmonitorUsed_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'MONITOR' AND status ='USED'");
    $num_monitorUsed = mysqli_num_rows($countmonitorUsed_query);
      /* Count Monitor DAMAGE*/
    $countmonitorDamage_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'MONITOR' AND status ='DAMAGE'");
    $num_monitorDamage = mysqli_num_rows($countmonitorDamage_query);
     /* Count Monitor DISPOSAL*/
     $countmonitorDisposal_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'MONITOR' AND status ='DISPOSAL'");
     $num_monitorDisposal = mysqli_num_rows($countmonitorDisposal_query);
     



    ///////////////////////////////////* Count SYSTEM UNIT*////////////////////////////
    $countsystemunit_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'SYSTEM UNIT'");
    $num_systemunit = mysqli_num_rows($countsystemunit_query);
    /* Count SYSTEM UNIY Available*/
    $countSystemAvailable_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'SYSTEM UNIT' AND status ='AVAILABLE'");
    $num_systemavailable = mysqli_num_rows($countSystemAvailable_query);
    /* Count SYSTEM UNIY USED*/
    $countSystemUsed_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'SYSTEM UNIT' AND status ='USED'");
    $num_systemUsed = mysqli_num_rows($countSystemUsed_query);
    /* Count SYSTEM UNIY DAMAGE*/
    $countSystemDamage_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'SYSTEM UNIT' AND status ='DAMAGE'");
    $num_systemDamage = mysqli_num_rows($countSystemDamage_query);
    /* Count SYSTEM UNIY DISPOSAL*/
    $countSystemDisposal_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'SYSTEM UNIT' AND status ='DISPOSAL'");
    $num_systemDisposal = mysqli_num_rows($countSystemDisposal_query);
    


     ///////////////////////////////////* Count PRINTER*////////////////////////////
    $count_printer_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'PRINTER'");
    $num_printer = mysqli_num_rows($count_printer_query);
     /* Count PRINTER Available*/
     $countPrinterAvailable_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'PRINTER' AND status ='AVAILABLE'");
     $num_printeravailable = mysqli_num_rows($countPrinterAvailable_query);
      /* Count PRINTER USED*/
      $countPrinterUsed_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'PRINTER' AND status ='USED'");
      $num_printerused = mysqli_num_rows($countPrinterUsed_query);
       /* Count PRINTER DAMAGE*/
       $countPrinterDamage_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'PRINTER' AND status ='DAMAGE'");
       $num_printerDamage = mysqli_num_rows($countPrinterDamage_query);
       /* Count PRINTER Disposal*/
       $countPrinterDisposal_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'PRINTER' AND status ='DISPOSAL'");
       $num_printerDisposal = mysqli_num_rows($countPrinterDisposal_query);
      


     ///////////////////////////////////* Count NUC*///////////////////////////
    $count_nuc_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'NUC'");
    $num_nuc = mysqli_num_rows($count_nuc_query);
    /* Count NUC Available*/
    $countNucAvailable_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'NUC' AND status ='AVAILABLE'");
    $num_nucavailable = mysqli_num_rows($countNucAvailable_query);
     /* Count NUC USED*/
     $countnucUsed_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'NUC' AND status ='USED'");
     $num_Used = mysqli_num_rows($countnucUsed_query);
      /* Count NUC DAMAGE*/
      $countnucDamage_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'NUC' AND status ='DAMAGE'");
      $num_nucDamage = mysqli_num_rows($countnucDamage_query);
      /* Count NUC DISPOSAL*/
      $countnucDisposal_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'NUC' AND status ='DISPOSAL'");
      $num_nucDisposal = mysqli_num_rows($countnucDisposal_query);


     ///////////////////////////////////* Count MULTI-MEDIA PROJECTOR*////////////////////////////
    $count_projector_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'MUlTI-MEDIA PROJECTOR'");
    $num_projector = mysqli_num_rows($count_projector_query);
    /* Count PROJECTOR Available*/
    $countProjectorAvailable_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'MUlTI-MEDIA PROJECTOR' AND status ='AVAILABLE'");
    $num_projectoravailable = mysqli_num_rows($countProjectorAvailable_query);
     /* Count PROJECTOR Available*/
     $countProjectorUsed_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'MUlTI-MEDIA PROJECTOR' AND status ='USED'");
     $num_projectorUsed = mysqli_num_rows($countProjectorUsed_query);
      /* Count PROJECTOR DAMAGE*/
      $countProjectordamage_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'MUlTI-MEDIA PROJECTOR' AND status ='DAMAGE'");
      $num_projectordamage = mysqli_num_rows($countProjectordamage_query);
      /* Count PROJECTOR DAMAGE*/
      $countProjectordisposal_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'MUlTI-MEDIA PROJECTOR' AND status ='DISPOSAL'");
      $num_projectordisposal = mysqli_num_rows($countProjectordisposal_query);
 


      ///////////////////////////////////* Count Switch*////////////////////////////
    $count_switch_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'SWITCH'");
    $num_switch = mysqli_num_rows($count_switch_query);
    /* Count Switch Available*/
    $countSwitchAvailable_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'SWITCH' AND status ='AVAILABLE'");
    $num_Switchavailable = mysqli_num_rows($countSwitchAvailable_query);
     /* Count swich Available*/
     $countSwitchUsed_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'SWITCH' AND status ='USED'");
     $num_Switchused = mysqli_num_rows($countSwitchUsed_query);
      /* Count switch DAMAGE*/
      $countSwitchdamage_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'SWITCH' AND status ='DAMAGE'");
      $num_Switchdamage = mysqli_num_rows($countSwitchdamage_query);
      /* Count switch DAMAGE*/
      $countSwitchdisposal_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'SWITCH' AND status ='DISPOSAL'");
      $num_Switchdisposal = mysqli_num_rows($countSwitchdisposal_query);


      ///////////////////////////////////* Count LAPTOP*////////////////////////////
    $count_laptop_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'LAPTOP'");
    $num_laptop = mysqli_num_rows($count_laptop_query);
    /* Count laptop Available*/
    $countLaptopAvailable_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'LAPTOP' AND status ='AVAILABLE'");
    $num_LaptopAvailable = mysqli_num_rows($countLaptopAvailable_query);
     /* Count laptop Available*/
     $countLaptopUsed_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'LAPTOP' AND status ='USED'");
     $num_LaptopUsed = mysqli_num_rows($countLaptopUsed_query);
      /* Count laptop DAMAGE*/
      $countLaptopDamage_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'LAPTOP' AND status ='DAMAGE'");
      $num_LaptopDamage = mysqli_num_rows($countLaptopDamage_query);
      /* Count laptop DAMAGE*/
      $countLaptopDisposal_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'LAPTOP' AND status ='DISPOSAL'");
      $num_LaptopDisposal = mysqli_num_rows($countLaptopDisposal_query);


       ///////////////////////////////////* Count Projector Screen*////////////////////////////
    $count_projectorscreen_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'PROJECTOR SCREEN'");
    $num_projectorscreen = mysqli_num_rows($count_projectorscreen_query);
    /* Count Projector Screen Available*/
    $count_projectorscreenAvailable_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'PROJECTOR SCREEN' AND status ='AVAILABLE'");
    $num_projectorscreenAvailable = mysqli_num_rows($count_projectorscreenAvailable_query);
     /* Count Projector Screen Available*/
     $count_projectorscreenUsed_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'PROJECTOR SCREEN' AND status ='USED'");
     $num_projectorscreenUsed = mysqli_num_rows($count_projectorscreenUsed_query);
      /* Count Projector Screen DAMAGE*/
      $count_projectorscreenDamage_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'PROJECTOR SCREEN' AND status ='DAMAGE'");
      $num_projectorscreenDamage = mysqli_num_rows($count_projectorscreenDamage_query);
      /* Count Projector Screen DAMAGE*/
      $count_projectorscreenDisposal_query = mysqli_query($conn,  "SELECT * FROM `inventory_records` WHERE devicename = 'PROJECTOR SCREEN' AND status ='DISPOSAL'");
      $num_projectorscreenDisposal = mysqli_num_rows($count_projectorscreenDisposal_query);


  
  
    $email = $_SESSION['email'];

    $get_name = mysqli_query($conn, "SELECT * FROM admins
    WHERE email='$email'");
    while($row = mysqli_fetch_object($get_name)){
    
        $name = $row -> name;
        
       
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
   

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
        
    

            <title>ITSD - Inventory</title>   
        
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        
                    
                    </div>
                    <div class="sidebar-brand-text mx-3">ITSD <sup>Dashboard</sup></div>
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
                    Components
                </div>
                <!-- IYA NI SA KA UTILITIES DASHBOARD-->
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
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
                    Other
                </div>
                
                <!-- Nav - Tables -->
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
                <li class="nav-item">
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

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                      
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

                        
                                <!--KILID KA -Profile sang tawo alert centers->
                                !--Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Centers
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                    
                                                                                                                                                                                                                                                                                                                            
                                <!-- Dropdown top ang nav header-->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header"></h6>
                                                                    
                                    
                                        
                                
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src=""
                                                alt="...">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>                               
                                    </div>
                                    </a>
                                   
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src=""
                                                alt="...">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate"> wala pa ni na tapus
                                            </div>
                                            <div class="small text-gray-500"></div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/"
                                                alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">wla pa ni tapus</div>
                                            <div class="small text-gray-500"></div>
                                            
                                        </div>
                                    </a>
                                
                                </div>
                            
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- admin information nisa sa kilid2  -->
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
                                        Profile
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
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <div class="clock-container text-dark">
    <div id="dateTime" class="date-text"></div>
       
  </div>
  
    </div>
        

    
   

                   

    <main class="bg-secondary bg-opacity-25 min-vh-50">

<div class="container-fluid p-3 p-md-4">

  <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
    <div class="fs-3 text-white fw-bolder">Welcome Admin</div>
    <div class="text-secondary lead fw-normal" id="curr_date_time"></div>
  </div>
  <hr>
  <div class="row g-4">

    <div class="col-lg-3 col-md-6">
      <a href="tables.php" class="text-decoration-none">
      <div class="card bg-gradient shadow-sm custom-card" style="background-color: #4B4285">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="bi bi-nut fa-2x text-white-50"></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white">
                   <?php
                         $count = mysqli_query($conn, "SELECT * FROM inventory_records");
                        $count_display = mysqli_num_rows($count);
                        echo $count_display;
                    ?>
                </h2>
              <h4 class="text-white-50">Inventory</h4>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6">
      <a href="reservation.php" class="text-decoration-none">
        <div class="card bg-primary bg-success shadow-sm custom-card">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="fas fa-list fa-2x text-white-50"></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white"> 
                <?php
                    $count = mysqli_query($conn, "SELECT * FROM reservations");
                    $count_display = mysqli_num_rows($count);
                    echo $count_display;
                ?>
                    </h2>
              <h4 class="text-white-50">Reservation</h4>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6">
      <a href="record_user.php" class="text-decoration-none">
        <div class="card bg-danger bg-gradient shadow-sm custom-card">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="fas fa-users fa-2x text-white-50"></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white"> 
                <?php
                        $count = mysqli_query($conn, "SELECT * FROM user");
                        $count_display = mysqli_num_rows($count);
                        echo $count_display;
                ?>
         </h2>
              <h4 class="text-white-50">Faculty</h4>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6">
      <a href="feedback.php" class="text-decoration-none">
      <div class="card bg-gradient shadow-sm custom-card" style="background-color: #1F618D">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="fas fa-users fa-2x text-white-50"></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white"> 
                <?php
                        $count = mysqli_query($conn, "SELECT * FROM feedback");
                        $count_display = mysqli_num_rows($count);
                        echo $count_display;
                ?>
         </h2>
              <h4 class="text-white-50">Feedback</h4>
            </div>
          </div>
        </div>
      </a>
    </div>

</main>
          <br>
       <br>
    
  
    <!-- End of Three Card Examples in a Single Row -->

    </div>
    <!-- End of Page Content -->
                        <!-- Content Row -->
                        <!--1st Content Row -->
                        <div class="row">

                        <!--2nd Content Row -->
                        <div class="row">
                                
                                <!-- Color System -->
                                <div class="row ml-2">
                                    <div class="col-lg-6 mb-4">
                                        <div class="card bg-primary text-white shadow">
                                            <div class="card-body fs-4">
                                                Monitor &nbsp; &nbsp;  <?php echo $num_monitor; 
                                            ?> 
                                
                                                <div class="text-white-100 small">
                                                <h6>Available:  &nbsp; 
                                                    <?php echo  $num_monitoravailable  
                                                ?>
                                               &nbsp; &nbsp;&nbsp; Used: &nbsp; <?php echo $num_monitorUsed
                                               ?>
                                               &nbsp; &nbsp;&nbsp; Damage &nbsp; <?php echo  $num_monitorDamage
                                               ?>
                                               &nbsp; &nbsp;&nbsp; Disposal &nbsp; <?php echo  $num_monitorDisposal
                                               ?>   
                                                </h6>
                                            
                                                

                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="card bg-success text-white shadow">
                                            <div class="card-body fs-4">
                                                System Unit &nbsp; &nbsp; <?php echo $num_systemunit;
                                            ?>
                                                <div class="text-white-100 small">
                                                <h6>Available: &nbsp; 
                                                    <?php echo $num_systemavailable
                                            ?>
                                            &nbsp; &nbsp;&nbsp; Used: &nbsp; <?php echo $num_systemUsed
                                            ?>
                                            &nbsp; &nbsp;&nbsp; Damage: &nbsp; <?php echo $num_systemDamage
                                            ?>
                                            &nbsp; &nbsp;&nbsp; Disposal &nbsp; <?php echo $num_systemDisposal
                                            ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                          <div class="col-lg-6 mb-4">
                                        <div class="card bg-info text-white shadow">
                                            <div class="card-body fs-4">
                                                 Multi-Media Projector  &nbsp;  <?php  echo $num_projector;
                                             ?>
                                                <div class="text-white-100 small">
                                                <h6>Available: &nbsp;
                                                    <?php echo $num_projectoravailable
                                                ?>
                                                &nbsp; &nbsp; &nbsp; Used: &nbsp; <?php echo $num_projectorUsed
                                                ?>
                                                &nbsp; &nbsp;  Damage: &nbsp; <?php echo $num_projectordamage
                                                ?>
                                                 &nbsp; &nbsp; Disposal: &nbsp; <?php echo $num_projectordisposal
                                                ?>
                                                
                                           
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="card bg-warning text-white shadow">
                                            <div class="card-body fs-4">
                                                Printer  &nbsp; &nbsp;   <?php echo $num_printer; ?>
                                                <div class="text-white-100 small">
                                                <h6>Available: &nbsp;
                                                    <?php echo $num_printeravailable
                                                ?>
                                                &nbsp; &nbsp; &nbsp; Used: &nbsp; <?php echo $num_printerused
                                                ?>
                                                &nbsp; &nbsp; &nbsp; Damage: &nbsp; <?php echo $num_printerDamage
                                                ?>
                                                &nbsp; &nbsp; Disposal: &nbsp; <?php echo $num_printerDisposal
                                                ?>
                                          
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               
                                    <div class="col-lg-6 mb-4">
                                        <div class="card bg-secondary text-white shadow">
                                            <div class="card-body fs-4">
                                                NUC   &nbsp; &nbsp; <?php echo $num_nuc; ?>
                                                <div class="text-white-100 small">
                                                <h6>Available: &nbsp;
                                                    <?php echo $num_nucavailable
                                                ?>
                                                &nbsp; &nbsp; &nbsp; Used: &nbsp; <?php echo $num_Used
                                                ?>
                                                &nbsp; &nbsp; &nbsp; Damage: &nbsp; <?php echo $num_nucDamage
                                                ?>
                                                 &nbsp; &nbsp; &nbsp; Disposal: &nbsp; <?php echo $num_nucDisposal
                                                ?>
                                                </div>
                                            </div>
                                           
                                        </div>
                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body fs-4">
                                                Switch &nbsp; &nbsp; <?php echo $num_switch; ?>

                                                <div class="text-white-100 small">
                                                <h6>Available: &nbsp;
                                                    <?php echo $num_Switchavailable
                                                ?>
                                                 &nbsp; &nbsp; &nbsp; Used: &nbsp; <?php echo $num_Switchused
                                                 ?>
                                                 &nbsp; &nbsp; &nbsp; Damage: &nbsp; <?php echo $num_Switchdamage
                                                ?>
                                                 &nbsp; &nbsp; &nbsp; Disposal: &nbsp; <?php echo $num_Switchdisposal
                                                ?>
                                           
                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="col-lg-6 mb-4">
                                        <div class="card text-white shadow" style="background-color: #a2c61e">
                                            <div class="card-body fs-4">
                                                Laptop   &nbsp; &nbsp; <?php echo $num_laptop; ?>
                                                <div class="text-white-100 small">
                                                <h6>Available: &nbsp;
                                                    <?php echo $num_LaptopAvailable
                                                ?>
                                                &nbsp; &nbsp; &nbsp; Used: &nbsp; <?php echo $num_LaptopUsed
                                                ?>
                                                &nbsp; &nbsp; &nbsp; Damage: &nbsp; <?php echo $num_LaptopDamage
                                                ?>
                                                 &nbsp; &nbsp; &nbsp; Disposal: &nbsp; <?php echo $num_LaptopDisposal
                                                ?>
                                                </div>
                                            </div>
                                           
                                        </div>
                                     </div>

                                     
                                    <div class="col-lg-6 mb-4">
                                        <div class="card text-white shadow" style="background-color: #772c87">
                                            <div class="card-body fs-4">
                                                Projector Screen   &nbsp; &nbsp; <?php echo $num_projectorscreen; ?>
                                                <div class="text-white-100 small">
                                                <h6>Available: &nbsp;
                                                    <?php echo $num_projectorscreenAvailable
                                                ?>
                                                &nbsp; &nbsp; &nbsp; Used: &nbsp; <?php echo $num_projectorscreenUsed
                                                ?>
                                                &nbsp; &nbsp; &nbsp; Damage: &nbsp; <?php echo $num_projectorscreenDamage
                                                ?>
                                                 &nbsp; &nbsp; &nbsp; Disposal: &nbsp; <?php echo $num_projectorscreenDisposal
                                                ?>
                                                 <h4></h4>
                                                </div>
                                            </div>
                                           
                                        </div>
                                     </div>
                                    
                                      <br>
                                
                                        </div>
                                    </div>
                                </div>

                            </div>

                           
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

               
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    

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


        <!-- Modal Add admin Account -->
    <div class="modal fade" id="CreateAdminmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-danger">
            <h4 class="modal-title text-white" id="exampleModalLabel">Add Admin Account</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!--Modal Admin form  ADD ADMIN ACCOUNT-->
                    <form action="process.php" method="POST">
                        <div class="input-group"style="border: 2px solid; padding: 4px;">                
                        <div class="input-group-text  bg-danger text-white">
                        <i class="bi bi-person-circle"></i>
                </div>
                        <input type="text" name="name" class="form-control" placeholder="Enter your Name here!">
                </div><br>
                        <div class="input-group" style="border: 2px solid; padding: 4px;">
                        <div class="input-group-text bg-danger text-white">
                        <i class="bi bi-envelope-arrow-up-fill"></i>
                </div>
                        <input type="email" name="email" class="form-control"  placeholder="Enter your Email here!"Required>
                </div><br>
                        <div class="input-group" style="border: 2px solid; padding: 4px;">
                        <div class="input-group-text bg-danger text-white">
                        <i class="bi bi-lock-fill"></i>             
                </div>
                        <input type="password" name="pass" class="form-control"  placeholder="Enter your Password here!">
                </div><br>
                    <div class="modal-footer">
                            <input type="reset" class="btn btn-secondary btn-lg" value="Clear">
                            <input type="submit" class="btn btn-success btn-lg" name="login" value="Register">
                    
    </form>
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
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

    </body>

    </html>