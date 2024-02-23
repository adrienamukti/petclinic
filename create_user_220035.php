<?php

if (isset($_POST['save'])) { // check variable POST from FORM 
    include "connection_220035.php"; //call connection php mysql

    // create default password
    $password = password_hash($_POST['usertype_220035'], PASSWORD_DEFAULT);

    // sql query INSERT INTO VALUES
    $query = "INSERT INTO users_220035 (username_220035, password_220035, 
                 usertype_220035, fullname_220035) 
                VALUES ('$_POST[username_220035]', '$password',
                '$_POST[usertype_220035]', '$_POST[fullname_220035]')";


    // run query
    $create = mysqli_query($db_connection, $query);

    if ($create) {  // check if query TRUE/success
        //echo "<p>user added successfully !</p>"; // success msg (html version)
        echo "<script> alert('user added successfuly !'); </script>"; // success msg (javascript version)
    } else {
        //echo "<p>user add failed !</p>"; // fail msg (html version)
        echo "<script> alert('user added failed !'); </script>";  // success fail (javascript version)
    }
}
?>
<!--<p><a href="read_user_220035.php">BACK TO userS LIST</a></p>-->
<script>
    window.location.replace("read_user_220035.php");
</script>