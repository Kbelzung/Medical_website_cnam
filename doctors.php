<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <title>Mes rendez-vous</title>
        <link rel="stylesheet" href="css/doctors.css">
        <link rel="stylesheet" href="css/menu.css">
    </head>
    <body>
    <?php 
            require_once 'database_access/config.php';
           // if not connected with the session, we redirect
            if(!isset($_SESSION['loggedin'])){
                include('menu_not_connected.php'); 
            }
            else {
                include('menu_connected.php'); 
            }
    ?>

    <h1> EQUIPE MEDICALE </h1>
    <div id=container>
        <?php include('database_access/get_list_doctors.php'); ?>
    </div>

    </body>
    <script src="js/my_appointments.js"></script>
</html>
