<?php 
    
    session_start(); // Start session
    require_once 'config.php';

    // Patch XSS
    $idAppointment = htmlspecialchars($_GET['idAppointment']);

    $sqlQuery = "DELETE FROM appointment WHERE id = $idAppointment";
    $stm = $bdd->prepare($sqlQuery);
    $stm->execute();
            
    header('Location: my_appointments.php'); die();
