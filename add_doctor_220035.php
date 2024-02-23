<!DOCTYPE html>
<html>
    <head>
        <title>Pet CLinic Adri</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Adri Pet Clinic</h1><hr>
        <h3>Add Doctor</h3>
        <form method="post" action="create_doctor_220035.php">
    <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="doctor_name_220035" required></td>
        </tr>
        <tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" name="doctor_gender_220035" value="Male" required>Male
            <input type="radio" name="doctor_gender_220035" value="Female" required>Female
          </td>
        </tr>
        <tr>
          <td>Address</td>
          <td><textarea name="doctor_address_220035" required></textarea></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="text" name="doctor_phone_220035" required></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" name="save" value="SAVE">
            <input type="reset" name="reset" value="RESET">
          </td>
        </tr>
      </table>
    </form>
    </body>
</html>