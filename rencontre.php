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
?>
<html>
<head>
  <title>Rencontres</title>
   <meta charset="utf-8" />

        <link rel="stylesheet" href="style.css" />
</head>

<body>

<!-- Menu de navigation du site -->
<ul class="menu">
  <li><a href="index.php.php">Accueil</a>
  <li><a href="equipe.php">Equipes</a>
  <li><a href="ville.php">Par villes</a>
  <li><a href="joueurs.php">Joueurs</a>
  <li><a href="rencontre.php">Rencontres</a>
</ul>

<!-- Contenu principal -->
<h1>Base de donnees Premier League</h1>

<div class="der">

<p>Choisissez le resultat que vous souhaitez voir</p>

<form action = "" method="post">
    <select id="club" name="club" required>
        <option value ="1" selected=""> Manchester City</option>
        <option value ="2"> Manchester United</option>
        <option value ="3"> Tottenham Hotspur</option>
        <option value ="4"> Liverpool FC</option>
        <option value ="5"> Chelsea FC</option>
        <option value ="6"> Arsenal FC</option>
        <option value ="7"> Burnley FC</option>
        <option value ="8"> Everton</option>
        <option value ="9"> Leicester City FC</option>
        <option value ="10"> Newcastle United</option>
        <option value ="11"> Crystal Palace FC</option>
        <option value ="12"> AFC Bournmouth</option>
        <option value ="13"> West Ham United</option>
        <option value ="14"> Watford FC</option>
        <option value ="15"> Brighton & Hove Albion</option>
        <option value ="16"> Huddersfield Town</option>
        <option value ="17"> Southampton FC</option>
        <option value ="18"> Wolverhampton Wanderers</option>
        <option value ="19"> Cardiff City FC</option>
        <option value ="20"> Fulham FC</option>
    </select>

  
  
    <select id="club2" name="club2" required>
        <option value ="1" selected=""> Manchester City</option>
        <option value ="2"> Manchester United</option>
        <option value ="3"> Tottenham Hotspur</option>
        <option value ="4"> Liverpool FC</option>
        <option value ="5"> Chelsea FC</option>
        <option value ="6"> Arsenal FC</option>
        <option value ="7"> Burnley FC</option>
        <option value ="8"> Everton</option>
        <option value ="9"> Leicester City FC</option>
        <option value ="10"> Newcastle United</option>
        <option value ="11"> Crystal Palace FC</option>
        <option value ="12"> AFC Bournmouth</option>
        <option value ="13"> West Ham United</option>
        <option value ="14"> Watford FC</option>
        <option value ="15"> Brighton & Hove Albion</option>
        <option value ="16"> Huddersfield Town</option>
        <option value ="17"> Southampton FC</option>
        <option value ="18"> Wolverhampton Wanderers</option>
        <option value ="19"> Cardiff City FC</option>
        <option value ="20"> Fulham FC</option>
    </select><input type = "submit" name="envoi" value = "Envoyer"><br><br>

  </form>



<?php
if(isset($_POST['envoi'])){
$club1 = $_POST['club'];  // Storing Selected Value In Variable
$club2 = $_POST['club2'];  // Storing Selected Value In Variable
// Displaying Selected Value
echo '<br />';

$reponse = $bdd->query("SELECT * FROM rencontre WHERE equipe1_id = '$club1' AND equipe2_id ='$club2'");
$reponse2 = $bdd->query("SELECT * FROM club WHERE id = '$club1' ");
$reponse3 = $bdd->query("SELECT * FROM club WHERE id = '$club2' ");


$donnees = $reponse->fetch();
$nom = $reponse2->fetch();
$nom2 = $reponse3->fetch();

 ?>
 <p><?php 
	echo $donnees['date_match']. "<br/> " .$nom['nom'] . " " .$donnees['score1']."-".$donnees['score2']. "  ".$nom2['nom'] ."<br/><br/> ";
$reponse->closeCursor();
}?>
</p>

<p>Ajouter rencontre
<form action = "ajout_rencontre.php" method="post">
    <select id="club" name="equipe1" required>
        <option value ="1" selected=""> Manchester City</option>
        <option value ="2"> Manchester United</option>
        <option value ="3"> Tottenham Hotspur</option>
        <option value ="4"> Liverpool FC</option>
        <option value ="5"> Chelsea FC</option>
        <option value ="6"> Arsenal FC</option>
        <option value ="7"> Burnley FC</option>
        <option value ="8"> Everton</option>
        <option value ="9"> Leicester City FC</option>
        <option value ="10"> Newcastle United</option>
        <option value ="11"> Crystal Palace FC</option>
        <option value ="12"> AFC Bournmouth</option>
        <option value ="13"> West Ham United</option>
        <option value ="14"> Watford FC</option>
        <option value ="15"> Brighton & Hove Albion</option>
        <option value ="16"> Huddersfield Town</option>
        <option value ="17"> Southampton FC</option>
        <option value ="18"> Wolverhampton Wanderers</option>
        <option value ="19"> Cardiff City FC</option>
        <option value ="20"> Fulham FC</option>
    </select>

  
  
    <select id="club2" name="equipe2" required>
        <option value ="1" selected=""> Manchester City</option>
        <option value ="2"> Manchester United</option>
        <option value ="3"> Tottenham Hotspur</option>
        <option value ="4"> Liverpool FC</option>
        <option value ="5"> Chelsea FC</option>
        <option value ="6"> Arsenal FC</option>
        <option value ="7"> Burnley FC</option>
        <option value ="8"> Everton</option>
        <option value ="9"> Leicester City FC</option>
        <option value ="10"> Newcastle United</option>
        <option value ="11"> Crystal Palace FC</option>
        <option value ="12"> AFC Bournmouth</option>
        <option value ="13"> West Ham United</option>
        <option value ="14"> Watford FC</option>
        <option value ="15"> Brighton & Hove Albion</option>
        <option value ="16"> Huddersfield Town</option>
        <option value ="17"> Southampton FC</option>
        <option value ="18"> Wolverhampton Wanderers</option>
        <option value ="19"> Cardiff City FC</option>
        <option value ="20"> Fulham FC</option>
    </select><br><br>

<input type="number" name="score1" placeholder="score 1" required>
<input type="number" name="score2" placeholder="score 2" required>
<input type="text" name="date" placeholder="date jj/mm/aaaa" required>
<input type="number" name="id" placeholder="identifiant" required>

<input type = "submit" name="envoi" value = "Envoyer"><br><br>
</form>
</p>




</div>

</body>
</html>