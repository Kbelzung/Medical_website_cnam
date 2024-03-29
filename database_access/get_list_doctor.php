<?php
    include('config.php');

    $sqlQuery = "SELECT id, first_name, last_name, title, photo_name FROM doctor ORDER BY last_name";
    $statement = $bdd->prepare($sqlQuery);
    $statement->execute();
    
    $doctors = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($doctors as $doctor) {
        echo '
            <div class ="doctor_card" value=' . $doctor["id"] . '>
                <img src="../resources/photos/photos_doctors/' . $doctor["photo_name"] . '"></img>
                <div class="doctor_info">
                    <td>
                        <h6 >' . $doctor["first_name"] . ' ' . $doctor["last_name"] . '</h6>
                    </td>
                    <td>
                        <h6>' . $doctor["title"] . '</h6>
                    </td>
                </div>                      
            </div>
        ';
    }
?>
