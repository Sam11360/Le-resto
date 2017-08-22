<?php
include ('./config/connection.php');

$menu = $_GET['id'];
echo $menu;

// On supprime les entrées de bdd pour le menu demander
$reponse = $bdd->query('DELETE FROM `plat_menu` WHERE id_menu ="'.$menu.'"');


// On récupère tout le contenu de la table
$reponse = $bdd->query('DELETE FROM `menu` WHERE id ="'.$menu.'"');

header('Location: listemenus.php');


// $menu = $_GET['id'];
// echo $menu;
//
// $reponse = $bdd->query('DELETE FROM `menu` WHERE id ="'.$menu.'"');

?>
<!-- SELECT *  FROM `plat_menu` LEFT JOIN plat ON plat_menu.id_plat = plat.id WHERE `id_menu` = 73  -->
