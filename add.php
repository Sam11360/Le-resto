<?php

include ('./config/connection.php');
$req = $bdd->prepare('INSERT INTO plat (nom, prix, image) VALUES(?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prix'], $_POST['image']));
?>




<?php

 header('Location: plat.php');

$req->closeCursor(); // Termine le traitement de la requête
echo 'Plat ajouté';



?>
