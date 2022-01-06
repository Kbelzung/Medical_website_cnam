<html>
<head>
  <link rel="stylesheet" href="css/signup.css">
  <title>Sign in</title>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="wrap">
        <?php 
            if(isset($_GET['reg_err']))
            {
                $err = htmlspecialchars($_GET['reg_err']);

                switch($err)
                {
                    case 'success':
                    ?>
                        <div class="alert">
                            Inscription réussie !
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
        <form class="login" action="signup_processing.php" method="post">
            <div class="header">
                <h3>Formulaire d'enregistrement</h3>
                <p>S'enregistrer sur le site</p>
            </div>
            <div class="form">
                <input type="email" name="email" class="input" placeholder="Email" required="required" autocomplete="off">
            </div>
            <div class="form">
            <input type="password" name="password" class="input" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form">
            <input type="password" name="password_retype" class="input" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form">
                <button class="button" type="submit">S'enregistrer</button>
            </div>
        </form>
    </div>
</body>
</html>