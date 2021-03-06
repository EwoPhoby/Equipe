<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=foot;charset=utf8', 'root', '');
    $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
<ul class="menu">
  <li><a href="index.php">Accueil</a>
  <li><a href="equipe.php">Equipes</a>
  <li><a href="ville.php">Par villes</a>
  <li><a href="joueurs.php">Joueurs</a>
  <li><a href="rencontre.php">Rencontres</a>
</ul>

<h1>Base de donnees Premier League</h1>
<div class="form1">
<!-- Contenu principal -->
<p>Infos sur 
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
    </select><input type = "submit" name="envoi" value = "Envoyer"><br><br>

  </form>
</p>

<?php
if(isset($_POST['envoi'])){
$club = $_POST['club'];  // Storing Selected Value In Variable
//$club2 = $_POST['club2'];  // Storing Selected Value In Variable
$reponse = $bdd->query("SELECT * FROM club WHERE id = '$club' ");
$donnees = $reponse->fetch();
$reponse2 = $bdd->query("SELECT * FROM stade WHERE id = '$club' ");
$donnees2 = $reponse2->fetch();
//$club = $_POST['club'];  // Storing Selected Value In Variable
echo $donnees['nom'] ." est un club de la ville de " .$donnees['ville']. " crée en ".$donnees['annee']." son stade est ".$donnees2['nom']. " et il a une capacite de ".$donnees2['capacite'] ." places";  // Displaying Selected Value
echo '<br />';


}
?>
<p>Ajouter equipe dans la base de données
<form action="ajout_equipe.php" method="post">
   
        <input type="text" id="nom" name="nom" placeholder="Nom equipe">
        <input type="text" id="ville" name="ville" placeholder="Ville">
        <input type="number" id="annee" name="annee"  maxlength="4"  placeholder="Annee creation" />
        <input type="submit" name="envoi2" value = "Envoyer">
    
</form>

</p>

<p>Supprimer equipe de la base de données
<form action = "suppression_equipe.php" method="post">
    <select id="club" name="id" required>
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
        <option value ="24"> supp</option>
    </select><input type = "submit" name="envoi3" value = "Envoyer"><br><br>

  </form>
</p>


<p>Modifier une equipe de la base de données
<form action = "modif_equipe.php" method="post">
    <select id="club" name="id" required>
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
        <option value ="24"> supp</option>
    </select><br><br>
    <input type="text" name="nname" placeholder="Nouveau nom">
    <input type="text" name="nville" placeholder="Nouvelle ville">
    <input type="number" name="nannee" placeholder="Nouvelle annee de creation">
    <input type = "submit" name="envoi4" value = "Envoyer">

  </form>
</p>

</div>

</body>
</html>