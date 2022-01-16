<?php 
    require_once 'config.php';

    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        // Patch XSS
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $phone = htmlspecialchars($_POST['phone']);

        // if user exist
        $check = $bdd->prepare('SELECT email FROM user WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); //transform every mail to lower for verification
        
        // If request > 0, then the user already exist
        if($row == 0){ 
            if(strlen($email) <= 100){ // check email size
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // validate mail format
                    if($password === $password_retype){

                        // hash with Bcrypt with a cost of 12
                        $cost = ['cost' => 12];
                        $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                        $insert = $bdd->prepare('INSERT INTO user(email, password, first_name, last_name, phone) VALUES(:email, :password, :first_name, :last_name, :phone)');
                        
                        $insert->execute(array(
                            'email' => $email,
                            'password' => $password,
                            'first_name' => $firstname,
                            'last_name' => $lastname,
                            'phone' => $phone
                        ));
                        
                        // redirect with a success message
                        header('Location: ../login.php');
                        die();
                    }else{ header('Location: ../signup.php?reg_err=password'); die();}
                }else{ header('Location: ../signup.php?reg_err=email'); die();}
            }else{ header('Location: ../signup.php?reg_err=email_length'); die();}
        }else{ header('Location: ../signup.php?reg_err=already'); die();}
    }else{ header('Location: ../signup.php?reg_err=empty_inputs'); die();}