<?php

    if(isset($_POST['save'])) { // check variable POST from FORM 
        include "connection_220035.php"; //call connection php mysql
    
        // sql query UPDATE SET WHERE
        $query = "UPDATE users_220035 SET 
                  username_220035 = '$_POST[username_220035]',
                  usertype_220035 = '$_POST[usertype_220035]',
                  fullname_220035 = '$_POST[fullname_220035]'
                  WHERE userid_220035 = '$_POST[userid_220035]';";

        // run query
        $update = mysqli_query($db_connection, $query);
    
        if($update) {  // check if query TRUE/success
            //echo "<p>User update successfully !</p>"; // success msg (html version)
            echo "<script> alert('User update successfuly !'); </script>"; // success msg (javascript version)
        } else {
            //echo "<p>User update failed !</p>"; // fail msg (html version)
            echo "<script> alert('User update failed !'); </script>";  // success fail (javascript version)
        }
    }   
?>
<!--<p><a href="read_User_220035.php">BACK TO UserS LIST</a></p>-->
<script>window.location.replace("read_user_220035.php");</script>