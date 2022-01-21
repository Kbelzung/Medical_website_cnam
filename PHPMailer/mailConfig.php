<?php
    require "PHPMailerAutoload.php";
    function smtpmailer($to, $from, $from_name, $subject, $body) {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 

        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;  
        $mail->Username = 'cabinet.cnam@gmail.com';
        $mail->Password = 'NL#7ze6vJ*wpJm';   

        //   $path = 'reseller.pdf';
        //   $mail->AddAttachment($path);

        $mail->From="cabinet.cnam@gmail.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body =  $body;
        $mail->AddAddress($to);
        $mail->IsHTML(true);
        if(!$mail->Send()) {
                $error ="Please try Later, Error Occured while Processing...";
                return $error; 
        }
        else {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }

    function smtpmailerPDF($to, $from, $from_name, $subject, $body, $pathPDF) {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 

        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;  
        $mail->Username = 'cabinet.cnam@gmail.com';
        $mail->Password = 'NL#7ze6vJ*wpJm';   

        $mail->AddAttachment($pathPDF);

        $mail->From="cabinet.cnam@gmail.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body =  $body;
        $mail->AddAddress($to);
        $mail->IsHTML(true);
        if(!$mail->Send()) {
                $error ="Please try Later, Error Occured while Processing...";
                return $error; 
        }
        else {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }