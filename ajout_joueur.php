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

<?php


$req = $bdd->prepare('INSERT INTO joueur (nom,prenom,age,club_id,poste,nationalite) VALUES(?,?,?,?,?,?)');
$req->execute(array($_POST['name'], $_POST['prenom'], $_POST['age'], $_POST['id_club'], $_POST['poste'], $_POST['nation'] ));

// Redirection du visiteur
header('Location: joueurs.php');
?>
