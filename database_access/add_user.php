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

                        $user_key = rand(1000000, 9000000);
                        $mail_validated = 0;
                        // hash with Bcrypt with a cost of 12
                        $cost = ['cost' => 12];
                        $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                        $insert = $bdd->prepare('INSERT INTO user(email, password, user_key, mail_validated, first_name, last_name, phone) VALUES(:email, :password, :user_key, :mail_validated, :first_name, :last_name, :phone)');
                        
                        $insert->execute(array(
                            'email' => $email,
                            'password' => $password,
                            'user_key' => $user_key,
                            'mail_validated' => $mail_validated,
                            'first_name' => $firstname,
                            'last_name' => $lastname,
                            'phone' => $phone
                        ));
                        
                        $check = $bdd->prepare('SELECT id FROM user WHERE email = ?');
                        $check->execute(array($email));
                        $data = $check->fetch();

                        include('../PHPMailer/mailConfig.php');

                        $to   = $email;
                        $from = 'cabinet.cnam@gmail.com';
                        $name = 'Cnam';
                        $subj = 'Email de confirmation de compte';
                        $msg = '<a href ="http://medicalwebsitecnam/database_access/verify_mail.php?id=' . $data["id"] . '&user_key=' . $user_key . '">Lien d\'activation de votre e-mail</a>';

                        $error=smtpmailer($to,$from, $name ,$subj, $msg);
                        
                        // redirect with a success message
                        header('Location: ../login');
                        die();
                    }else{ header('Location: ../signup?reg_err=password'); die();}
                }else{ header('Location: ../signup?reg_err=email'); die();}
            }else{ header('Location: ../signup?reg_err=email_length'); die();}
        }else{ header('Location: ../signup?reg_err=already'); die();}
    }else{ header('Location: ../signup?reg_err=empty_inputs'); die();}