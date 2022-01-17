<?php
    require_once 'config.php';

    if(!empty($_GET['id']) && !empty($_GET['user_key'])) {
            
        $id = htmlspecialchars($_GET['id']);
        $user_key = htmlspecialchars($_GET['user_key']);
        
        $check = $bdd->prepare('SELECT id, user_key, mail_validated FROM user WHERE id = ?');
        $check->execute(array($id));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        // if user exist
        if($row > 0) {
            // if the mail is not already validated
            if($data["mail_validated"] == 0){
                // if the key send is the same as the one in the database
                if($user_key == $data["user_key"]) {
                    $insert = $bdd->prepare('UPDATE user SET mail_validated = :mail_validated WHERE id = :id');
                    $insert->execute(array(
                        'mail_validated' => 1,
                        'id' => $_GET['id']
                    ));
                    echo 'L\' adresse mail est validée.';
                } else { echo 'Cet utilisateur ne peut pas être validé.';}
            } else { echo 'Cet utilisateur à déjà été validé.';}
        }
    }
    




?>