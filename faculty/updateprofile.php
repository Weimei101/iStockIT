<?php
include "user_conn.php";
session_start();

// Check if the user is logged in
if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Prepare and execute SQL query to fetch user data
    $get_name = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
    
    // Check if any rows are returned
    if(mysqli_num_rows($get_name) > 0) {
        // Fetch the first row
        $row = mysqli_fetch_assoc($get_name);
        
        // Extract user data
        $fname = $row['fname'];
        $lname = $row['lname'];
    }
}

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
                <div class="modal-dialog">
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
                        <input type="text" class="form-control" name="department" id="department" placeholder="Department">
                    </div>
                </div> 
                <div class="col">   
                    <div class="form-group">
                        <input type="hidden" name="reqparty" id="reqparty" value="<?php echo $fname.' '.$lname; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Purpose</label>
                        <input type="text" class="form-control" name="purpose" id="purpose" placeholder="Purpose">
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
                 <p>1. the borrower is resposible for the safety of the equipment borrowed unit it's return. </p>
                 <p>2. Repairs will be the responsibility of the borrower for any damanges in the equipment borrowed. </p>
                 <p>3. Lost equipment must be replace by the requesting party with the same or its equivalent.</p><br><br>
                 <center> <input type="checkbox" id="agreeTerms" name="agreeTerms" required>
          <label for="agreeTerms">I agree with terms and Conditions</label></center>
        </div>

        <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit"  class="btn btn-primary" name="submit_button" value="Confirm">
                    </div>
                    </div>
                </div>
                </div>
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
                                <a href="#" class="dropdown-item">Settings</a>

                                <a href="#" class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h2> Update Details</h2>
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
                    <div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-12">
                            <h3 class="mb-2 text-primary">Personal Details</h3>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <form action="user_process.php" method="POST">
                                <input type="hidden" name="account_update" value="<?php echo $row['id']; ?>">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name" value="<?php echo $row['fname']; ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name" value="<?php echo $row['lname']; ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email"  value="<?php echo $row['email']; ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-4">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Website url"  value="<?php echo $row['pass']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                    <h3 class="mb-2 text-primary">School Information</h3>
                        <div class="col-6">
                        
                            <div class="form-group">
                                <label>School Id</label>
                                <input type="name" class="form-control" name="schoolid" id="schoolid" placeholder="Enter Street"  value="<?php echo $row['schoolid']; ?>">
                            </div>
                        </div>
                        <div class="col-6 mb-2">
                            <div class="form-group">
                                <label>Department</label>
                                <input type="name" class="form-control" name="department"  id="department" placeholder="Enter City"  value="<?php echo $row['department']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-12">
                            <div class="text-left mt-3">
                                <input type="submit" id="user_update" name="user_update" value="Submit" class="btn btn-primary" 
                                    style="width: 100%; height: 40px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <strong>iStockIT</strong>
                                </a>
                            </p>
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