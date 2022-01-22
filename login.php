<html>
<head>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/menu.css">
  <title>Connexion</title>
</head>
<body>
    <?php include('menu_not_connected.php'); ?>
    <div class="wrap">
        <form class="login" action="database_access/login_processing" method="post">
            <div class="header">
                <h3>Connexion</h3>
                <p>Se connecter à votre espace</p>
            </div>
            <div class="form">
                <input type="email" name="email" class="input" placeholder="Email" required="required">
            </div>
            <div class="form">
                <input type="password" name="password" class="input" placeholder="Mot de passe" required="required">
            </div>
            <div class="form">
                <button class="button" type="submit">Login</button>
            </div>
            <?php include('database_access/error_messages.php');?> 
            <div class="footer">
                Pas encore de compte ? <a href="signup">S'enregistrer</a>
            </div>
        </form>
    </div>
</body>
</html>