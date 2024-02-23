<!DOCTYPE html>
<html>

<head>
    <title>Pet Clinic Adri</title>
</head>

<body>
    <h1>Adri Pet Clinic</h1>
    <hr>
    <h3>Change User Photo</h3>
    <?php
    //call connection php mysql
    include "connection_220035.php";

    // make query SELECT FROM WHERE
    $query = "SELECT * FROM users_220035 WHERE userid_220035='$_GET[id]'";

    // run query
    $pet = mysqli_query($db_connection, $query);

    // extract data from query result
    $data = mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="user_upload_220035.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td></td>
                <td><img src="uploads/users/<?= $data['photo_220035'] ?>" width="100" height="100"></td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo_220035" required /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="UPLOAD" />
                    <input type="hidden" name="photo_220035" value="<?= $data['photo_220035'] ?>" />
                    <input type="hidden" name="userid_220035" value="<?= $data['userid_220035'] ?>" />
                </td>
            </tr>
        </table>
    </form>
    <p><a href="index.php">CANCEL</a></p>
</body>

</html>