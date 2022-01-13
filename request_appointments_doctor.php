<?php
    try{
        $mysqlClient = new PDO('mysql:host=localhost;dbname=medical_website_cnam;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

    $idDoctor = $_GET['idDoctor'];
    $date = $_GET['year'] . '-' . $_GET['month'] . '-' . $_GET['day'];

    $sqlQuery = "SELECT time FROM appointment WHERE doctor_id = :idDoctor AND date = :date";

    $statement = $mysqlClient->prepare($sqlQuery);
    $statement->execute([
        'idDoctor' => $idDoctor,
        'date' =>  $date
    ]);

    $times = json_encode($statement->fetchAll(PDO::FETCH_ASSOC));
    echo $times;
?>
