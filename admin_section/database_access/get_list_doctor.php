<?php
    include('config.php');

    $sqlQuery = "SELECT * FROM doctor ORDER BY last_name";
    $statement = $bdd->prepare($sqlQuery);
    $statement->execute();
    
    $doctors = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($doctors as $doctor) {
    echo '
            <tr class ="doctor_card">
                <td>
                    <h6 >' . $doctor["first_name"] . ' ' . $doctor["last_name"] . '</h6>
                </td>
                <td>
                    <h6>' . $doctor["title"] . '</h6>
                </td>
                <td>
                    <h6>' . $doctor["email"] . '</h6>
                </td>
                <td>
                    <h6>' . $doctor["phone"] . '</h6>
                </td>
                <td>
                    <a href="modify_doctor.php?id=' . $doctor["id"] . '"><button>Modifier</button></a>
                    <a href="database_access/delete_doctor.php?id=' . $doctor["id"] . '"><button>Supprimer</button></a>
                </td>
            </tr>
        ';
    }
?>