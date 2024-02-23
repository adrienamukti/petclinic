<?php
    //echo $_POST['doctor_name_220035'] . "<br>";
    //echo $_POST['doctor_gender_220035'] . "<br>";
    //echo $_POST['doctor_address_220035'] . "<br>";
    //echo $_POST['doctor_phone_220035'] . "<br>";

if(isset($_POST['save'])) { // check variable POST from FORM 
    include "connection_220035.php"; //call connection php mysql

    // sql query INSERT INTO VALUES
    $query = "INSERT INTO doctors_220035 (doctor_name_220035,doctor_gender_220035,
             doctor_address_220035, doctor_phone_220035) 
             VALUES ('$_POST[doctor_name_220035]', '$_POST[doctor_gender_220035]', 
            '$_POST[doctor_address_220035]', '$_POST[doctor_phone_220035]')";

             /* VALUES ('" . $_POST['doctor_name_220035'] . "', '" . $_POST['doctor_gender_220035'] . "', 
            '" . $_POST['doctor_address_220035'] . "', '" . $_POST['doctor_phone_220035'] . "')"; */
    // run query
    $create = mysqli_query($db_connection, $query);

    if($create) {  // check if query TRUE/success
        //echo "<p>Doctor added successfully !</p>"; // success msg (html version)
        echo "<script> alert('Doctor added successfuly !'); </script>"; // success msg (javascript version)
    } else {
        //echo "<p>Doctor add failed !</p>"; // fail msg (html version)
        echo "<script> alert('Doctor added failed !'); </script>";  // success fail (javascript version)
    }
}   
?>
<!--<p><a href="read_pet_220035.php">BACK TO PETS LIST</a></p>-->
<script>window.location.replace("read_doctor_220035.php");</script>