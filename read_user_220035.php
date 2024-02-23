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
    <div class="main-content1">
    <h3>Users List</h3>
    <p style="text-align: left;"><a href="add_user_220035.php">Add New User</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Usertype</th>
            <th>Fullname</th>
            <th colspan="3">Action</th>
        </tr>
        <?php
        include "connection_220035.php"; // call connection
        $query = "SELECT * FROM users_220035"; // make a sql query
        $users = mysqli_query($db_connection, $query); // run query & result quert is array

        $i = 1; // initial counter for numbering
        foreach ($users as $data) : //loop to extract data from database / loop data array
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['username_220035']; ?></td>
                <td><?php echo $data['usertype_220035']; ?></td>
                <td><?= $data['fullname_220035']; ?></td>
                <td><a href="edit_user_220035.php?id=<?= $data['userid_220035'] ?>">Edit User</a></td>
                <td><a href="delete_user_220035.php?id=<?= $data['userid_220035'] ?>" onclick="return confirm('Are you sure?')">Delete User</a></td>
                <td><a href="reset_password_220035.php?id=<?= $data['userid_220035']; ?> &type=<?= $data['usertype_220035']; ?>" onclick="return confirm('Are you sure?')">Reset Password</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p style="text-align: left;"><a href="index.php">Back to home</a></p>
    </div>
</body>

</html>