<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="index.css"/>
    <title>Croquette</title>
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
  </header>
    <h1 class="accueil">Ajouter des Croquettes</h1>
    <div class="chiotcroq">
      <div class="chiot">
      <img id="chiot" src="img/minibackgr.jpg" alt="chiot">
      </div>
    <div class="croq">
    <form class="formCroq" method="POST" action="add.php">
    <input type="text" name="nom" size="20" placeholder="nom" maxlength="35"></br>
    <input type="text" name="prix" size="20" placeholder="euros" maxlength="35"><br>
    <input type="file" name="image"><br>
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
