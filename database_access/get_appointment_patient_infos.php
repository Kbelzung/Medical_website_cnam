<?php
    try{
        $mysqlClient = new PDO('mysql:host=localhost;dbname=medical_website_cnam;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

    $idDoctor = $_GET['idDoctor'];
    $date = $_GET['year'] . '-' . $_GET['month'] . '-' . $_GET['day'];
    $hour = $_GET['hour'];

    $sqlQuery = "SELECT * FROM appointment INNER JOIN user WHERE appointment.user_id = user.id AND doctor_id = :idDoctor AND date = :date AND time = :hour";

    $statement = $mysqlClient->prepare($sqlQuery);
    $statement->execute([
        'idDoctor' => $idDoctor,
        'date' =>  $date,
        'hour' =>  $hour
    ]);

    $times = json_encode($statement->fetchAll(PDO::FETCH_ASSOC));
    echo $times;
?>
