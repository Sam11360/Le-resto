<?php

include ('./config/connection.php');

$req = $bdd->prepare('INSERT INTO menu (nom, prix) VALUES(?, ?)');
$resp = $req->execute(array($_POST['nom'], $_POST['prix']));
// On récupère tout le contenu de la table menu
// $id_plat = $req->lastInsertId();

$idmenu = $bdd->lastInsertId();

$plats = $_POST['plat'];

  foreach($plats as $plat)
    {
        $reponse = $bdd->prepare('INSERT INTO plat_menu(id_menu, id_plat)VALUES(:idmenu,:idplat)');
        $reponse->execute(array(
          'idmenu' => $idmenu,
          'idplat' => $plat,
        ));
    }



//On affiche chaque entrée une à une
// while ($donnees = $reponse->fetch())
// {
// }
// $menu = array('nom', 'prix', 'plat');
//     foreach($idmenu as $idplat)
//     {
//         echo $idmenu;
//     }
?>



<?php
// }
$reponse->closeCursor(); // Termine le traitement de la requête
?>
