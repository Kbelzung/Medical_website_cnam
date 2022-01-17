<?php 
    if(isset($_GET['login_err'])) {

        $err = htmlspecialchars($_GET['login_err']);

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

            case 'password':
            ?>
                <div class="alert">
                    Mot de passe différent
                </div>
            <?php
            break;

            case 'email':
            ?>
                <div class="alert">
                    Email non valide
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

            case 'already':
            ?>
                <div class="alert">
                    Email déjà utilisé
                </div>
            <?php 
        }
    }
?>