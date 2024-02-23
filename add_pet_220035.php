<!DOCTYPE html>
<html>
  <head>
    <title>Pet Clinic Adri</title>
  </head>
  <body>
    <h1>Adri Pet Clinic</h1><hr>
    <h3>Form Add Pet</h3>
    <form method="post" action="create_pet_220035.php">
    <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="pet_name_220035" required></td>
        </tr>
        <tr>
          <td>Type</td>
          <td>
            <select name="pet_type_220035" required>
              <option value="">Choose</option>
              <option value="Cat">Cat</option>
              <option value="Dog">Dog</option>
              <option value="Reptil">Reptil</option>
              <option value="Bird">Bird</option>
              <option value="Rodent">Rodent</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" name="pet_gender_220035" value="Male" required>Male
            <input type="radio" name="pet_gender_220035" value="Female" required>Female
          </td>
        </tr>
        <tr>
          <td>Age</td>
          <td><input type="number" name="pet_age_220035" required></td>
        </tr>
        <tr>
          <td>Food</td>
          <td>
            <input type="radio" name="pet_food_220035" value="Dry" required>Dry
            <input type="radio" name="pet_food_220035" value="Wet" required>Wet
          </td>
        </tr>
        <tr>
          <td>Owner</td>
          <td><input type="text" name="pet_owner_220035" required></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><textarea name="pet_address_220035" required></textarea></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="text" name="pet_phone_220035" required></td>
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
    <p><a href="read_pet_220035.php">CANCEL</a></p>
  </body>
</html>
