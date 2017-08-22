<?php
include ('./config/connection.php');

$plat = $_GET['id'];
echo $plat;

// On récupère tout le contenu de la table
// $reponse = $bdd->query('DELETE FROM `plat` WHERE id ="'.$plat.'"');
// $reponse = $bdd->query('UPDATE FROM `plat` WHERE id ="'.$plat.'"');


// On exécute la requête



  // formulaire permettant de modifier un plat

  echo "<div class='plat'>

    <form method='post' action='traitementModifP.php?id=".$plat."' enctype='multipart/form-data'>

      <p>

        <label for='nom'>Modifiez le nom de votre plat :</label>

        <input type='text' name='nom' id='nom' placeholder='Ex : Pizza fromages' size='30' maxlength='30' value='" . $plat. "'/>

        <br />

        <label for='prix'>Modifiez son prix en euros :</label>

        <input type='text' name='prix' id='prix' placeholder='Ex : 14.99' size='30' maxlength='5' value='" . $plat . "'/>

        <br />

        <label for='image'>Changez la photo (max 1Mo) :</label>

        <input type='hidden' name='MAX_FILE_SIZE' value='1048576' />

        <input type='file' name='image' value='' id='image'>

      </p>

      <input type='submit' name='envoyer' value='Envoyer' class='button'>

    </form>

  </div>";





// $menu = $_GET['id'];
// echo $menu;
//
// $reponse = $bdd->query('DELETE FROM `menu` WHERE id ="'.$menu.'"');

?>
<!-- SELECT *  FROM `plat_menu` LEFT JOIN plat ON plat_menu.id_plat = plat.id WHERE `id_menu` = 73  -->
