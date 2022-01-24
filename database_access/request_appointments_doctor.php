<?php
    include('config.php');

    $idDoctor = $_GET['idDoctor'];
    $date = $_GET['year'] . '-' . $_GET['month'] . '-' . $_GET['day'];

    $sqlQuery = "SELECT time FROM appointment WHERE doctor_id = :idDoctor AND date = :date";

    $statement = $bdd->prepare($sqlQuery);
    $statement->execute([
        'idDoctor' => $idDoctor,
        'date' =>  $date
    ]);

    $times = json_encode($statement->fetchAll(PDO::FETCH_ASSOC));
    echo $times;
?>
