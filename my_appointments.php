<?php 
    session_start();
    require_once 'config.php';
   // if not connected with the session, we redirect
    if(!isset($_SESSION['loggedin'])){
        header('Location:login.php');
        die();
    }
?>
<!doctype html>
<html>
    <head>
        <title>Mes rendez-vous</title>
        <link rel="stylesheet" href="css/my_appointments.css">
    </head>
    <body>
        <?php include('header.php'); ?>
    </body>
</html>
