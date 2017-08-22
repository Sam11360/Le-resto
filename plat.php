<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="index.css"/>
    <title>Plats</title>
  </head>
  <body>
    <header class="menu1">
           <?php
              include("includes/menu1.php");
             ?>
           </div>
  </header>
    <h1 class="accueil">Plats</h1>
    <div class="plat">
    <form method="POST" action="add.php">
    <center>
    <input type="text" name="nom" size="20" value="nom" maxlength="35">
    <input type="text" name="prix" size="20" value="euros" maxlength="35"><br>
    <input type="file" name="image"><br>
    <input type="submit" value="Envoyer" name="envoyer">
    </center>
    </form>
  </div>

  </body>
</html>
