<?php 
    require_once 'config.php';

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
                    $fileNameNew = "1." . $fileActualExt;
                    $fileDestination = '..\\photos_doctors\\' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                } else { echo "Le fichier est trop grand."; }
            } else { echo "Erreur de l'image uploadée."; }
        } else { echo "Mauvais type de fichier."; }
    } else { echo "Pas de fichier."; }
?>