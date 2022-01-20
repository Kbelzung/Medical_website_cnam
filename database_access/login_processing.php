<?php 
    
    session_start(); // Start session
    require_once 'config.php';

    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);

        $email = strtolower($email); //format mail to verify it
        
        // Check if user exist
        $check = $bdd->prepare('SELECT * FROM user WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        if($row > 0)
        {
            if(password_verify($password, $data['password']))
            {
                if($data['mail_validated'] == 1)
                {
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['email'] = $data['email'] ;
                    $_SESSION['id'] = $data['id'];
                    header('Location: ../');
                    die();
                }else { header('Location: ../login?login_err=mail_not_validated'); die();}
            }else { header('Location: ../login?login_err=password'); die(); }
        }else { header('Location: ../login?login_err=user_not_exist'); die(); }
    }else { header('Location: ../login?login_err=empty'); die();}
