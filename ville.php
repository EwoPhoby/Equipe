<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=foot;charset=utf8', 'root', '');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

} ?>
<html>
<head>
  <title>Recherche ville</title>
   <meta charset="utf-8" />

        <link rel="stylesheet" href="style.css" />
</head>

<body>

<!-- Menu de navigation du site -->
<ul class="menu">
  <li><a href="accueil.php">Accueil</a>
  <li><a href="equipe.php">Equipes</a>
  <li><a href="ville.php">Par villes</a>
  <li><a href="joueurs.php">Joueurs</a>
  <li><a href="rencontre.php">Rencontres</a>
</ul>

<!-- Contenu principal -->
<h1>Base de donnees Premier League</h1>


<div class="recherche">
<p>Rechercher club par la ville</p>

<form method="post" class="as" action="">

      <input type="text" id="recherche" name="recherche" placeholder="tapez le nom d'une ville" required>
      <input type = "submit" name="envoi" value = "Envoyer">

</form>

<?php
if(isset($_POST['envoi'])){
$ville = $_POST['recherche'];
$reponse = $bdd->query('SELECT * FROM club WHERE ville LIKE "'.$ville.'%"');

?>
<table>

  

       

  
<?php
while ($donnees = $reponse->fetch())
{  ?><?php
  echo''.$donnees['nom'] . '<br />';
	//echo $donnees['annee_creation'] . '<br />';
  ?>

<?php
}
$reponse->closeCursor();
}
?>
</table>

</div>

</body>
</html>