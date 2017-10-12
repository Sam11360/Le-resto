<?php
session_start();
    // connexion à la base de données
  require_once'connection.php';

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    // $usersname = mysqli_real_escape_string($db,htmlspecialchars($_POST['usersname']));
    // $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));

      $pseudo=$_POST['username'];
      $password=$_POST['password'];

//on va chercher et récup en base
    $req=$bdd->query('SELECT * FROM users WHERE username="'.$pseudo.'" ');
    $user=$req->fetch();

    //on recup les données de la Table
    $db_username=$user['username'];
    $db_password=$user['password'];

    if( ($pseudo==$db_username) && (password_verify($password , $db_password) ))
    {
        $_SESSION['admin']="ok";
           header('Location:http://localhost/boutiqueCroquettes/accueil.php');
        }
        else
        {
           header('Location:http://localhost/boutiqueCroquettes/index.php'); // utilisateur ou mot de passe incorrect
        }
