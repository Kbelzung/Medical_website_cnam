<?php include('verify_connection.php'); ?>
<!doctype html>
<html>
    <head>
        <title>Prendre rendez-vous</title>
        <link rel="stylesheet" href="css/appointment.css">
    </head>
    <body>
        <?php include('header.php'); ?>
        <div id=wrapper_large>
            <?php include('calendar.php'); ?>
        </div>
        
        <div id=wrapper_center>
                <label for="checkbox_first_appointment">Premier rendez-vous ?</label>
                <input type="checkbox" id="checkbox_first_appointment" name="scales">

                <label for="select_reason">Motif de rendez-vous:</label>
                <select name="select_reason" id="select_reason">
                    <option value="">--Choisir un motif--</option>
                    <option value="value1">Consultation de médecine générale</option>
                    <option value="value2">Renouvellement de traitement</option>
                    <option value="value3">Vaccination anti-covid</option>
                    <option value="value4">Bilan de santé</option>
                </select>

                <label for="textarea_note">Observation:</label>
                <textarea id="textarea_note" name="textarea_note" rows="5" cols="33"></textarea>
        </div>

        <button id="validation">Valider</button>
    </body>
</html>