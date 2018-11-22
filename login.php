<?php
//We load the files we need
require "modele/db.php";
require "modele/userManager.php";
require "service/sessionManager.php";
require "service/formChecker.php";

//We check if the form has been filled
if(!empty($_POST)) {
  //We clean form entries
  $_POST = clearForm($_POST);
  //We retrieve user stocked on the website
  $user = getUser($_POST["email"], $db);
  //We check if db has found user
  if(!empty($user) && $_POST["password"] === $user["password"]) {
    initializeUserSession($user);
    header("Location: emprunter.php");
    //We put exit to stop execution of the script, otherwise redirection won't have time to execute
    exit;
  }
  else {
    header("Location: index.php?message=7");
    exit;
  }

// //On vérifie si la db a trouvé un utilisateur
// if(!empty($user) && password_verify($_POST["user_password"], $user["password"])) {
//   initializeUserSession($user);
//   header("Location: products.php");
//   //On met un exit pour arrêter l'execution du script, autrement la redirection n'aura pas le temps de se faire
//   exit;
// }
// else {
//   header("Location: index.php?message=7");
//   exit;
// }

}
//If the form is not filled we redirect user on login page with error message
else {
  header("Location: index.php?message=0");
  exit;
}

 ?>