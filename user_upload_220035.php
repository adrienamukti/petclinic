<?php
if(isset($_POST['upload'])) { // check variable POST from FORM
    include "connection_220035.php"; // call connection

    $folder = 'uploads/users/'; // target folder for update
    if(move_uploaded_file($_FILES['new_photo_220035']['tmp_name'], $folder . $_FILES['new_photo_220035']['name'])) {

        // success upload get the photo name
        $photo=$_FILES['new_photo_220035']['name'];

        // make query for update photo
        $query="UPDATE users_220035 SET photo_220035='$photo' WHERE userid_220035='$_POST[userid_220035]'";

        // run query
        $upload=mysqli_query($db_connection,$query);

        if($upload) { // check query result TRUE/success
            if($_POST['photo_220035'] !== 'default.png') unlink($folder . $_POST['photo_220035']); // delete old photo
            // success msg
            echo "<script>alert('Change photo successed !');window.location.replace('index.php');</script>";
        } else {
            // failed msg
            echo "<script>alert('Change photo failed !');window.location.replace('index.php?id=$_POST[userid_220035]');</script>";
        }
        // failed upload
    } else {
        echo "<script>alert('Upload photo failed !');window.location.replace('photo_220035.php?id=$_POST[userid_220035]');</script>";
    }
}
?>