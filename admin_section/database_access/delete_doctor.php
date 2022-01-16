<?php 
    
    session_start(); // Start session
    require_once 'config.php';

    if($_GET['id'] != null){
        // Patch XSS
        $id = htmlspecialchars($_GET['id']);
    
        $sqlQuery = "DELETE FROM appointment WHERE doctor_id = $id";
        $stm = $bdd->prepare($sqlQuery);
        $stm->execute();

        $sqlQuery = "DELETE FROM doctor WHERE id = $id";
        $stm = $bdd->prepare($sqlQuery);
        $stm->execute();
    }
    header('Location: ../modify_doctors.php'); die();
