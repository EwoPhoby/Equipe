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


$req = $bdd->prepare('INSERT INTO club (nom, ville, annee) VALUES(?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['ville'], $_POST['annee'] ));

// Redirection du visiteur
header('Location: equipe.php');
?>
