<?php
include "user_conn.php";
session_start();

if(isset($_POST['submit_button'])){
    $datetoday=$_POST["datetoday"];
    $department=$_POST["department"];
    $reqparty=$_POST["reqparty"];
    $purpose=$_POST["purpose"];
    $equipment=$_POST["equipment"];
    $fromm=$_POST["fromm"];
    $too=$_POST["too"];
   

    $insertusers = "INSERT INTO reservations (`reservation_status`, `datetoday`, `department`, `reqparty`, `purpose`, `equipment`, `fromm`, `too`) 
    VALUES (1, '$datetoday', '$department', '$reqparty', '$purpose', '$equipment', '$fromm', '$too')";
    mysqli_query($conn, $insertusers);

    if(mysqli_affected_rows($conn) > 0){
        ?>
        <script>
          
            alert("Request Successful sent");
            window.location.href="user_dashboard.php";
        </script>
        <?php
    } else {
        ?>
        <script>
        
            alert("Error Registration \n Try Again");
            window.location.href="user_dashboard.php";
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

       $query = "UPDATE user SET fname='$fname', lname='$lname', email='$email', pass='$pass', schoolid='$schoolid', department='$department' WHERE id='$id'";
       $query_run = mysqli_query($conn, $query);
       
       if ($query_run) {
           echo '<script>alert("Successfully Updated"); window.location.href="user_dashboard.php"; </script>';
       } else {
           echo '<script>alert("Error Update Try Again");</script>';
       }
       
 }
?>