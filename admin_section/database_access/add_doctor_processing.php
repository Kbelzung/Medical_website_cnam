<?php 
    require_once 'config.php';

    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['doctor_type']) && !empty($_POST['email']) && !empty($_POST['phone']))
    {
        // Patch XSS
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $doctor_type = htmlspecialchars($_POST['doctor_type']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        
        if(strlen($email) <= 100){ // check email size
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // validate mail format
                    
                    $insert = $bdd->prepare('INSERT INTO doctor(email, first_name, last_name, title, phone) VALUES(:email, :first_name, :last_name, :title, :phone)');
                    $insert->execute(array(
                        'email' => $email,
                        'first_name' => $firstname,
                        'last_name' => $lastname,
                        'title' => $doctor_type,
                        'phone' => $phone
                    ));

                    $check = $bdd->prepare('SELECT id FROM doctor WHERE email = ?');
                    $check->execute(array($email));
                    $data = $check->fetch();
                    
                    if($_FILES["fileToUpload"]["error"] === 0) {
                        $file = $_FILES['fileToUpload'];
                        $fileName = $_FILES['fileToUpload']['name'];
                        $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
                        $fileSize = $_FILES['fileToUpload']['size'];
                        $fileError = $_FILES['fileToUpload']['error'];
                        $fileType = $_FILES['fileToUpload']['type'];
                
                        $fileExt = explode('.', $fileName);
                        $fileActualExt = strtolower(end($fileExt));
                
                        $allowed = array('jpg','jpeg', 'png');
                
                        if (in_array($fileActualExt, $allowed)) {
                            if ($fileError === 0) {
                                if ($fileSize < 5000000) {  // if above 5mb
                                    $fileNameNew = $data['id'] . "." . $fileActualExt;
                                    
                                    $fileDestination = 'C:\\wamp64\\www\\Medical_website_cnam\\admin_section\\photos_doctors\\' . $fileNameNew;
                                    move_uploaded_file($fileTmpName, $fileDestination);
                                    
                                    $insert = $bdd->prepare('UPDATE doctor SET photo_name = :photo_name WHERE id = :id');
                                    $insert->execute(array(
                                        'photo_name' => $fileNameNew,
                                        'id' => $data['id']
                                    ));
                                } else { echo "Le fichier est trop grand."; }
                            } else { echo "Erreur de l'image uploadée."; }
                        } else { echo "Mauvais type de fichier."; }
                    } else { echo "Pas de fichier."; }
                    
                    //redirect with a success message
                    header('Location: ../modify_doctors');
                    die();
            }else{ header('Location: ../add_doctors?reg_err=email'); die();}
        }else{ header('Location: ../add_doctors?reg_err=email_length'); die();}





    }