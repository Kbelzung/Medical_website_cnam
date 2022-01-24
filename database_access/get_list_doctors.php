<?php
    include('config.php');

    $sqlQuery = "SELECT * FROM doctor ORDER BY last_name";
    $statement = $bdd->prepare($sqlQuery);
    $statement->execute();
    
    $doctors = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($doctors as $key => $doctor){
    
        if($doctor["photo_name"] == ""){
            $photo_doctor_name = "default.png";
        }
        else {
            $photo_doctor_name = $doctor["photo_name"];
        }

        if ($key % 3 == 0) {
            echo '<div class = "row">';
        }

        echo' 
            <div class="element">
                <img src="../resources/photos/photos_doctors/' . $photo_doctor_name . '"></img>
                <div class="infos">
                    <h3>' . $doctor["first_name"] . ' ' . $doctor["last_name"] . '</h3>
                    <p>' . $doctor["title"] . '</p>
                    <div class="contact-info">
                        <p><img class="icons" src="resources/phone.svg"></img>' . $doctor["phone"] . '</p>
                        <p><img class="icons" src="resources/newsletter.svg"></img>' . $doctor["email"] . '</p>
                    </div>
                </div>
            </div>
        ';

        if ($key % 3 == 2) {
            echo '</div>';
        }
    }




?>