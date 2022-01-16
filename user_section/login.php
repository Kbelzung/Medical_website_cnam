<html>
<head>
  <link rel="stylesheet" href="css/login.css">
  <title>Connexion</title>
</head>
<body>
    <?php include('header_not_connected.php'); ?>
    <div class="wrap">
    <?php 
        if(isset($_GET['login_err']))
        {
            $err = htmlspecialchars($_GET['login_err']);
            echo $err;
            switch($err)
            {
                case 'password':
                ?>
                    <div class="alert">
                        <strong>Erreur</strong> mot de passe incorrect
                    </div>
                <?php
                break;

                case 'email':
                ?>
                    <div class="alert">
                        <strong>Erreur</strong> email incorrect
                    </div>
                <?php
                break;

                case 'already':
                ?>
                    <div class="alert">
                        <strong>Erreur</strong> compte non existant
                    </div>
                <?php
                break;
            }
        }
        ?> 
        <form class="login" action="database_access/login_processing.php" method="post">
            <div class="header">
                <h3>Formulaire de connexion</h3>
                <p>Se connecter à votre espace</p>
            </div>
            <div class="form">
                <input type="email" name="email" class="input" placeholder="Email">
            </div>
            <div class="form">
                <input type="password" name="password" class="input" placeholder="Mot de passe">
            </div>
            <div class="form">
                <button class="button" type="submit">Login</button>
            </div>
            <div class="footer">
                Pas encore de compte ? <a href="signup.php">S'enregistrer</a>
            </div>
        </form>
    </div>
</body>
</html>