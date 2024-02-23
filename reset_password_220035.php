<?php
if (isset($_GET['id'])) {
    include "connection_220035.php";
    $password = password_hash($_GET['type'], PASSWORD_DEFAULT);
    $query = "UPDATE users_220035 SET password_220035='$password' WHERE userid_220035='$_GET[id]'";
    $update = mysqli_query($db_connection, $query);
    if ($update) {
        echo "<script>alert('Reset password successed !')</script>";
    } else {
        echo "<script>alert('Reset password failed !')</script>";
    }
}
?>
<script>
    window.location.replace("read_user_220035.php");
</script>