<?php
    include('config.php');

    $sqlQuery = "SELECT appointment.id,time,date,first_name,last_name,phone,email FROM appointment INNER JOIN doctor ON appointment.doctor_id = doctor.id WHERE appointment.user_id =" . $_SESSION['id'] . "";
    
    $statement = $bdd->prepare($sqlQuery);
    $statement->execute();
    
    $appointements = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($appointements as $appointement) {
        echo '
            <tr value=' . $appointement["id"] . '>
                <td>
                    <h6 >' . $appointement["time"] . '</h6>
                    <small>' . $appointement["date"] . '</small>
                </td>
                <td>
                    <h6>' . $appointement["first_name"] . ' ' . $appointement["last_name"] . '</h6>
                </td>
                <td>
                    <h6>' . $appointement["phone"] . '</h6>
                </td>
                <td>
                    <h6>' . $appointement["email"] . '</h6>
                </td>
                <td>
                    <button class="validation" type="submit">X</button>
                </td>
            </tr>
        ';
    }
?>