<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please login first  !');window.location.replace('form_login_220035.php');</script>";
}

include "connection_220035.php"; // call connection
$query = "SELECT * FROM users_220035 WHERE userid_220035 = " . $_SESSION['userid']; // make a sql query
$users = mysqli_query($db_connection, $query); // run query & result quert is array

// extract data from query result
$data = mysqli_fetch_assoc($users);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Pet Clinic Adri</title>
</head>

<body>
    <header>
        <a style="text-decoration: none;" href="index.php">
            <h1>Pet CLinic Adri</h1>
        </a>
        <img src="uploads/users/<?= $data['photo_220035']; ?>" alt="Profile Picture" class="user-pic" onclick="toggleMenu()">
        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <h2><?= $_SESSION['fullname']; ?></h2>
                </div>
                <p>you are login as <?= $_SESSION['usertype']; ?></p>
                <hr style="width: 80%; position:relative; bottom:30px;">

                <a href="photo_220035.php?id=<?= $data['userid_220035'] ?>" class="sub-menu-link">
                    <img src="img/changepoto.png" alt="">
                    <p>Change Photo</p>
                    <span></span>
                </a>

                <a href="change_password_220035.php" class="sub-menu-link">
                    <img src="img/changepw.png" alt="">
                    <p>Change Password</p>
                    <span></span>
                </a>

                <a href="logout_220035.php" class="sub-menu-link">
                    <img src="img/logout1.png" alt="">
                    <p>logout</p>
                    <span></span>
                </a>
            </div>
    </header>
    <nav class="sidebar">
        <ul>
            <li><a href="read_pet_220035.php">Pet List</a></li>
            <li><a href="read_doctor_220035.php">Doctor List</a></li>
            <?php if ($_SESSION['usertype'] == 'Manager') { ?>
                <li><a href="read_user_220035.php">Users List</a></li>
            <?php } ?>
            <li><a href="report.php">Monthly Report</a></li>
        </ul>
    </nav>
    <div class="main-content">
        <h1>Welcome to Pet Clinic Adri</h1>
    </div>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }

        document.addEventListener('click', (event) => {
            if (!event.target.matches('#subMenu') && !event.target.matches('.user-pic')) {
                subMenu.classList.remove('open-menu');
            }
        });
    </script>
</body>

</html>