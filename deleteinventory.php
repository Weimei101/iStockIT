<?php

   include "conn.php";
     
   if(isset($_POST['delete'])){    
    $ref_id = $_POST['inv_id'];

    $delete = mysqli_query($conn, "DELETE FROM inventory_records WHERE inv_id='$ref_id'");

    ?>
    <script>
        alert("Data Has Been Deleted Successfully!");
        window.location.href="tables.php";
    </script>
    <?php


    }else{
    ?>
        <script>
            alert("Error!! Please Try Again");
            window.location.href="tables.php";
        </script>
        <?php
    
    }

    
              
?>