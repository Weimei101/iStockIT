<?php

include "conn.php";
session_start();


//////////////////////////////////// REGISTER USER   //////////////////////////////////////////////////////
if (isset($_POST['user_reg'])) {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = mysqli_real_escape_string($conn, $_POST["email"]); 
    $password = $_POST["password"];
    $schoolid = $_POST["schoolid"];
    $department = $_POST["department"];

    // Validation
    $validate = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'"); 

    $val_num = mysqli_num_rows($validate);

    if ($val_num <= 0) {
       

        $insert = mysqli_query($conn, "INSERT INTO user VALUES('0', '$firstname', '$lastname', '$email', '$password', '$schoolid','$department')");

        if ($insert) {
            ?>
            <script>
                alert("Your Registration was Successful");
                window.location.href = "index.php";
            </script>
            <?php
        } else {
          ?>
            <script>
                alert("Error Registration \n Try Again");
                window.location.href = "index.php"; 
            </script>
          <?php
        }
    } else {
       ?>
        <script>
            alert("This email is already in use!");
            window.location.href = "index.php"; 
        </script>
<?php
    }
}

      ////////////////   UPDATE USER    ////////////////////////////////
      if(isset($_POST['user_update']))
      {
            $id = $_POST['account_update'];
            
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $pass=$_POST["pass"];
            $schoolid=$_POST["schoolid"];
            $department=$_POST["department"];
    
            $query = "UPDATE user SET fname='$fname',lname='$lname',email=' $email',pass='$pass',schoolid=' $schoolid',department='$department'
            WHERE id='$id'";
            $query_run = mysqli_query($conn, $query);
    
            if($query_run)
            {
              echo '<script>
               alert("successfully Updated");
               window.location.href="record_user.php"; </script>';
              
            }
            else{
              echo'<script> alert("Error Update Try Again"); </script>';
            }
      }

   
  
////////////////////////////  LOGIN USER  /////////////////////////////////////////////////
if(isset($_POST['login_user'])){
  $email=$_POST['login_email'];
  $pass=$_POST['login_pass'];

  $check=mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND pass='$pass'");

$num=mysqli_num_rows($check);

if($num >=1 ){
    
    $_SESSION['email']=$email;
    ?>
    <script>
      alert("Account Accepted Welcome User");
      window.location.href="faculty/user_dashboard.php";
    </script>
    <?php

}else{
  ?>
    <script>
      alert(" Account Not Found Try Again");
      window.location.href="index.php";
    </script>
    <?php

  
  }
}

  
////////////////////////////////////  REGISTER ADMIN //////////////////////////////////////////////////////
      if(isset($_POST['login'])){
          $name=$_POST["name"];
          $email=$_POST["email"];
          $password=$_POST["pass"];

    $insert=mysqli_query($conn, "INSERT INTO admins VALUES('0','$name','$email','$password')");
    if($insert==true){
        ?>
        <script>
          alert("Your Registration was Successful");
          window.location.href="index.php";
          </script>
                    <?php
            }else {
              ?>
              <script>
                alert("Error Registration \n Try Again");
                window.location.href="dashboard.php";
                </script>
                <?php
            }
          }
