<?php include('database_access/verify_connection.php'); ?>
<!doctype html>
<html>
    <head>
        <title>Mes rendez-vous</title>
        <link rel="stylesheet" href="css/my_appointments.css">
    </head>
    <body>
        <?php include('header_connected.php'); ?>

        <section class="main-content">
            <div class="container">
                <h1>Mes rendez-vous</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Docteur</th>
                            <th>Téléphone</th>
                            <th>Mail</th>
                            <th>Annuler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include('database_access/get_list_appointment.php'); ?>
                    </tbody>
                </table>
            </div>
	    </section>
    </body>
    <script src="js/my_appointments.js"></script>
</html>
