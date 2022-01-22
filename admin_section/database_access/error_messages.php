<?php 
    if(isset($_GET['_err'])) {

        $err = htmlspecialchars($_GET['_err']);

        switch($err)
        { 
            case 'success':
            ?>
                <div class="alert">
                    Inscription réussie !
                </div>
            <?php
            break;

            case 'mail_not_validated':
            ?>
                <div class="alert">
                    Votre e-mail n'as pas été validé, veuillez vérifier votre boîte mail.
                </div>
            <?php
            break;

            case 'empty_inputs':
            ?>
                <div class="alert">
                    Tous les champs non pas été remplis
                </div>
            <?php
            break;

            case 'wrong_password':
            ?>
                <div class="alert">
                    Mauvais mot de passe
                </div>
            <?php
            break;

            case 'email_format':
            ?>
                <div class="alert">
                    Format d'e-mail non valide
                </div>
            <?php
            break;

            case 'email_length':
            ?>
                <div class="alert">
                    Email trop long
                </div>
            <?php 
            break;

            case 'email_already_used':
            ?>
                <div class="alert">
                    Email déjà utilisé
                </div>
            <?php 

            case 'file_err':
            ?>
                <div class="alert">
                    Erreur fichier
                </div>
            <?php 

            case 'file_type':
                ?>
                    <div class="alert">
                        Mauvais type de fichier
                    </div>
                <?php 

            case 'file_size':
                ?>
                    <div class="alert">
                    Erreur de l'image uploadée
                    </div>
                <?php 
    
        }
    }
?>