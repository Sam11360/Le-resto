<?php
include ('./config/connection.php');

$plat = $_GET['id'];
echo $plat;

// On récupère tout le contenu de la table
$reponse = $bdd->query('DELETE FROM `plat` WHERE id ="'.$plat.'"');


header('Location: listep.php');




// $menu = $_GET['id'];
// echo $menu;
//
// $reponse = $bdd->query('DELETE FROM `menu` WHERE id ="'.$menu.'"');

?>
<!-- SELECT *  FROM `plat_menu` LEFT JOIN plat ON plat_menu.id_plat = plat.id WHERE `id_menu` = 73  -->
