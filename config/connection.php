<?php
include ('parametres.php');
try
{
    // On se connecte à MySQL
    $bdd = new PDO("mysql:host=$serverName;dbname=$dbname;charset=utf8", $userName, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

?>
