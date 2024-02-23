<?php

if (isset($_POST['save'])) { // check variable POST from FORM 
    include "connection_220035.php"; //call connection php mysql

    $photo = $_POST['doctor_photo_220035'];

    $folder = 'uploads/doctors/'; // target folder for update
    if ($_FILES['new_photo_220035']['name'] != "") {
        if (move_uploaded_file($_FILES['new_photo_220035']['tmp_name'], $folder . $_FILES['new_photo_220035']['name'])) {
            $photo = $_FILES['new_photo_220035']['name']; // change photo if success
            $msg = "photo changed";
        } else {
            $msg = "upload failed";
        }
    } else {
        $msg = "photo did not change";
    }

    // sql query UPDATE SET WHERE
    $query = "UPDATE doctors_220035 SET 
            doctor_name_220035 = '$_POST[doctor_name_220035]',
            doctor_gender_220035 = '$_POST[doctor_gender_220035]',
            doctor_address_220035 = '$_POST[doctor_address_220035]',
            doctor_phone_220035 = '$_POST[doctor_phone_220035]',
            doctor_photo_220035 = '$photo'
            WHERE doctor_id_220035 = '$_POST[doctor_id_220035]';
            ";

    // run query
    $update = mysqli_query($db_connection, $query);

    if ($update) {  // check if query TRUE/success
        //echo "<p>doctor update successfully !</p>"; // success msg (html version)
        if ($_POST['doctor_photo_220035'] !== 'default.png') unlink($folder . $_POST['doctor_photo_220035']); // delete old photo
        echo "<script> alert('doctor update and change photo successfuly !'); </script>"; // success msg (javascript version)
    } else {
        //echo "<p>doctor update failed !</p>"; // fail msg (html version)
        echo "<script> alert('doctor update and change photo failed !'); </script>";  // success fail (javascript version)
    }
}
?>
<!--<p><a href="read_doctor_220035.php">BACK TO doctorS LIST</a></p>-->
<script>
    window.location.replace("read_doctor_220035.php");
</script>