<?php

include ('./config/connection.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css"/>
    <title>Colis</title>
  </head>
  <body>
    <header class="menu1">
      <?php include("includes/menu1.php");?>
      <div class="menuResp">
        <?php
           include("includes/menu.php"); ?>
      </div>
    </header>

    <h1 class="accueil">Créer les Colis</h1>
     <div class="chiotcolis">
      <div class="chiot">
      <img id="chiot" src="img/minibackgr.jpg" alt="chiot">
      </div>
    <div class="colis">
      <form class="formColis" method="POST" action="addColis.php">
     <label>Nom: </label><input type="text" name="nom" size="20" value="nom" maxlength="35"></br>
     <label>Prix: </label><input type="text" name="prix" size="20" value="euros" maxlength="35">

      <?php
      // On récupère tout le contenu de la table
      $reponse = $bdd->query('SELECT * FROM croquette');
      // On affiche chaque entrée une à une
      while ($donnees = $reponse->fetch())
      {

      ?>
      <div><input type="checkbox" name="croquette[]" id="cbox" value="<?php echo $donnees['id']; ?>"><label><?php echo $donnees['nom']; ?></label></div>

      <?php
      }
      ?>
    </br>
    <input type="submit" value="Envoyer" name="envoyer">

    </form>
  </div>
</div>
<div class="footer">
    <?php
       include("includes/footer.php");
      ?>
  </body>
</html>
