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


$req = $bdd->prepare('UPDATE club SET nom = ?,  ville = ?,  annee = ? WHERE id = ?');
$req->execute(array($_POST['nname'], $_POST['nville'], $_POST['nannee'],$_POST['id'] ));

// Redirection du visiteur
header('Location: equipe.php');
?>
