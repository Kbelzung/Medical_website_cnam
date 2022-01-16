<!doctype html>
<html>
    <head>
        <title>Présentation</title>
        <link rel="stylesheet" href="css/presentation.css">
    </head>
    <body>
        <?php 
            session_start();
            require_once 'database_access/config.php';
           // if not connected with the session, we redirect
            if(!isset($_SESSION['loggedin'])){
                include('header_not_connected.php'); 
            }
            else {
                include('header_connected.php'); 
            }
        ?>
    </body>
</html>