<?php
    //echo $_POST['pet_name_220035'] . "<br>";
    //echo $_POST['pet_type_220035'] . "<br>";
    //echo $_POST['pet_gender_220035'] . "<br>";
    //echo $_POST['pet_age_220035'] . "<br>";
    //echo $_POST['pet_owner_220035'] . "<br>";
    //echo $_POST['pet_address_220035'] . "<br>";
    //echo $_POST['pet_phone_220035'] . "<br>";


    if(isset($_POST['save'])) { // check variable POST from FORM 
        include "connection_220035.php"; //call connection php mysql
    
        // sql query INSERT INTO VALUES
        $query = "INSERT INTO pets_220035 (pet_name_220035, pet_type_220035, 
                 pet_gender_220035, pet_age_220035, pet_food_220035, pet_owner_220035, 
                 pet_address_220035, pet_phone_220035) 
                VALUES ('$_POST[pet_name_220035]', '$_POST[pet_type_220035]',
                '$_POST[pet_gender_220035]', '$_POST[pet_age_220035]', '$_POST[pet_food_220035]',
                '$_POST[pet_owner_220035]', '$_POST[pet_address_220035]',
                '$_POST[pet_phone_220035]')";
                
                /*
                VALUES ('" . $_POST['pet_name_220035'] . "', '" . $_POST['pet_type_220035'] . "',
                '" . $_POST['pet_gender_220035'] . "', '" . $_POST['pet_age_220035'] . "',
                '" . $_POST['pet_owner_220035'] . "', '" . $_POST['pet_address_220035'] . "',
                '" . $_POST['pet_phone_220035'] . "')";
                */

        // run query
        $create = mysqli_query($db_connection, $query);
    
        if($create) {  // check if query TRUE/success
            //echo "<p>Pet added successfully !</p>"; // success msg (html version)
            echo "<script> alert('Pet added successfuly !'); </script>"; // success msg (javascript version)
        } else {
            //echo "<p>Pet add failed !</p>"; // fail msg (html version)
            echo "<script> alert('Pet added failed !'); </script>";  // success fail (javascript version)
        }
    }   
?>
<!--<p><a href="read_pet_220035.php">BACK TO PETS LIST</a></p>-->
<script>window.location.replace("read_pet_220035.php");</script>