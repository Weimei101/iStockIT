<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ITSD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/ui3.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">


      <div class="logo">
        <h1><a href="index.html"><span>iStock</span>IT</a></h1>
       
      </div>
       
      <nav id="navbar" class="navbar">
        <ul>
        <div class="clock-container text-white">
        <div id="dateTime" class="date-text"></div>
  </div>
          <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
          <li><a class="nav-link scrollto" href="#services">SERVICES</a></li>
          <li><a class="nav-link scrollto" href="#contact">CONTACT </a></li>
          <li><a href="#"  data-bs-toggle="modal" data-bs-target="#registermodal">REGISTER</a></li>                  
          <li class="dropdown"><a href="#"><span> ACCOUNT</span> <i class="bi bi-chevron-down"></i></a>
          
            <ul>
              <li><a href="dashboard.php" data-bs-toggle="modal" data-bs-target="#UserModal">Login User</a></li>
              <li><a href="dashboard.php" data-bs-toggle="modal" data-bs-target="#AdminModal">Login Admin</a></li>
              
            </ul>
          </li>
        
        </ul>
      
      </nav><!-- .navbar -->  

    </div>
  </header><!-- End Header -->

  <!-- ======= landing page first ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(img/ui4.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">iStockIT: The Inventory Equipment Checker for ITSD</h2>
                <p class="animate__animated animate__fadeInUp"> Information Technology Services Department</p>
                <a href="dashboard.php"  data-bs-toggle="modal" data-bs-target="#registermodal" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(img/ui.jpg)">
            <div class="carousel-container">
              <div class="container">              
                <h2 class="animate__animated animate__fadeInDown">iStockIT: The Inventory Equipment Checker for ITSD</h2>
                <p class="animate__animated animate__fadeInUp">Information Technology Services Department</p>
                <a href="dashboard.php"  data-bs-toggle="modal" data-bs-target="#registermodal" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>
           <!--muni nisa ang sa slid2-->         
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

     </div>
    </div>
  </section><!-- End of the landing page Section -->
        
    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-briefcase"></i>
                  </a>
                  <h4>Trouble</h4>
                  <p>
                  Provides assistance with identifying and resolving technical issues to ensure smooth operations.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-card-checklist"></i>
                  </a>
                  <h4>Troubleshooting</h4>
                  <p>
                  Expert support to diagnose and fix system errors effeciently.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-bar-chart"></i>
                  </a>
                  <h4>CompTIA Network</h4>
                  <p>
                  Certified professionals offering network installation, maintenance, and issue resolution for digital systems
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-binoculars"></i>
                  </a>
                  <h4>Equipment Reservation </h4>
                  <p>
                  Simplify equipment reservations with an easy request submission process, ensuring efficient handling of all requests.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Services Section -->

    
           <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: +1 5589 55488 55<br>
                    <span>Monday-Friday (9am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: info.ui@phinmaed.com<br>
                    <span>Web: ui.phinma.edu.ph</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Location: Rizal St, Iloilo City Proper,<br>                    
                    <span>Iloilo City, 5000 Iloilo</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.5509134681806!2d122.56701887369461!3d10.691923960749483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee5255345f11b%3A0xb32057bb6b1d39c8!2sPHINMA%20UNIVERSITY%20OF%20ILOILO!5e0!3m2!1sen!2sph!4v1705934460087!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>              <!-- End Map -->
            </div>
            <!-- End Google Map -->

       <!-- Start  contact -->
 <div class="col-md-6">
              <div class="form contact-form">
                <form action="process.php" method="POST" class="form-control">
                  <div class="form-group">
                  <div class="form-group mt-3">
      
                  <h5 class="text-center"><strong>How did you find our services?</strong></h5>

        <input type="hidden" class="form-control" name="datetoday" id="datetoday">
    
      <div class="form-check mb-2">
      <input class="form-check-input" type="radio" name="rating" id="rating" value="Very Satisfactory">
        <label class="form-check-label"> &nbsp;
         Very Satisfactory
        </label>
      </div>
      <div class="form-check mb-2">
        <input class="form-check-input" type="radio" name="rating" id="rating" value="Satisfactory">
        <label class="form-check-label"> &nbsp;
        Satisfactory
        </label>
      </div>
      <div class="form-check mb-2">
        <input class="form-check-input" type="radio" name="rating" id="rating" value="Medicore">
        <label class="form-check-label">  &nbsp;
        Medicore
        </label>
      </div>
      <div class="form-check mb-2">
        <input class="form-check-input" type="radio" name="rating" id="rating" value="Poor">
        <label class="form-check-label">  &nbsp;
         Poor
        </label>
      </div>
                        <div class="form-group mt-3">
                          <textarea class="form-control" name="message" rows="5" placeholder="Your message can help us to improve our sevices" required></textarea>
                        </div>                     
                        <div class="text-center">
                        <input type="submit" name="feed_button" value="Send Message" class="btn btn-primary">
                      </form>
                    </div>
                  </div>
                  <!-- End Left contact -->
                </div>
              </div>
            </div>
          </div><!-- End Contact Section -->
    



            <!-- Modal -->
         <!-- Modal nisa sa REGISTER --> 
      <div class="modal fade" id="registermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h4 class="modal-title text-white" id="exampleModalLabel">REGISTER NOW</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Modal USER REGISTER form -->
                <form action="process.php" method="POST">
                <div class="row">
                  <div class="col">
                        <div class="input-group"style="border: 1px solid;">                
                      <div class="input-group-text  bg-primary text-white">
                      <i class="bi bi-person-circle"></i>
                      
                      </div>
                      <input type="text" name="fname"class="form-control" placeholder="Your First Name:">
                  </div><br>
                      <div class="input-group" style="border: 1px solid;">
                      <div class="input-group-text bg-primary text-white">
                      <i class="bi bi-person-check-fill"></i>
                  </div>
                      <input type="text"name="lname" class="form-control" placeholder="Your Last Name:">
                  </div><br>

                  <div class="input-group" style="border: 1px solid;">
                      <div class="input-group-text bg-primary text-white">
                      <i class="bi bi-lock-fill"></i>              
                  </div>
                      <input type="password"name="password" class="form-control"id="myInput2" 
                 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required placeholder=" Password:">
                  </div>
                  <div class="float-end">
                    <input type="checkbox" onclick="myFunction2()"> Show Password 
                    </div>

                  
                </div>
                    <div class="col">
                    <div class="input-group" style="border: 1px solid;">
                      <div class="input-group-text bg-primary text-white">
                      <i class="bi bi-envelope-arrow-up-fill"></i>               
                  </div>
                      <input type="email" name="email" class="form-control" placeholder="Your Email">
                  </div><br>
                 
                  
                  <div class="input-group" style="border: 1px solid;">
                      <div class="input-group-text bg-primary text-white">
                      <i class="bi bi-clipboard-check-fill"></i>             
                  </div>
                      <input type="text" name="schoolid" class="form-control" placeholder="School ID:">
                  </div><br>
                  <div class="input-group"style="border: 1px solid;">                
                      <div class="input-group-text  bg-primary text-white">
                      <i class="bi bi-buildings-fill"></i>   
                      
                      </div>
                      <input type="text" name="department"class="form-control" placeholder="Department:">
                  </div><br>
                </div>
</div>
</div>
                  <div class="modal-footer">
                      <input type="reset" class="btn btn-secondary btn-lg " value="Clear">
                      <input type="submit" class="btn btn-success btn-lg" name="user_reg" value="Register">
                      
                    </div>
                  </div>
                </div>
              </div>
            
</form>


                  <!-- Modal nisa sa login as Admin --> 
                  <!-- Modal --> 
              <div class="modal fade" id="AdminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content">
                    <div class="modal-header bg-primary">
                      <h4 class="modal-title text-white" style="font-weight: bold;" id="exampleModalLabel">Login as Admin</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <!--Modal Login Admin form -->
                      <form action="process.php" method="POST">
                        <div class="input-group mb-3"  style="border: 1px solid; padding: 4px;">
                          <div class="input-group-text bg-primary text-white">
                            <i class="bi bi-envelope-arrow-up-fill"></i>
                          </div>
                          <input type="email" class="form-control" name="login_email" placeholder="Enter your Email!" required>
                        </div><br>
                                  
                        <div class="input-group" style="border: 1px solid; padding: 4px;">
                          <div class="input-group-text  bg-primary text-white">
                            <i class="bi bi-lock-fill"></i>
                          </div>
                          <input type="password" class="form-control" name="login_pass" placeholder="Enter your Password!" id="myInput3" required>
                        </div>
                        <div class="float-end">
                    <input type="checkbox" onclick="myFunction3()"> Show Password 
                    </div>
                        
                    </div>
                    <div class="modal-footer">
                      <input type="reset" class="btn btn-secondary btn-lg" value="CLEAR">
                      <input type="submit" class="btn btn-success btn-lg" name="login_button" value="LOGIN">
                    
                    </form>

      </div>
    </div>
  </div>
</div>
               
        <!-- Modal nisa sa login as USER --> 
            <!-- Modal --> 
              <div class="modal fade" id="UserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-primary">
                      <h4 class="modal-title text-white" style="font-weight: bold;" id="staticBackdropLabel">Login as User</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                      <!--Modal Login USER form -->
                      <form action="process.php" method="POST">   
                      <div class="input-group mb-3 " style="border: 1px solid; padding: 4px;">
                        <div class="input-group-text  bg-primary text-white">     
                        <i class="bi bi-envelope-arrow-up-fill"></i>           
                        </div>
                        <input type="email" class="form-control" name="login_email" placeholder="Enter your Email!">
                      </div><br>

                      <div class="input-group" style="border: 1px solid; padding: 4px; ">
                        <div class="input-group-text  bg-primary text-white">
                        <i class="bi bi-lock-fill"></i>
                        </div>
                        <input type="password" class="form-control"  name="login_pass"id="myInput4" placeholder="Enter your Password!">
                      </div>
                      <div class="float-end">
                    <input type="checkbox" onclick="myFunction4()"> Show Password 
                    </div>      
</div>
                    <div class="modal-footer">
                <input type="reset" class="btn btn-secondary btn-lg" value="CLEAR">
                <input type="submit" class="btn btn-success btn-lg" name="login_user" value="LOGIN">
                  </div>
                </div>
              </div>
              </form>
              
                  



              <script>
        function myFunction2() {
        var x = document.getElementById("myInput2");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      </script>

<script>
        function myFunction3() {
        var x = document.getElementById("myInput3");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      </script>

<script>
        function myFunction4() {
        var x = document.getElementById("myInput4");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      </script>


 <!---------------------- This is a Auto Date for Feedback Form ------------------------------------- -->
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
  
      <!---------------------- This is a Auto Date Navigator ------------------------------------- -->
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
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  

</body>

</html>