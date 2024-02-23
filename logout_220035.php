<?php
session_start();
session_destroy();
echo "<script>alert('Logout success !');window.location.replace('form_login_220035.php');</script>";
?>