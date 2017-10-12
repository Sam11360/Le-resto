<?php
session_start();

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css"/>
    <title>login</title>
  </head>
  <body>
    <?php
      require_once'./config/connection.php';
     ?>
    <div class="login">
      <form action="config/verification.php" method="post">
           <h1>Login</h1>
           <label><b>Pseudo</b></label>
           <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required></br>
           <label><b>Mot de passe</b></label>
           <input type="password" placeholder="Entrer le mot de passe" name="password" required>
           <input type="submit" id='submit' value='LOGIN' >
       </form>
       <!-- <div class="chiot">
         <img id="chiot" src="img/minibackgr.jpg" alt="chiot">
       </div> -->
    </div>
    <?php
      $req = $bdd->query('SELECT*FROM users');
      $user = $req->fetch();

     ?>
  </body>
</html>
