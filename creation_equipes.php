<?php
ini_set('display_errors','off');
?>

<html> 
	<head>
		<link rel="stylesheet" href="style.css" type="text/css"> 
		<title>Creation d'equipes</title>
	</head>
	
	<body> 

		<ul class="navbar">
  			<li><a href="accueil.html">Accueil</a>
  			<li><a href="equipe.php">Equipes</a>
  			<li><a href="ville.php">Par villes</a>
  			<li><a href="joueurs.php">Joueurs</a>
  			<li><a href="rencontre.php">Rencontres</a>
		</ul>

		
		<?php
			include("bordereau.php");
		?>
		
		<!-- Formulaire pour creer l'equipe complete -->
		<form method="post" action="validation_creation_team.php">
			<input type="hidden" name="username" value="<?php print $_POST['username']?>">
			<input type="hidden" name="password" value="<?php print $_POST['password']?>">
			Creation de votre equipe : &nbsp;
			<input type="text" name="club" placeholder="Club" required> 
			&nbsp;
			<input type="text" name="ville" placeholder="Ville" required>
			&nbsp;
			<input type="number" name="id_club" placeholder="id_club" min=0 >&nbsp;
			

		
			
			<br><br><br><br>
			<input value="Abandon" type="reset">
			<input value="Validation" type="submit">
		</form>	
		<p><?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=foot;charset=utf8', 'root', '');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}


$reponse = $bdd->query('SELECT * FROM club ');


while ($donnees = $reponse->fetch())
{
	echo $donnees['id']." " ; 
	echo $donnees['nom']." "  ;
	echo $donnees['ville'] . '<br /><br />';
}
$reponse->closeCursor();?></p>
	</body> 

</html> 