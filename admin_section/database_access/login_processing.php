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
        $check = $bdd->prepare('SELECT id, email, password FROM admin WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        if($row > 0)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                if(password_verify($password, $data['password']))
                {
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['isAdmin'] = TRUE;
                    $_SESSION['email'] = $data['email'] ;
                    $_SESSION['id'] = $data['id'];
                    header('Location: ../modify_doctors');
                    die();
                }else{ header('Location: ../?login_err=password'); die(); }
            }else{ header('Location: ../?login_err=email'); die(); }
        }else{ header('Location: ../?login_err=already'); die(); }
    }else{ header('Location: ../?login_err=already'); die();}
