<?php
include ('./config/connection.php');

$croquette = $_GET['id'];
echo $croquette;

// On récupère tout le contenu de la table
$reponse = $bdd->query('DELETE FROM `croquette` WHERE id ="'.$croquette.'"');


header('Location: listeCroquette.php');


?>
