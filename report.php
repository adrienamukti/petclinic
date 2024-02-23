<?php
session_start();

if ($_SESSION['usertype'] != 'Manager') {
    echo "<script> alert (' Access forbidden !');window.location.replace('index.php'); </script>";
}
include "connection_220035.php"; // call connection
$query = "SELECT * FROM users_220035 WHERE userid_220035 = " . $_SESSION['userid']; // make a sql query
$users = mysqli_query($db_connection, $query); // run query & result quert is array

// extract data from query result
$data = mysqli_fetch_assoc($users);
?>
<!DOCTYPE html>

<head>
    <title>Pet Clinic Adriena</title>
    <style>
        @media print {

            .print,
            .head,
            .sidebar {
                display: none;
            }
        }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="head">
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
        <h1>Pet Clinic Adri</h1>
        <hr>
        <h3>Monthly Report</h3>
        <?php
        include 'connection_220035.php';
        $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

        $queryyear = "SELECT DISTINCT(YEAR(mr_date_220035)) AS year FROM medicals_220035";
        $year = mysqli_query($db_connection, $queryyear);

        $mt = isset($_GET['month']) ? $_GET['month'] : '';
        $yr = isset($_GET['year']) ? $_GET['year'] : '';
        ?>
        <form class="print">
            <p>Select
                <select name="month" required>
                    <option value="">Month</option><?php for ($m = 1; $m <= 12; $m++) { ?>
                        <option value="<?= $m ?>" <?= $mt == $m ? 'selected' : '' ?>><?= $months[$m - 1] ?></option><?php
                                                                                                                } ?>
                </select>
                <select name="year" required>
                    <option value="">Year</option><?php foreach ($year as $y) : ?>
                        <option value="<?= $y['year'] ?>" <?= $yr == $y['year'] ? 'selected' : '' ?>><?= $y['year'] ?>
                        </option><?php endforeach; ?>
                </select>
                <input type="submit" value="View Report">
            </p>
        </form>
        <?php
        if (isset($_GET['year'])) {
            // $query="SELECT * FROM medicals_220035";
            $query = "SELECT m.mr_date_220035, d.doctor_name_220035, p.pet_name_220035, p.pet_owner_220035, m.cost_220035 FROM medicals_220035 AS m, doctors_220035 AS d, pets_220035 AS p 
        WHERE m.doctor_id_220035=d.doctor_id_220035 AND m.pet_id_220035=p.pet_id_220035 AND MONTH(m.mr_date_220035)='$_GET[month]' AND YEAR(m.mr_date_220035)='$_GET[year]'";

            $report = mysqli_query($db_connection, $query);

        ?>
            <h4>Report periode <?= $months[$_GET['month'] - 1] ?> - <?= $_GET['year'] ?></h4>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Pet</th>
                    <th>Owner</th>
                    <th>Pay ($)</th>
                </tr>
                <?php
                if (mysqli_num_rows($report) > 0) {
                    $i = 1;
                    $total = 0;
                    foreach ($report as $data) :
                        $total = $total + $data['cost_220035'];
                ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $data['mr_date_220035'] ?></td>
                            <td><?= $data['doctor_name_220035'] ?></td>
                            <td><?= $data['pet_name_220035'] ?></td>
                            <td><?= $data['pet_owner_220035'] ?></td>
                            <td align="right"><?= $data['cost_220035'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <th colspan="7" align="right">Total : $ <?= $total ?></th>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <th colspan="7" align="center">No record !</th>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
        <p><button onclick="window.print()" class="print">Print This Page</button></p>
        <p style="text-align: left;"><a href="index.php" class="print">Back To Home</a></p>
    </div>
</body>

</html>