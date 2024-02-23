<!DOCTYPE html>
<html>

<head>
  <title>Pet Clinic Adri</title>
</head>

<body>
  <h1>Adri Pet Clinic</h1>
  <hr>
  <h3>Form Add User</h3>
  <form method="post" action="create_user_220035.php">
    <table>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username_220035" required></td>
      </tr>
      <tr>
        <td>Usertype</td>
        <td>
          <input type="radio" name="usertype_220035" value="Staff" required>Staff
          <input type="radio" name="usertype_220035" value="Manager" required>Manager
        </td>
      </tr>
      <td>Fullname</td>
      <td><input type="text" name="fullname_220035" required></td>
      </tr>
      <td></td>
      <td>
        <input type="submit" name="save" value="SAVE">
        <input type="reset" name="reset" value="RESET">
      </td>
      </tr>
    </table>
  </form>
  <p><a href="read_user_220035.php">CANCEL</a></p>
</body>

</html>