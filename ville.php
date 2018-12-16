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
  <title>Ma première page avec du style</title>
   <meta charset="utf-8" />

        <link rel="stylesheet" href="style.css" />
</head>

<body>

<!-- Menu de navigation du site -->
<ul class="navbar">
  <li><a href="accueil.php">Accueil</a>
  <li><a href="equipe.php">Equipes</a>
  <li><a href="ville.php">Par villes</a>
  <li><a href="joueurs.php">Joueurs</a>
  <li><a href="rencontre.php">Rencontres</a>
</ul>

<!-- Contenu principal -->
<h1>Infos premier league</h1>



<p>Rechercher la ville</p>

<form method="post" action="">

      <input type="text" id="recherche" name="recherche" placeholder="tapez le nom d'une ville" required>
      <input type = "submit" name="envoi" value = "Envoyer">

</form>

<?php
if(isset($_POST['envoi'])){
$ville = $_POST['recherche'];
$reponse = $bdd->query('SELECT * FROM club WHERE ville LIKE "'.$ville.'%"');


while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />';
	//echo $donnees['annee_creation'] . '<br />';
}
$reponse->closeCursor();
}
?>

<!-- Signer et dater la page, c'est une question de politesse! -->
<address>Fait le 5 avril 2004<br>
  par moi.</address>

</body>
</html>