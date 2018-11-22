<?php

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


?>