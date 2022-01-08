<?php
try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=medical_website_cnam;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = "SELECT time FROM appointment WHERE doctor_id = 1 AND date = '2022-01-31'";
$statement = $mysqlClient->prepare($sqlQuery);
$statement->execute();
$times = json_encode($statement->fetchAll(PDO::FETCH_ASSOC));
echo $times
?>
