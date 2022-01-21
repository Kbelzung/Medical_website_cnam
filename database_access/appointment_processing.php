<?php 
    // reference the Dompdf namespace
    use Dompdf\Dompdf;
    session_start(); // Start session
    require_once 'config.php';

    // Patch XSS
    $idDoctor = htmlspecialchars($_POST['idDoctor']);
    $date = htmlspecialchars($_POST['date']);
    $hour = htmlspecialchars($_POST['hour']);
    if(isset($_POST['checkbox_first_appointment']) && $_POST['checkbox_first_appointment'] == 'Yes') {
        $checkbox_first_appointment = 1;
    }
    else {
        $checkbox_first_appointment = 0;
    }
    $select_reason = htmlspecialchars($_POST['select_reason']);
    $textarea_note = htmlspecialchars($_POST['textarea_note']);
    
    if(!empty($idDoctor) && !empty($date) && !empty($hour) && !empty($idDoctor) && !empty($select_reason)) {

        // check if the appointment already exist
        $sqlQuery = "SELECT id FROM appointment WHERE doctor_id = $idDoctor AND date = $date AND time = $hour";
        $stm = $bdd->prepare($sqlQuery);
        $stm->execute();
        $row = $stm->rowCount();

        if($row == 0) {
            $request = "INSERT INTO appointment (doctor_id,user_id,date,time,first_appointment,reason,note) VALUES (?,?,?,?,?,?,?)";
            $stmt= $bdd->prepare($request);
            $stmt->execute([$idDoctor, $_SESSION['id'], $date, $hour,$checkbox_first_appointment, $select_reason, $textarea_note]);
            
            $id_appointment = $bdd->lastInsertId();
            
            $check = $bdd->prepare('SELECT date, time, note, doctor.first_name, doctor.last_name, title, doctor.phone, doctor.email, user.email as user_mail FROM appointment INNER JOIN doctor ON doctor_id = doctor.id INNER JOIN user ON appointment.user_id = user.id WHERE appointment.id = ?');
            $check->execute(array($id_appointment));
            $data = $check->fetch();
            
            require_once '../dompdf/autoload.inc.php';
            // instantiate and use the dompdf class
            $dompdf = new Dompdf();
            $dompdf->loadHtml('
            <!DOCTYPE html>
                <html>
                    <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                    <style>
                        h1 {
                            text-align: center;
                            padding-bottom: 50px;
                        }

                        p {
                            padding-left: 50px;
                        }
                    </style>
                    </head>
                    <body>
                    <h1>Votre rendez-vous</h1>

                    <p>Votre rendez-vous sera le ' . $data["date"] . ' à ' . $data["time"] . ', avec le docteur  ' . $data["first_name"] . ' ' . $data["last_name"] . ', ' . $data["title"] . '.</p>
                    <p>En cas de problèmes, vous pouvez contacter le Docteur ' . $data["last_name"] . ' au ' . $data["phone"] . ', ou bien sur son mail ' . $data["email"] . '.</p>
                    </br>

                    <p>Votre observation :</p>
                    <p>' . $data["note"] . '</p>

                    </body>
                </html>
            ');

            // (Optional) Setup the paper size and orientation
            $dompdf->setPaper('A4', 'portrait');

            // Render the HTML as PDF
            $dompdf->render();

            $output = $dompdf->output();
            $pathPDF = '../resources/pdf_appointments/' . $id_appointment . '.pdf';
            file_put_contents($pathPDF, $output);

            include('../PHPMailer/mailConfig.php');

            $to   = $data['user_mail'];
            $from = 'cabinet.cnam@gmail.com';
            $name = 'Cnam';
            $subj = 'Rendez-vous médical clinique cnam';
            $msg = 'Veuilez trouver ci-joint votre récapitulatif de rendez-vous';

            $error=smtpmailerPDF($to,$from, $name ,$subj, $msg, $pathPDF);

            header('Location: ../my_appointments'); die();
        }else{ header('Location: ../appointment'); die();}
    }else{ header('Location: ../appointment'); die();}
