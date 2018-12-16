<html>
<head>
  <title>Ma première page avec du style</title>
   <meta charset="utf-8" />

        <link rel="stylesheet" href="style.css" />
</head>

<body>

<!-- Menu de navigation du site -->
<ul class="navbar">
  <li><a href="accueil.html">Accueil</a>
  <li><a href="equipe.php">Equipes</a>
  <li><a href="ville.php">Par villes</a>
  <li><a href="joueurs.php">Joueurs</a>
  <li><a href="rencontre.php">Rencontres</a>
</ul>

<!-- Contenu principal -->
<h1>Infos premier league</h1>



<p>joueurs</p>

<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=foot;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}


$reponse = $bdd->query('SELECT * FROM rencontre AS R INNER JOIN club AS C WHERE equipe2_id = "6"');


while ($donnees = $reponse->fetch())
{
	echo $donnees['score1'] . '<br />';
	
}
$reponse->closeCursor();
?>

<!-- Signer et dater la page, c'est une question de politesse! -->
<address>Fait le 5 avriljb 2004<br>
  par moi.</address>

</body>
</html>