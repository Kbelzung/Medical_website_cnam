<?php include('database_access/verify_connection.php'); ?>
<!doctype html>
<html>
    <head>
        <title>modify users</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/modify_doctors.css">
    </head>
    <body>
        <?php include('menu.php'); ?>
        <div id=container>
            <div id="doctors_list">
                <table class="table">
                    <tbody>
                        <?php include('database_access/get_list_doctor.php'); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>