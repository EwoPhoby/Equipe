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


$req = $bdd->prepare('INSERT INTO rencontre (id,date_match,id_stade,equipe1_id,equipe2_id,score1,score2) VALUES(?,?, ?, ?,?,?,?)');
$req->execute(array($_POST['id'],$_POST['date'], $_POST['equipe1'], $_POST['equipe1'],$_POST['equipe2'],$_POST['score1'],$_POST['score2'] ));

// Redirection du visiteur
header('Location: rencontre.php');
?>
