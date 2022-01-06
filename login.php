<html>

<head>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Sign in</title>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="wrap">
        <form class="login" action="">
            <div class="header">
                <h3>Formulaire de connexion</h3>
                <p>Se connecter à votre espace</p>
            </div>
            <div class="form">
                <input type="login" class="input" placeholder="Identifiant">
            </div>
            <div class="form">
                <input type="password" class="input" placeholder="Mot de passe">
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