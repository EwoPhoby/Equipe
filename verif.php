<?php

$bdd = new PDO('mysql:host=localhost;dbname=foot', 'root', '');


  $pseudo = htmlspecialchars($_POST['pseudo']);
   $mdp = sha1($_POST['mdp']);
/*   
      $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($pseudo, $mdp));
      $userexist = $requser->rowCount();
     if($userexist==1){
         header("Location: accueil.php");
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
    
   
    if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
}

*/








$req = $bdd->prepare('SELECT id, mdp FROM utilisateur WHERE pseudo = ?');

$req->execute(array($pseudo));
$resultat = $req->fetch();


// Comparaison du pass envoyé via le formulaire avec la base

$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);
if (!$resultat)
{

    echo 'Mauvais identifiant ou mot de passe !';

}

else

{

    if ($isPasswordCorrect) {

        session_start();

        $_SESSION['id'] = $resultat['id'];

        $_SESSION['pseudo'] = $pseudo;

        echo 'Vous êtes connecté !';

    }

    else {

        echo 'Mauvais identifiant ou mot de passe !';

    }

}
?>