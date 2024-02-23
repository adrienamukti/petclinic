<?php
session_start();
if (!isset($_SESSION['login'])) {
  echo "<script>alert('Please login first  !');window.location.replace('form_login_220035.php');</script>";
}
if ($_SESSION['usertype'] != 'Manager') {
  echo "<script>alert('Access forbidden  !');window.location.replace('index.php');</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Pet Clinic Adri</title>
</head>

<body>
  <h1>Adri Pet Clinic</h1>
  <hr>
  <h3>Form Edit User</h3>
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
  <form method="post" action="update_user_220035.php">
    <table>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username_220035" value="<?= $data['username_220035'] ?>" required></td>
      </tr>
      <tr>
        <td>Usertype</td>
        <td>
          <input type="radio" name="usertype_220035" value="Staff" <?= ($data['usertype_220035'] == 'Staff') ? 'checked' : ''; ?> required>Staff
          <input type="radio" name="usertype_220035" value="Manager" <?= ($data['usertype_220035'] == 'Manager') ? 'checked' : ''; ?> required>Manager
        </td>
      </tr>
      <tr>
        <td>Fullname</td>
        <td><input type="text" name="fullname_220035" value="<?= $data['fullname_220035'] ?>" required></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" name="save" value="SAVE">
          <input type="reset" name="reset" value="RESET">
          <input type="hidden" name="userid_220035" value="<?= $data['userid_220035'] ?>">
        </td>
      </tr>
    </table>
  </form>
  <p><a href="read_user_220035.php">CANCEL</a></p>
</body>

</html>