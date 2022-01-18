<html>
<head>
  <link rel="stylesheet" href="css/login.css">
  <title>Connexion</title>
</head>
<body>
    <?php include('menu_not_connected.php'); ?>
    <div class="wrap">
    <?php 
        include('error_messages.php');
        ?> 
        <form class="login" action="database_access/login_processing.php" method="post">
            <div class="header">
                <h3>Connexion</h3>
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