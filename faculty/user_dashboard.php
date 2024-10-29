<?php

include "user_conn.php";
session_start();

$email = $_SESSION['email'];

$get_name = mysqli_query($conn, "SELECT * FROM user
WHERE email='$email'");
while($row = mysqli_fetch_object($get_name)){

    $fname = $row -> fname;
    $lname = $row -> lname;

}  
/*Count Request history*/   
$name = $fname.' '.$lname;
$count = mysqli_query($conn, "SELECT * FROM reservations WHERE  `reqparty` ='$name'" );
$count_display = mysqli_num_rows($count);
/*Count Request Pending*/ 
$count = mysqli_query($conn, "SELECT * FROM reservations WHERE `reservation_status` = '1' AND `reqparty` = '$name'");
$count_pending = mysqli_num_rows($count);
/*Count Request Approved*/ 
$count = mysqli_query($conn, "SELECT * FROM reservations WHERE `reservation_status` = '2' AND `reqparty` = '$name'");
$count_approved = mysqli_num_rows($count);
/*Count Request Declined*/ 
$count = mysqli_query($conn, "SELECT * FROM reservations WHERE `reservation_status` = '3' AND `reqparty` = '$name'");
$count_declined = mysqli_num_rows($count);

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../faculty/icon.png">
    

    
    
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="user_dashboard.php">Reservation System</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                         Option
                    </li>
                    <li class="sidebar-item">
                        <a href="user_dashboard.php" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="modal" data-bs-target="#reservModal"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Request 
                        </a>
<!--##############################     RESERVATION REQUEST MODAL    ################################# -->
 <!--################################################################################################################################################### -->
            <div class="modal fade" id="reservModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Request for use of Equipment</h5> 
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form action="user_process.php" method="POST">
                      <div class="row">
                      <div class="col">                    
                    <div class="form-group">
                        <label for="formGroupExampleInput">Date Today:</label>
                        <input type="date" class="form-control" name="datetoday" id="datetoday" placeholder="Date Today">
                    </div>
                    <div class="form-group">

                        <label for="formGroupExampleInput2">Department</label>
                        <select name="department" id="department" required class="form-control">
                            <option disabled selected value="">Department</option>
                            <option value="Basic Education">Basic Education</option>
                            <option value="Graduate School">Graduate School</option>
                            <option value="Finance">Finance</option>
                            <option value="Marketing">Marketing</option>
                            <option value="General Service Department">General Service Department</option>
                            <option value="Library">Library</option>
                            <option value="ITSD">ITSD</option>
                            <option value="College of Accountancy (CAS)">College of Accountancy (CAS)</option>
                            <option value="Criminology and Criminal Justice Education (CCJE)">Criminology and Criminal Justice Education (CCJE)</option>
                            <option value="College of Allied Health Sciences (CAHS)">College of Allied Health Sciences (CAHS)</option>
                            <option value="College of Information Technology Education (CITE)">College of Information Technology Education (CITE)</option>
                            <option value="College of Maritime Education (COME)">College of Maritime Education (COME)</option>
                            <option value="College of Engineering (COE)">College of Engineering (COE)</option>
                            <option value="College of Education (CoEd)">College of Education (CoEd)</option>
                            <option value="College of Management (COM)">College of Management (COM)</option>

            </select>
                    </div>
                </div> 
                <div class="col">   
                    <div class="form-group">
                        <input type="hidden" name="reqparty" id="reqparty" value="<?php echo $fname.' '.$lname; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Purpose</label>
                        <select name="purpose" id="purpose" required class="form-control">
                            <option disabled selected value="">Purpose</option>
                            <option value="Event">Event</option>
                            <option value="Lecture">Lecture</option>
                            <option value="Student Defense">Student Defense</option>
                            <option value="Interactive Lessons">Interactive Lessons</option>
                            <option value="Capstone">Capstone</option>
                            <option value="Others">Others</option>

            </select>
                        </div>
                    </div>
                </div> 
                <br>
                <p>Facilities/Equipment Requested</p>
               
                <div>
            <div class="row">
              <div class="col"> 
            <input type="radio" id="equipment" name="equipment" value="Desktop PC">
              <label>Desktop PC</label><br>
            
            <input type="radio" id="equipment" name="equipment" value="Multi-Media Projector">
               <label>Multi-Media Projector</label><br>
        </div>
           <div class="col">
            <input type="radio" id="equipment" name="equipment" value="Laptop">
              <label>Laptop</label><br>
            
            <input type="radio" id="equipment" name="equipment" value="Projector Screen">
               <label>Projector Screen</label><br><br>
        </div>
    </div>                                  
            <p>Proposed Date of Use</p> 
                <div class="row">
                 <div class="col">                     
                 <label>From</label><br>
                <input type="date" class="form-control" id="fromm" name="fromm">
                
                       
</div>
                <div class="col">
                <label>To:</label><br>
                <input type="date"  class="form-control" id="too" name="too">
            </div>
       </div>
              
        <br></br>

                <center>
                    <h5>Equipment Borrowing's Agreement</h5>
  </center>
 <br>
                 <p>1. The borrower is responsible for the safety of the equipment borrowed until its return. </p>
                 <p>2. Repairs will be the responsibility of the borrower for any damages in the equipment borrowed. </p>
                 <p>3. Lost equipment must be replace by the requesting party with the same or its equivalent.</p><br><br>
                  <!-- Terms and Conditions -->
                  <div class="form-group mt-3 text-center">
                                  <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="termsCheck" required>
                                      <label class="custom-control-label" for="termsCheck">
                                          I agree to the <a href="#" data-toggle="collapse" data-target="#termsConditions" aria-expanded="false" aria-controls="termsConditions">Terms and Conditions</a>
                                      </label>
                                  </div>
        </div>

        <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit"  class="btn btn-primary" name="submit_button" value="Confirm">
                    </div>
                    </div>
                </div>
                </div>
</form>
<!--################################################################################################################################################### -->           
                          

                       
                                         
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0 d-flex align-items-center pe-0">
                                <img src="icon.png" class="avatar img-fluid rounded" alt="">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $lname;?></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="updateprofile.php" class="dropdown-item">Settings</a>

                                <a href="#" class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4> Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, <?php echo $fname;?></h4>
                                                <p class="mb-0">ITSD Dashboard, Faculty</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body py-4 flex-fill">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                <div class="clock-container ">
                                                    <div id="dateTime" class="date-text">
                                                    </div>
                                                </div>                                                                                                                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                     <!-- This code is in the top of the dashboard -->
    <!-- This code is in the top of the dashboard -->
    <div class="row">

        <!-- Pending Request -->
        <div class="col-md-4 mb-4">
            <a href="#" class="card-link">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pending Request
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    echo $count_pending
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-spinner fa-2x text-gray-300"></i>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Approved Request -->
        <div class="col-md-4 mb-4">
            <a href="#" class="card-link">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Approved Request
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                   <?php
                                   echo $count_approved
                                   ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-up-right-from-square fa-2x text-gray-300"></i>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Decline Reservation Request -->
        <div class="col-md-4 mb-4">
            <a href="#" class="card-link">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Decline Request 
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    echo $count_declined
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-ban fa-2x text-gray-300"></i>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    
        <!-- Total Device Borrowing -->
        <div class="col-12 mb-4">
            <a href="#" class="card-link">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Device Borrowing History
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            <?php
                                            echo $count_display;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    
    </div>
        <br>
                    
                    <!-- Table Element -->
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                             Records
                            </h5>
                            <h6 class="card-subtitle text-muted">
                            Request Equipment Table
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Request ID</th>
                                        <th scope="col"> Date Requested</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Request Equipment</th>
                                        <th scope="col">Date From</th>                  
                                        <th scope="col">Date To </th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Requested By</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $name = $fname.' '.$lname;

                                        $select = mysqli_query($conn, "SELECT * FROM `reservations` INNER JOIN reservation_status ON reservations.reservation_status=reservation_status.id_status WHERE `reqparty` = '$name'
                                         ORDER BY id DESC");

                                        if(mysqli_num_rows($select) > 0){
                                            while($row = mysqli_fetch_assoc($select)){

                                                {

                                                    $backgroundcolor="";
                                                    if($row['label'] == "Approved"){
                                                      $backgroundcolor = "primary";
                                                    }
                                                    elseif
                                                      ($row['label'] == "Pending"){
                                                        $backgroundcolor = "warning";
                                                    }
                                                    elseif
                                                      ($row['label'] == "Declined"){
                                                        $backgroundcolor = "danger";
                                                    }
                                                    elseif
                                                      ($row['label'] == "Returned"){
                                                        $backgroundcolor = "success";
                                                      }
                                                }
                                                    
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['datetoday']; ?></td>
                                                        <td><?php echo $row['department']; ?></td>
                                                        <td><?php echo $row['equipment']; ?></td>
                                                        <td><?php echo $row['fromm']; ?></td>
                                                        <td><?php echo $row['too']; ?></td>
                                                        <td><?php echo "<button class='btn btn-$backgroundcolor '>".$row['label']."</button>"; ?></td>
                                                        <td><?php echo $row['reqparty']; ?></td>

                                                       
                                                    </tr>
                                                <?php
                                            }
                                        }else{
                                            echo"no data";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>CodzSwod</strong>
                                </a>
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Terms</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Booking</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Select "Logout" below if you are ready to end your current session.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" type="button" data-bs-dismiss="modal">Back</button>
        <a class="btn btn-primary" href="../index.php">Logout</a>

       
      </div>
    </div>
  </div>
</div>
    <!---------------------- This is a Auto Date for Request Form ------------------------------------- -->
<script>
    // Function to get the current date in the format YYYY-MM-DD
    function getCurrentDate() {
        var today = new Date();
        var month = (today.getMonth() + 1).toString().padStart(2, '0');
        var day = today.getDate().toString().padStart(2, '0');
        var year = today.getFullYear();

        return year + '-' + month + '-' + day;
    }

    // Set the value of the "Date Today" input field to the current date
    document.addEventListener('DOMContentLoaded', function () {
        var dateTodayInput = document.getElementById('datetoday');
        if (dateTodayInput) {
            dateTodayInput.value = getCurrentDate();
        }
    });
</script>
  

<!------------------------------- This is a Auto Date in the Dashboard --------------------------------------------->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>