<?php

   include "conn.php";
   
   if(isset($_POST['delete_user'])){
   $ref_id = $_POST['id'];

      $delete = mysqli_query($conn, "DELETE FROM user WHERE id='$ref_id'");
  
    
        ?>
        <script>
          alert("Account has been Deleted");
          window.location.href="record_user.php";
          </script>
          <?php
      }else {
        ?>
        <script>
          alert("Error Deleting your Data \n Try Again");
          window.location.href"record_user.php";
          </script>
          <?php
     
      }
    
      
    
      
    
    
    ?>