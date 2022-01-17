<?php include('database_access/verify_connection.php'); ?>
<!doctype html>
<html>
    <head>
        <title>modify users</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/add_doctors.css">
    </head>
    <body>
        <?php include('menu.php'); ?>
        <div id=container>
            <div class="container_form">
                <form action="database_access/add_doctor_processing.php">

                    <div class="header">
                        <h3>Enregistrer un nouveau docteur</h3>
                    </div>

                    <label for="fname">Prénom</label>
                    <input type="text" id="fname" name="firstname" required="required">

                    <label for="lname">Nom de famille</label>
                    <input type="text" id="lname" name="lastname" required="required">

                    <label for="doctor_type">Spécialité</label>
                    <input type="text" id="doctor_type" name="doctor_type" required="required">

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required="required">

                    <label for="phone">Téléphone</label>
                    <input type="tel" id="phone" name="phone" required="required">

                    <label for="presentation">Présentation</label>
                    <textarea id="presentation" name="presentation" style="height:200px" required="required"></textarea>

                    <input type="submit" value="Valider">
                </form>
            </div>
        </div>
    </body>
</html>