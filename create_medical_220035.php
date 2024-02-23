<?php
if(isset($_POST['save'])) { //check variable POST from FORM
    include "connection_220035.php"; //call connection php mysql

    // sql query INSERT INTO SET
    $query = "INSERT INTO  medicals_220035 SET
            pet_id_220035       = '$_POST[pet_id_220035]',
            doctor_id_220035    = '$_POST[doctor_id_220035]',
            symptom_220035      = '$_POST[symptom_220035]',
            diagnose_220035     = '$_POST[diagnose_220035]',
            treatment_220035    = '$_POST[treatment_220035]',
            cost_220035         = '$_POST[cost_220035]'";

    // run query
    $create = mysqli_query($db_connection, $query);

    if($create) { //check if query TRUE/success
        // echo "<p>Medical updated successfully  !</p>"; // success msg (html version)
        echo "<script>alert('Medical added  successfully !'); </script>"; // success msg (Javascript version)
    } else {
        // echo "<p>Medical updated successfully  !</p>"; // fail msg (html version)
        echo "<script>alert('Medical added  Failed !'); </script>"; // fail msg (Javascript version)     
    }
}
?>
<!-- <p><a href="read_doctor_220035.php">BACK TO DOCTOR LIST</a></p> -->
<script>window.location.replace("medicals_220035.php?pet_id=<?=$_POST['pet_id_220035'];?>");</script>