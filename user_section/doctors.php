<?php include('database_access/verify_connection.php'); ?>
<!doctype html>
<html>
    <head>
        <title>Mes rendez-vous</title>
        <link rel="stylesheet" href="css/my_appointments.css">
    </head>
    <body>
    <?php 
        require_once 'database_access/config.php';
        // if not connected with the session, we redirect
        if(!isset($_SESSION['loggedin'])) {
            include('menu_not_connected.php'); 
        }
        else {
            include('menu_connected.php'); 
        }
    ?>
    </body>
    <script src="js/my_appointments.js"></script>
</html>
