<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=foot;charset=utf8', 'root', '');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}


$reponse = $bdd->query('SELECT nom FROM club');


while ($donnees = $reponse->fetch())

{

    echo $donnees['nom'] . '<br />';

}


$reponse->closeCursor();


?>