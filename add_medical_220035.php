<!DOCTYPE html>
<html>
    <head>
        <title>Pet Clinic Adri</title>
    </head>
    <body>
        <h1>Pet Clinic Adri</h1><hr>
        <h3>Form Add Medical</h3>
        <?php
        //call connection php mysql
        include "connection_220035.php";

        // make query SELECT FROM WHERE
        $querypet="SELECT * FROM pets_220035 WHERE pet_id_220035='$_GET[pet_id]'";

        // run query
        $pet=mysqli_query($db_connection,$querypet);

        // extract data from query result
        $data1=mysqli_fetch_assoc($pet);

        $querydoc="SELECT * FROM doctors_220035";
        $doctors=mysqli_query($db_connection,$querydoc);
        ?>
        <table>
        <tr>
            <td>Pet id/Name</td>
            <td>: <?=$data1['pet_id_220035']?> / <?=$data1['pet_name_220035']?></td>
        </tr>
        <tr>
            <td>Pet Type/Gender/Age</td>
            <td>: <?=$data1['pet_type_220035']?> / <?=$data1['pet_gender_220035'] ?> / <?=$data1['pet_age_220035']?></td>
        </tr>
        <tr>
            <td>Owner</td>
            <td>: <?=$data1['pet_owner_220035']?> / <?=$data1['pet_address_220035'] ?> / <?=$data1['pet_phone_220035']?></td>
        </tr>
        </table><hr>
        <form method="post" action="create_medical_220035.php">
            <table>
                <tr>
                    <td>Doctor</td>
                    <td>
                        <select name="doctor_id_220035" required>
                            <option value="">Choose</option>
                            <?php foreach($doctors as $data2) : ?>
                            <option value="<?=$data2['doctor_id_220035']?>"><?=$data2['doctor_name_220035']?></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Symptom</td>
                    <td><textarea name="symptom_220035" required></textarea></td>
                </tr>
                <tr>
                    <td>Diagnose</td>
                    <td><textarea name="diagnose_220035" required></textarea></td>
                </tr>
                <tr>
                    <td>Treatment</td>
                    <td><textarea name="treatment_220035" required></textarea></td>
                </tr>
                <tr>
                    <td>Cost ($)</td>
                    <td><input type="number" name="cost_220035" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="save" value="SAVE">
                        <input type="reset" name="reset" value="RESET">
                        <input type="hidden" name="pet_id_220035" value="<?=$data1['pet_id_220035']?>">
                    </td>
                </tr>
            </table>
        </form>
        <p><a href="medicals_220035.php?pet_id=<?=$data1['pet_id_220035']?>">CANCEL</a></p>
    </body>
</html>