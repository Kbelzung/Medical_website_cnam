<?php 
    
    session_start(); // Start session
    require_once 'config.php';

    // Patch XSS
    $idDoctor = htmlspecialchars($_POST['idDoctor']);
    $date = htmlspecialchars($_POST['date']);
    $hour = htmlspecialchars($_POST['hour']);
    if(isset($_POST['checkbox_first_appointment']) && $_POST['checkbox_first_appointment'] == 'Yes') {
        $checkbox_first_appointment = 1;
    }
    else {
        $checkbox_first_appointment = 0;
    }
    $select_reason = htmlspecialchars($_POST['select_reason']);
    $textarea_note = htmlspecialchars($_POST['textarea_note']);
    
    if(!empty($idDoctor) && !empty($date) && !empty($hour) && !empty($idDoctor) && !empty($select_reason)) {

        $sqlQuery = "SELECT id FROM appointment WHERE doctor_id = $idDoctor AND date = $date AND time = $hour";
        $stm = $bdd->prepare($sqlQuery);
        $stm->execute();
        $row = $stm->rowCount();
        echo "rowCount = " . $row;

        if($row == 0) {
            $request = "INSERT INTO appointment (doctor_id,user_id,date,time,first_appointment,reason,note) VALUES (?,?,?,?,?,?,?)";
            $stmt= $bdd->prepare($request);
            $stmt->execute([$idDoctor, $_SESSION['id'], $date, $hour,$checkbox_first_appointment, $select_reason, $textarea_note]);

            echo "\nPDO::errorInfo():\n";
            print_r($stmt->errorInfo());
            $stmt->debugDumpParams();
            
            header('Location: ../my_appointments.php'); die();
        }else{ header('Location: ../appointment.php'); die();}
    }else{ header('Location: ../appointment.php'); die();}