////////////////////////////  LOGIN ADMIN   /////////////////////////////////////////////////
    if(isset($_POST['login_button'])){
      $email=$_POST['login_email'];
      $pass=$_POST['login_pass'];

      $check=mysqli_query($conn, "SELECT * FROM admins WHERE email='$email' AND pass='$pass'");

    $num=mysqli_num_rows($check);

    if($num >=1 ){
        
        $_SESSION['email']=$email;
        ?>
        <script>
          alert("Account Accepted Welcome Admin");
          window.location.href="dashboard.php";
        </script>
        <?php

    }else{
      ?>
        <script>
          alert("Account Not Found Try Again");
          window.location.href="index.php";
        </script>
        <?php

      
    }

    }

  ///////////////////////////  ADD INVENTORY  ///////////////////
          if(isset($_POST['Add_inventory'])){
            $devicename=$_POST["devicename"];
            $serial=$_POST["serialnum"];
            $department=$_POST["department"];
            $history=$_POST["history"];
            $status=$_POST["status"];
                    
            $insert = mysqli_query($conn, "INSERT INTO inventory_records VALUES('0', '$devicename', '$serial', '$department', '$history', '$status')");
            if($insert==true){
            ?>
                <script>
                  alert("Successfuly Added");
                  window.location.href="tables.php";
                  </script>
                  <?php
          }else {
            ?>
            <script>
              alert("Error Registration \n Try Again");
              window.location.href="tables.php";
              </script>
              <?php
          }
        }

    ////////////////   UPDATE INVENTORY    ////////////////////////////////
    if(isset($_POST['update']))
    {
          $id = $_POST['update_id'];
          
          $devicename=$_POST["devicename"];
          $serial=$_POST["serialnum"];
          $department=$_POST["department"];
          $history=$_POST["history"];
          $status=$_POST["status"];
  
          $query = "UPDATE inventory_records SET devicename='$devicename',serialnum='$serial',department=' $department', history='$history',`status`='$status'
          WHERE inv_id='$id'";
          $query_run = mysqli_query($conn, $query);
  
          if($query_run)
          {
            echo '<script>
             alert("data is updated");
             window.location.href="tables.php"; </script>';
            
          }
          else{
            echo'<script> alert("data Not updated"); </script>';
          }
    }
  ////////////////   Accept Request Device   ////////////////////////////////
    if(isset($_POST['accept_request'])){
      if(isset($_GET['id'])){
        $id = $_GET['id'];

        $update_accept = mysqli_query($conn, "UPDATE `reservations` SET `reservation_status` = 2 WHERE `id` = '$id'");

        if($update_accept){
          ?>
          <script>
            alert("Borrowing Equipment Accepted ");
            window.location.href="pending_reservation.php";
            </script>
            <?php
        }else{
          ?>
          <script>
            alert("sdsds");
            window.location.href="pending_reservation.php";
            </script>
            <?php
        }
      }
    }
   ////////////////   Decline Request Device   ////////////////////////////////

   if(isset($_POST['decline_request'])){
    if(isset($_GET['id'])){
      $id = $_GET['id'];

      $update_decline = mysqli_query($conn, "UPDATE `reservations` SET `reservation_status` = 3 WHERE `id` = '$id'");

      if($update_decline){
        ?>
        <script>
          alert("Borrowing Equipment Declined ");
          window.location.href="pending_reservation.php";
          </script>
          <?php
      }else{
        ?>
        <script>
          alert("sdsds");
          window.location.href="pending_reservation.php";
          </script>
          <?php
      }
    }
  }
   
  ////////////////   Returned Device   ////////////////////////////////

  if(isset($_POST['return_equipment'])){
    if(isset($_GET['id'])){
      $id = $_GET['id'];

      $return_device = mysqli_query($conn, "UPDATE `reservations` SET `reservation_status` = 4 WHERE `id` = '$id'");

      if($return_device){
        ?>
        <script>
          alert("Faculty Returned the Equipment");
          window.location.href="approved_reservation.php";
          </script>
          <?php
      }else{
        ?>
        <script>
          alert("Error");
          window.location.href="approved_reservation.php";
          </script>
          <?php
      }
    }
  }


  if(isset($_POST['feed_button'])){
    $rating = $_POST['rating'];
    $message = $_POST['message'];
    $datetoday = $_POST['datetoday'];
  
    $insert_feed = mysqli_query($conn, "INSERT INTO feedback VALUES( '0', '$rating', '$message','$datetoday')");
  
    if($insert_feed = true){
      ?>
      <script>
        alert("We greatly appreciate your feedback, as it helps us continuously enhance our services to better meet your needs.Thank you for taking the time to share your thoughts with us! ");
        window.location.href="index.php";
        </script>
        <?php
    }else{
      ?>
      <script>
        alert("Error try again");
        window.location.href="index.php";
        </script>
        <?php
    }
  }

?>
 
 