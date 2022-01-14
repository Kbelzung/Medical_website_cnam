<?php include('verify_connection.php'); ?>
<!doctype html>
<html>
    <head>
        <title>Mes rendez-vous</title>
        <link rel="stylesheet" href="css/my_appointments.css">
    </head>
    <body>
        <?php include('header.php'); ?>

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
                        <tr>
                            <td>
                                <h6 >06:00 PM</h6>
                                <small>2 Feb 2021</small>
                            </td>
                            <td>
                                <h6>Dr. Ananth</h6>
                            </td>
                            <td>
                                <h6>+91 9876543215</h6>
                            </td>
                            <td>
                                <h6>Docteur1@mail.com</h6>
                            </td>
                            <td>
                                <button id="validation" type="submit">X</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h6 >06:00 PM</h6>
                                <small>2 Feb 2021</small>
                            </td>
                            <td>
                                <h6>Dr. Ananth</h6>
                            </td>
                            <td>
                                <h6>+91 9876543215</h6>
                            </td>
                            <td>
                                <h6>Docteur1@mail.com</h6>
                            </td>
                            <td>
                                <button id="validation" type="submit">X</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
	    </section>
    </body>
</html>
