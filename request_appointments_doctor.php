<?php 
    require_once 'config.php';

    if(!empty($_POST['id_doctor']) && !empty($_POST['date']))
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['id_doctor']);
        $password = htmlspecialchars($_POST['date']);
        
        $insert = $bdd->prepare('SELECT user, email, password) VALUES (:email, :password)');
        
