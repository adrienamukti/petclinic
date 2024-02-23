<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please login first  !');window.location.replace('form_login_220035.php');</script>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pet Clinic Adri</title>
  </head>
  <body>
    <h1>Adri Pet Clinic</h1><hr>
    <h3>Form Edit Doctor</h3>
    <?php
    //call connection php mysql
      include "connection_220035.php";

      // make query SELECT FROM WHERE
      $query="SELECT * FROM doctors_220035 WHERE doctor_id_220035='$_GET[id]'";

      // run query
      $doctor=mysqli_query($db_connection,$query);

      // extract data from query result
      $data=mysqli_fetch_assoc($doctor);
    ?>
    <form method="post" action="update_doctor_220035.php" enctype="multipart/form-data">
    <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="doctor_name_220035" value="<?=$data['doctor_name_220035']?>" required></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" name="doctor_gender_220035" value="Male" <?=($data['doctor_gender_220035']=='Male')?'checked':'';?> required>Male
            <input type="radio" name="doctor_gender_220035" value="Female" <?=($data['doctor_gender_220035']=='Female')?'checked':'';?> required>Female
          </td>
        </tr>
        <tr>
        <tr>
          <td>Address</td>
          <td><textarea name="doctor_address_220035" required><?=$data['doctor_address_220035']?></textarea></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="text" name="doctor_phone_220035" value="<?=$data['doctor_phone_220035']?>" required></td>
        </tr>
        <tr>
          <td>Photo</td>
          <td><img src="uploads/doctors/<?= $data['doctor_photo_220035']; ?>" width="150" height="150"><br></td>
        </tr>
        <tr>
                <td></td>
                <td><input type="file" name="new_photo_220035" /></td>
            </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" name="save" value="SAVE">
            <input type="reset"  name="reset" value="RESET">
          </td>
        </tr>
      </table>
      <input type="hidden" name="doctor_id_220035" value="<?=$data['doctor_id_220035']?>">
      <input type="hidden" name="doctor_photo_220035" value="<?=$data['doctor_photo_220035']?>">
    </form>
    <p><a href="read_doctor_220035.php">CANCEL</a></p>
  </body>
</html>
