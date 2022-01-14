<?php
    include('config.php');

    $sqlQuery = "SELECT id, first_name, last_name, title, photo_path FROM doctor ORDER BY last_name";
    $statement = $bdd->prepare($sqlQuery);
    $statement->execute();
    
    $doctors = $statement->fetchAll(PDO::FETCH_ASSOC);

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
?>