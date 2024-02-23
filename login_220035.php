<?php
session_start(); // start the session
if (isset($_POST['login'])) { // check POST variable from FORM
    include "connection_220035.php"; // call connection

    // make the query based on username
    $query = "SELECT * FROM users_220035 WHERE username_220035='$_POST[username_220035]'";

    // run the query
    $login = mysqli_query($db_connection, $query);

    if (mysqli_num_rows($login) > 0) { // check if the username found or not
        $user = mysqli_fetch_assoc($login); // if user found, extract the data
        if (password_verify($_POST['password_220035'], $user['password_220035'])) { // verify the password

            // if password match, then make session variable
            $_SESSION['login'] = TRUE;
            $_SESSION['userid'] = $user['userid_220035'];
            $_SESSION['username'] = $user['username_220035'];
            $_SESSION['password'] = $user['password_220035'];
            $_SESSION['usertype'] = $user['usertype_220035'];
            $_SESSION['fullname'] = $user['fullname_220035'];

            // succes login msg
            echo "<script>alert('Login succes !');window.location.replace('index.php');</script>";
        } else { // password did noth match
            // wrong password msg then redirect to login form
            echo "<script>alert('Login failed, wrong password !');window.location.replace('index.php');</script>";
        }
    } else { // user not found
        // login failed msg then redirect to login form
        echo "<script>alert('Login failed, user not found !');window.location.replace('form_login_220035.php')</script>";
    }
}
?>