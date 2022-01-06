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
        <title>Prendre rendez-vous</title>
        <link rel="stylesheet" href="css/appointment.css">
    </head>
    <body>
        <?php include('header.php'); ?>
        <div id=wrapper>
            <?php include('calendar.php'); ?>
        </div>
        
    </body>
</html>