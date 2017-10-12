<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <title>liste colis</title>
  </head>
  <body>
    <header class="menu1">
           <?php
              include("includes/menu1.php");
             ?>
           </div>
           <div class="menuResp">
             <?php
                include("includes/menu.php");
               ?>
           </div>
    <p>Les colis:</p>
    <div class="divColis">
    <?php
    include ('./config/connection.php');
    // On récupère tout le contenu de la table
    $reponse = $bdd->query('SELECT * FROM colis');
    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {

      echo "<div id='divColis'>".$donnees['nom']."<p>Prix: ";

       echo $donnees['prix']." "."Euros</p>";

      echo "<p><a href='deleteColis.php?id=".$donnees['id']."'><input type='submit' value='Supprimer' class='buton' name='idCroquette'></a>";
      echo "<a href='modifCroquette.php?id=".$donnees['id']."'><input type='submit' value='Modifier' class='buton' name='idCroquette'></a></p></div>";
    }
      ?>
    </div>
    <div class="footer">
        <?php
           include("includes/footer.php");
          ?>
  </body>
</html>
