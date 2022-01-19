<?php include('database_access/verify_connection.php'); ?>
<!doctype html>
<html>
    <head>
        <title>Mes rendez-vous</title>
        <link rel="stylesheet" href="css/doctors.css">
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

    <h1> EQUIPE MEDICALE </h1>
    <div id=container>
        <div class="row">
            <div class="element">
                <img src="\admin_section\photos_doctors\team-image2.jpg"></img>
                <div class="infos">
                    <h3>Docteur Strange</h3>
                    <p>Medecin</p>
                    <div class="contact-info">
                        <p><img class="icons" src="resources/phone.svg"></img>0623456789</p>
                        <p><img class="icons" src="resources/newsletter.svg"></img>doctor.strange@marvel.com</p>
                    </div>
                </div>
            </div>
            <div class="element">
                <img src="\admin_section\photos_doctors\team-image2.jpg"></img>
                <div class="infos">
                    <h3>Docteur Strange</h3>
                    <p>Medecin</p>
                    <div class="contact-info">
                        <p><img class="icons" src="resources/phone.svg"></img>0623456789</p>
                        <p><img class="icons" src="resources/newsletter.svg"></img>doctor.strange@marvel.com</p>
                    </div>
                </div>
            </div>         
            <div class="element">
                <img src="\admin_section\photos_doctors\team-image2.jpg"></img>
                <div class="infos">
                    <h3>Docteur Strange</h3>
                    <p>Medecin</p>
                    <div class="contact-info">
                        <p><img class="icons" src="resources/phone.svg"></img>0623456789</p>
                        <p><img class="icons" src="resources/newsletter.svg"></img>doctor.strange@marvel.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="element">
                <img src="\admin_section\photos_doctors\team-image2.jpg"></img>
                <div class="infos">
                    <h3>Docteur Strange</h3>
                    <p>Medecin</p>
                    <div class="contact-info">
                        <p><img class="icons" src="resources/phone.svg"></img>0623456789</p>
                        <p><img class="icons" src="resources/newsletter.svg"></img>doctor.strange@marvel.com</p>
                    </div>
                </div>
            </div>
            <div class="element">
                <img src="\admin_section\photos_doctors\team-image2.jpg"></img>
                <div class="infos">
                    <h3>Docteur Strange</h3>
                    <p>Medecin</p>
                    <div class="contact-info">
                        <p><img class="icons" src="resources/phone.svg"></img>0623456789</p>
                        <p><img class="icons" src="resources/newsletter.svg"></img>doctor.strange@marvel.com</p>
                    </div>
                </div>
            </div>         
        </div>
    </div>


    </body>
    <script src="js/my_appointments.js"></script>
</html>
