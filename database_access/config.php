<?php 
try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=medical_website_cnam;charset=utf8", "root", "");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
