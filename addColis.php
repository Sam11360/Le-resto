<?php

require_once('./config/connection.php');

$req = $bdd->prepare('INSERT INTO colis (nom, prix) VALUES(?, ?)');
$resp = $req->execute(array($_POST['nom'], $_POST['prix']));
// On récupère tout le contenu de la table colis
// $id_croquette = $req->lastInsertId();

$idcolis = $bdd->lastInsertId();

$croquettes = $_POST['croquette'];

  foreach($croquettes as $croquette)
    {
        $reponse = $bdd->prepare('INSERT INTO croquette_colis(id_croquette,id_colis)VALUES(:idcroquette,:idcolis)');
        $reponse->execute(array(
          'idcroquette' => $croquette,
          'idcolis' => $idcolis
        ));
    }



//On affiche chaque entrée une à une
// while ($donnees = $reponse->fetch())
// {
// }
// $menu = array('nom', 'prix', 'croquette');
//     foreach($idcolis as $idcroquette)
//     {
//         echo $idcolis;
//     }
?>



<?php
// }
$reponse->closeCursor(); // Termine le traitement de la requête
header('Location:listeColis.php');
?>
