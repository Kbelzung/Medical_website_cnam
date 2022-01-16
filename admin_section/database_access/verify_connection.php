<?php 
    session_start();
    require_once('config.php');
   // if not connected with the session, we redirect
    if (!isset($_SESSION['loggedin']) || !isset($_SESSION['isAdmin'])){
        header('Location:../login.php');
        die();
    }
?>