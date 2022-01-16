<?php 
    require_once 'config.php';

    if(!empty($_GET['firstname']) && !empty($_GET['lastname']) && !empty($_GET['doctor_type']) && !empty($_GET['email']) && !empty($_GET['phone']) && !empty($_GET['presentation']))
    {
        // Patch XSS
        $firstname = htmlspecialchars($_GET['firstname']);
        $lastname = htmlspecialchars($_GET['lastname']);
        $doctor_type = htmlspecialchars($_GET['doctor_type']);
        $email = htmlspecialchars($_GET['email']);
        $phone = htmlspecialchars($_GET['phone']);
        $presentation = htmlspecialchars($_GET['presentation']);
        
        if(strlen($email) <= 100){ // check email size
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // validate mail format
                    $insert = $bdd->prepare('INSERT INTO doctor(email, first_name, last_name, title, phone, presentation) VALUES(:email, :first_name, :last_name, :title, :phone, :presentation)');
                    $insert->execute(array(
                        'email' => $email,
                        'first_name' => $firstname,
                        'last_name' => $lastname,
                        'title' => $doctor_type,
                        'phone' => $phone,
                        'presentation' => $presentation,
                    ));
                    
                    // redirect with a success message
                    header('Location: ../modify_doctors.php');
                    die();
            }else{ header('Location: ../add_doctors.php?reg_err=email'); die();}
        }else{ header('Location: ../add_doctors.php?reg_err=email_length'); die();}
    }