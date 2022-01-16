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
?>