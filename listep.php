<?php
include ('./config/connection.php');

// On récupère tout le contenu de la table
$reponse = $bdd->query('SELECT * FROM plat');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
<p>Le plat:

    <?php echo $donnees['nom']; ?><br/>
    Prix:
    <?php echo $donnees['prix']; ?>
    Euros<br/></em>
    <?php echo "<a href='deletePlat.php?id=".$donnees['id']."'><input type='submit' value='Supprimer' class='buton' name='idPlat'></a>";
     ?>
     <?php echo "<a href='modifp.php?id=".$donnees['id']."'><input type='submit' value='Modifier' class='buton' name='idPlat'></a>";
      ?>
</p>
<?php
}
?>
