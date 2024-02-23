<!DOCTYPE html>
<html>
    <head>
        <title>Pet Clinic Adri</title>
    </head>
    <body>
        <h1>Pet Clinic Adri</h1><hr>
        <h3>Medical Records</h3>
        <?php
        //call connection php mysql
        include "connection_220035.php";

        // make query SELECT FROM WHERE
        $querypet="SELECT * FROM pets_220035 WHERE pet_id_220035='$_GET[pet_id]'";

        // run query
        $pet=mysqli_query($db_connection,$querypet);

        // extract data from query result
        $data1=mysqli_fetch_assoc($pet);

        // query one table
        // $querymed="SELECT * FROM medicals_220035 WHERE pet_id_220035='$_GET[pet_id]'";

        // query two table
        $querymed="SELECT * FROM medicals_220035 AS m, doctors_220035 AS d WHERE m.pet_id_220035='$_GET[pet_id]' AND m.doctor_id_220035=d.doctor_id_220035";
        $medicals=mysqli_query($db_connection,$querymed);

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
        </table>
        <p><a href="add_medical_220035.php?pet_id=<?=$data1['pet_id_220035']?>">Add New Record</a></p>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Doctor</th>
                <th>Symptom</th>
                <th>Diagnose</th>
                <th>Treatment</th>
                <th>Cost ($)</th>
            </tr>
            <!-- will loop if the data not empty -->
            <?php
            if(mysqli_num_rows($medicals) > 0) {
                $i=1;
                foreach($medicals as $data2) :
            ?>
            <tr>
                <td><?=$i++?></td>
                <td></td><?= date('l, d M Y H:i:s', strtotime($data2['mr_date_220035'])); ?></td>
                <td><?=$data2['doctor_name_220035']?></td>
                <td><?=$data2['symptom_220035']?></td>
                <td><?=$data2['diagnose_220035']?></td>
                <td><?=$data2['treatment_220035']?></td>
                <td><?=$data2['cost_220035']?></td>
            </tr>
            <?php
                endforeach;
             }  else {
            ?>
            <!-- will show if the data empty -->
            <tr><td colspan="7" align="center">No record!</td></tr>
            <?php } ?>
        </table>
        <p><a href="read_pet_220035.php">Back to Pets List</a></p>
    </body>
</html>