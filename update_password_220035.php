<?php
session_start(); // start the session
if (isset($_POST['change'])) { // check variable POST from FORM 
    include "connection_220035.php"; //call connection php mysql

    // encrypt the new password
    $password = password_hash($_POST['new_password_220035'], PASSWORD_DEFAULT);

    // sql query UPDATE SET WHERE
    $query = "UPDATE users_220035 SET password_220035='$password' WHERE userid_220035='$_SESSION[userid]'";

    // run query
    $update = mysqli_query($db_connection, $query);

    if ($update) {  // check if query TRUE/success
        $_SESSION['password'] = $password; //update data session if success 
        // success msg
        echo "<script> alert ('Change password successed !');window.location.replace('index.php');</script>";
    } else {
        // failed msg
        echo "<script> alert ('Change password failed !');window.location.replace('change_password_220035.php');</script>";
    }
}
?>  