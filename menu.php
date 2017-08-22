<?php

include ('./config/connection.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css"/>
    <title>Menu</title>
  </head>
  <body>
    <header class="menu1">
           <?php
              include("includes/menu1.php");
             ?>
           </div>
  </header>
    <h1 class="accueil">Menus</h1>
    <div class="menu">
    <form method="POST" action="listemenus.php">
    <center>
    <input type="text" name="nom" size="20" value="nom" maxlength="35">
    <input type="text" name="prix" size="20" value="euros" maxlength="35"><br>
      <?php
      // On récupère tout le contenu de la table
      $reponse = $bdd->query('SELECT * FROM plat');
      // On affiche chaque entrée une à une
      while ($donnees = $reponse->fetch())
      {
      ?>
      <input type="checkbox" name="plat[]" id="cbox" value="<?php echo $donnees['id']; ?>"><?php echo $donnees['nom']; ?>

      <?php
      }
      ?>
    <input type="submit" value="Envoyer" name="envoyer">


  <!-- <div class="case">
      <label><input type="checkbox" id="cbox1" value="checkbox1"><img src="img/tapas.jpg" width="200px"height="100px"/></label>
      <label><input type="checkbox" id="cbox2" value="checkbox2"><img src="img/fruitmer.jpg" width="200px"height="100px"/></label>
      <label><input type="checkbox" id="cbox3" value="checkbox3"><img src="img/lasagne.jpg" width="200px"height="100px"/></label>
      <label><input type="checkbox" id="cbox4" value="checkbox4"><img src="img/carbo.jpeg" width="200px"height="100px"/></label>
      <input type="submit" value="Envoyer" name="envoyer">
    </center>
    </form>
  </div> -->
</div>
  </body>
</html>
