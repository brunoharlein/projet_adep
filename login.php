<?php
//On charge les fichiers dont on a besoin
require "modele/db.php";
require "modele/userManager.php";
require "service/sessionManager.php";
require "service/formChecker.php";

//On vérifie si le formulaire a été rempli
if(!empty($_POST)) {
  //On nettoie les entrées du formulaire
  $_POST = clearForm($_POST);
  //On récupère l'utilisateur stocké sur le site
  $user = getUser($_POST["email"], $db);
  //On vérifie si la db a trouvé un utilisateur
  if(!empty($user) && $_POST["password"] === $user["password"]) {
    initializeUserSession($user);
    header("Location: emprunter.php");
    //On met un exit pour arrêter l'execution du script, autrement la redirection n'aura pas le temps de se faire
    exit;
    
  }
  else {
    header("Location: index.php?message=Echec de connexion, veuillez vérifier votre email et mdp");
    exit;
  }
}
//Si le formulaire n'est pas rempli on renvoie l'utilisateur sur la page de login avce un message
else {
  header("Location: index.php?message=0");
  exit;
}

 ?>