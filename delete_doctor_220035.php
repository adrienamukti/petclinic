<?php

    if(isset($_GET['id'])) { // check variable GET from URL
        include "connection_220035.php"; //call connection php mysql
    
        // sql query DELETE FROM WHERE
        $query = "DELETE FROM doctors_220035 WHERE doctor_id_220035 = '$_GET[id]';";

        // run query
        $delete = mysqli_query($db_connection, $query);
    
        if($delete) {  // check if query TRUE/success
            //echo "<p>Doctor delete successfully !</p>"; // success msg (html version)
            echo "<script> alert('Doctor delete successfuly !'); </script>"; // success msg (javascript version)
        } else {
            //echo "<p>Doctor delete failed !</p>"; // fail msg (html version)
            echo "<script> alert('Doctor delete failed !'); </script>";  // success fail (javascript version)
        }
    }   
?>
<!--<p><a href="read_pet_220035.php">BACK TO PETS LIST</a></p>-->
<script>window.location.replace("read_doctor_220035.php");</script>