<?php
    include('config.php');

    $sqlQuery = "SELECT id, first_name, last_name, title, photo_path FROM doctor ORDER BY last_name";
    $statement = $bdd->prepare($sqlQuery);
    $statement->execute();
    
    $doctors = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($doctors as $doctor) {
    echo '
            <tr class ="doctor_card" value=' . $doctor["id"] . '>
                <td>
                    <h6 >' . $doctor["first_name"] . ' ' . $doctor["first_name"] . '</h6>
                </td>
                <td>
                    <h6>' . $doctor["title"] . '</h6>
                </td>
            </tr>
        ';
    }
    /*
    //counter to mark the first iteration as selected
    $i = 0;
    $len = count($doctors);
    foreach ($doctors as $doctor) {
        if ($i == 0) {
            echo "<option value='" . $doctor["id"]. "'selected>" . $doctor["first_name"]. " " . $doctor["last_name"] . "</option>";
        } else if ($i == $len - 1) {
            echo "<option value='" . $doctor["id"]. "'>" . $doctor["first_name"]. " " . $doctor["last_name"] . "</option>";
        }
        $i++;
    }
    */
?>