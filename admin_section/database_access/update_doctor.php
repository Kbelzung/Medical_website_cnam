<?php 
    require_once 'config.php';

    if(!empty($_GET['id']) && !empty($_GET['firstname']) && !empty($_GET['lastname']) && !empty($_GET['doctor_type']) && !empty($_GET['email']) && !empty($_GET['phone']) && !empty($_GET['presentation'])) {
                // Patch XSS
                $id = htmlspecialchars($_GET['id']);
                $firstname = htmlspecialchars($_GET['firstname']); 
                $lastname = htmlspecialchars($_GET['lastname']);
                $doctor_type = htmlspecialchars($_GET['doctor_type']); 
                $email = htmlspecialchars($_GET['email']);
                $phone = htmlspecialchars($_GET['phone']); 
                $presentation = htmlspecialchars($_GET['presentation']);
             
                // Check if user exist
                $check = $bdd->prepare('SELECT email FROM doctor WHERE id = ?');
                $check->execute(array($id));
                $data = $check->fetch();
                $row = $check->rowCount();
                
                if($row > 0){
                    if(strlen($email) <= 100){ // check email size
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // validate mail format
                                $insert = $bdd->prepare('UPDATE doctor SET email = :email, first_name = :first_name, last_name = :last_name, title = :title, phone = :phone, presentation = :presentation WHERE id = :id');
                                $insert->execute(array(
                                    'email' => $email,
                                    'first_name' => $firstname,
                                    'last_name' => $lastname,
                                    'title' => $doctor_type,
                                    'phone' => $phone,
                                    'presentation' => $presentation,
                                    'id' => $id
                                ));
                                // redirect with a success message
                                header('Location: ../modify_doctors.php');
                                die();
                        }else{ header('Location: ../modify_doctor.php?id=' . $id . '&reg_err=email'); die();}
                    }else{ header('Location: ../modify_doctor.php?id=' . $id . '&reg_err=email_length'); die();}
                }
    }