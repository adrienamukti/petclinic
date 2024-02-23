<?php
session_start();

include "connection_220035.php"; // call connection
$query = "SELECT * FROM users_220035 WHERE userid_220035 = " . $_SESSION['userid']; // make a sql query
$users = mysqli_query($db_connection, $query); // run query & result quert is array

// extract data from query result
$data = mysqli_fetch_assoc($users);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pet CLinic Adri</title>
    <link rel="stylesheet" href="styles.css">

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
    <div class="main-content2">
    <h3>Doctor List</h3>
        <p style="text-align: left;"><a href="add_doctor_220035.php">Add New Doctor</a></p>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Photo</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
            include "connection_220035.php"; // call connection
            $query = "SELECT * FROM doctors_220035"; // make a sql query
            $doctors = mysqli_query($db_connection, $query); // run query

            $i=1; // initial counter for numbering
            foreach ($doctors as $data) : //loop to extract data from database
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['doctor_name_220035']; ?></td>
                <td><?php echo $data['doctor_gender_220035']; ?></td>
                <td><?= $data['doctor_address_220035']; ?></td>
                <td><?= $data['doctor_phone_220035']; ?></td>
                <td align="center">
                    <img src="uploads/doctors/<?= $data['doctor_photo_220035']; ?>" width="50" height="50"><br>
                </td>
                <td><a href="edit_doctor_220035.php?id=<?=$data['doctor_id_220035']?>">Edit Doctor</a></td>
                <td><a href="delete_doctor_220035.php?id=<?=$data['doctor_id_220035']?>" onclick="return confirm('Are you sure?')">Delete Doctor</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p style="text-align: left;"><a href="index.php">Back to home</a></p>
    </div>
    </body>
</html>