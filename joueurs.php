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
<h1>Chercher joueurs par</h1>
<p>nationalité
  <form action = "" method="post">
    <select id="nationalite" name="nationalite" required>
        <option value ="francaise" selected=""> Francaise</option>
        <option value ="anglaise"> Anglaise</option>
        <option value ="bresilienne"> Bresilienne</option>
        <option value ="espagnole"> Espagnole</option>
        <option value ="allemande"> Allemande</option>
        <option value ="galloise"> Galloise</option>
        <option value ="portugaise"> Portugaise</option>
        <option value ="argentine"> Argentine</option>
        <option value ="belge"> Belge</option>
        <option value ="suisse"> Suisse</option>
        <option value ="autre"> Autre</option>
    </select><input type = "submit" name="envoi" value = "Envoyer"><br><br>

  </form>
</p>

<?php
if(isset($_POST['envoi'])){
$nationalite = $_POST['nationalite'];  // Storing Selected Value In Variable
echo "Voici les joueurs de nationalité: " .$nationalite;  // Displaying Selected Value
echo '<br />';

$reponse = $bdd->query('SELECT * FROM joueur WHERE nationalite = "' . $nationalite . '"');


while ($donnees = $reponse->fetch())
{
  echo $donnees['nom'] ;
  echo " " .$donnees['prenom'] . '<br />';
}
$reponse->closeCursor();
}
?>

<p>equipe
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
    </select><input type = "submit" name="envoi2" value = "Envoyer"><br><br>

  </form>
</p>

<?php
if(isset($_POST['envoi2'])){
$club = $_POST['club'];  // Storing Selected Value In Variable
$equipe = $bdd->query('SELECT nom FROM club WHERE id = "' . $club . '"');
echo "Voici les joueurs de l'equipe sélectionée " /*.$club*/;  // Displaying Selected Value
echo '<br />';

$reponse2 = $bdd->query('SELECT * FROM joueur WHERE club_id = "' . $club . '"');


while ($donnees = $reponse2->fetch())
{
  echo $donnees['nom'] ;
  echo " " .$donnees['prenom'] . '<br />';
}
$reponse2->closeCursor();
}
?>





&nbsp;
<!-- Signer et dater la page, c'est une question de politesse! -->
<address>Fait le 5 avril 2004<br>
  par moi.</address>

</body>
</html>