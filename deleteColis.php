<?php
include ('./config/connection.php');

$colis = $_GET['id'];
echo $colis;

// On supprime les entrées de bdd pour le colis demander
$reponse = $bdd->query('DELETE FROM `croquette_colis` WHERE id_colis ="'.$colis.'"');


// On récupère tout le contenu de la table
$reponse = $bdd->query('DELETE FROM `colis` WHERE id ="'.$colis.'"');

header('Location: http://localhost/boutiqueCroquettes/listeColis.php');


// $colis = $_GET['id'];
// echo $colis;
//
// $reponse = $bdd->query('DELETE FROM `menu` WHERE id ="'.$colis.'"');

?>
<!-- SELECT *  FROM `croquette_colis` LEFT JOIN plat ON croquette_colis.id_croquette = croquette.id WHERE `id_colis` = 73  -->
