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
                <form action="database_access/update_doctor.php">

                    <?php
                        include('database_access/config.php');

                        if($_GET['id'] != null){
                            // Patch XSS
                            $id = htmlspecialchars($_GET['id']);
                            $sqlQuery = "SELECT * FROM doctor WHERE id = $id";
                            $statement = $bdd->prepare($sqlQuery);
                            $statement->execute();

                            $doctor = $statement->fetch(PDO::FETCH_ASSOC);

                            echo '
                                    <input type="hidden" name="id" value="' . $_GET['id'] . '">

                                    <label for="fname">Prénom</label>
                                    <input type="text" id="fname" name="firstname" required="required" value="' . $doctor["first_name"] . '">

                                    <label for="lname">Nom de famille</label>
                                    <input type="text" id="lname" name="lastname" required="required" value="' . $doctor["last_name"] . '">

                                    <label for="doctor_type">Spécialité</label>
                                    <input type="text" id="doctor_type" name="doctor_type" required="required" value="' . $doctor["title"] . '">

                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" required="required" value="' . $doctor["email"] . '">

                                    <label for="phone">Téléphone</label>
                                    <input type="tel" id="phone" name="phone" required="required" value="' . $doctor["phone"] . '">

                                    <label for="presentation">Présentation</label>
                                    <textarea id="presentation" name="presentation" style="height:200px" required="required">' . $doctor["presentation"] . '</textarea>
                                ';
                            
                        }
                    ?>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>
</html>
