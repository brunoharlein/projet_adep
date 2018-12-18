<?php
//Fonction de démarrage d'une session anonyme
function initializeAnonymousSession() {
  session_start();
  $_SESSION["emprunteur"] = "anonymous";
}


//Fonction de démarrage standard d'une session utilisateur
function initializeUserSession($user) {
    session_start();
    $_SESSION["emprunteur"] = $user;
}

//Fonction de déconnexion
function logout() {
  session_start();
  session_unset();
  session_destroy();
  header("Location: index.php?success=Vous avez été déconnecté, à bientôt :)");
}

//Fonction pour vérifier qu'un utilisateur est connecté
function isLogged() {
  if(isset($_SESSION["emprunteur"]) && !empty($_SESSION["emprunteur"])) {
    return true;
  }
  return false;
}

?>
