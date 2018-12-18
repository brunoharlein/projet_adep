<?php
//Fonction de démarrage d'une session anonyme
function initializeAnonymousSession() {
  session_start();
  $_SESSION["user"] = "anonymous";
}


//Fonction de démarrage standard d'une session utilisateur
function initializeUserSession($user) {
    session_start();
    $_SESSION["user"] = $user;
}


//Fonction pour vérifier qu'un utilisateur est connecté
function isLogged() {
  if(isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
    return true;
  }
  return false;
}



?>
