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


//$req = $bdd->prepare('INSERT INTO club (nom, ville, annee) VALUES(?, ?, ?)');
//$req->execute(array($_POST['nom'], $_POST['ville'], $_POST['annee'] ));

     
    $id=$_POST['id'];
    $req = $bdd->prepare('DELETE FROM club WHERE id=?');
	$req->execute(array($_POST['id']));
	//$link->query($requete)or die("Deleting Match Failed: ". $link->error);
      printf("equipe supprime. ");
      printf("<br>");
      //$link->close();
    
// Redirection du visiteur
header('Location: equipe.php');
?>
