<?php

    if(isset($_POST['save'])) { // check variable POST from FORM 
        include "connection_220035.php"; //call connection php mysql
    
        // sql query UPDATE SET WHERE
        $query = "UPDATE pets_220035 SET 
                  pet_name_220035 = '$_POST[pet_name_220035]',
                  pet_type_220035 = '$_POST[pet_type_220035]',
                  pet_gender_220035 = '$_POST[pet_gender_220035]',
                  pet_age_220035 = '$_POST[pet_age_220035]',
                  pet_food_220035 = '$_POST[pet_food_220035]',
                  pet_owner_220035 = '$_POST[pet_owner_220035]',
                  pet_address_220035 = '$_POST[pet_address_220035]',
                  pet_phone_220035 = '$_POST[pet_phone_220035]'
                  WHERE pet_id_220035 = '$_POST[pet_id_220035]';
                  ";

        // run query
        $update = mysqli_query($db_connection, $query);
    
        if($update) {  // check if query TRUE/success
            //echo "<p>Pet update successfully !</p>"; // success msg (html version)
            echo "<script> alert('Pet update successfuly !'); </script>"; // success msg (javascript version)
        } else {
            //echo "<p>Pet update failed !</p>"; // fail msg (html version)
            echo "<script> alert('Pet update failed !'); </script>";  // success fail (javascript version)
        }
    }   
?>
<!--<p><a href="read_pet_220035.php">BACK TO PETS LIST</a></p>-->
<script>window.location.replace("read_pet_220035.php");</script>