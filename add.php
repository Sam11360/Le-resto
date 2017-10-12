<?php

include ('./config/connection.php');
$req = $bdd->prepare('INSERT INTO croquette (nom, prix) VALUES(?, ?)');
$req->execute(array($_POST['nom'], $_POST['prix']));
?>




<?php

 header('Location: croquette.php');

$req->closeCursor(); // Termine le traitement de la requête
echo 'Croquette ajouté';



?>
