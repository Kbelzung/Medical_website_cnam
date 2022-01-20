<html>
<head>
<link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="css/menu.css">
  <title>Sign in</title>
</head>
<body>
    <?php include('menu_not_connected.php'); ?>
    <div id="container">
        <?php include('database_access/error_messages.php'); ?>

        <div class="container_form">
            <form action="database_access/add_user.php" method="post">
                <div class="header">
                    <h3>Formulaire d'enregistrement</h3>
                    <p>S'enregistrer sur le site</p>
                </div>

                <label for="fname">Prénom</label>
                <input type="text" id="fname" name="firstname" required="required">

                <label for="lname">Nom de famille</label>
                <input type="text" id="lname" name="lastname" required="required">

                <label for="phone">Téléphone</label>
                <input type="tel" id="phone" name="phone">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required="required">

                <label for="psw">Mot de passe</label>
                <input type="password" name="password" required>

                <label for="psw-repeat">Répéter votre mot de passe</label>
                <input type="password" name="password_retype" required>

                <input type="submit" value="Valider">
            </form>
        </div>
    </div>
</body>
</html>