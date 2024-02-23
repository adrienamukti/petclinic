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
    <h3>Form Edit Pet</h3>
    <?php
    //call connection php mysql
      include "connection_220035.php";

      // make query SELECT FROM WHERE
      $query="SELECT * FROM pets_220035 WHERE pet_id_220035='$_GET[id]'";

      // run query
      $pet=mysqli_query($db_connection,$query);

      // extract data from query result
      $data=mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="update_pet_220035.php">
    <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="pet_name_220035" value="<?=$data['pet_name_220035']?>" required></td>
        </tr>
        <tr>
          <td>Type</td>
          <td>
            <select name="pet_type_220035" required>
              <option value="">Choose</option>
              <option value="Cat" <?=($data['pet_type_220035']=='Cat')?'selected':'';?>>Cat</option>
              <option value="Dog" <?=($data['pet_type_220035']=='Dog')?'selected':'';?>>Dog</option>
              <option value="Reptil" <?=($data['pet_type_220035']=='Reptil')?'selected':'';?>>Reptil</option>
              <option value="Bird" <?=($data['pet_type_220035']=='Bird')?'selected':'';?>>Bird</option>
              <option value="Rodent" <?=($data['pet_type_220035']=='Rodent')?'selected':'';?>>Rodent</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" name="pet_gender_220035" value="Male" <?=($data['pet_gender_220035']=='Male')?'checked':'';?> required>Male
            <input type="radio" name="pet_gender_220035" value="Female" <?=($data['pet_gender_220035']=='Female')?'checked':'';?> required>Female
          </td>
        </tr>
        <tr>
          <td>Age</td>
          <td><input type="number" name="pet_age_220035" value="<?=$data['pet_age_220035']?>" required></td>
        </tr>
        <tr>
          <td>Food</td>
          <td>
            <input type="radio" name="pet_food_220035" value="Dry" <?=($data['pet_food_220035']=='Dry')?'checked':'';?> required>Dry
            <input type="radio" name="pet_food_220035" value="Wet" <?=($data['pet_food_220035']=='Wet')?'checked':'';?> required>Wet
          </td>
        </tr>
        <tr>
          <td>Owner</td>
          <td><input type="text" name="pet_owner_220035" value="<?=$data['pet_owner_220035']?>" required></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><textarea name="pet_address_220035" required><?=$data['pet_address_220035']?></textarea></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="text" name="pet_phone_220035" value="<?=$data['pet_phone_220035']?>" required></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" name="save" value="SAVE">
            <input type="reset" name="reset" value="RESET">
            <input type="hidden" name="pet_id_220035" value="<?=$data['pet_id_220035']?>">
          </td>
        </tr>
      </table>
    </form>
    <p><a href="read_pet_220035.php">CANCEL</a></p>
  </body>
</html>
