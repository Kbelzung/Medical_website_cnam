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
        <title>Administration</title>
        <link rel="stylesheet" href="css/administration.css">
    </head>
    <body>
        <?php include('header.php'); ?>
    </body>
</html>