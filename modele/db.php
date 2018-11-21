<?php
//On essaie de se connecter à la base de données avec nos identifiants
//Si cela marche on crée une variable db qui stocke la connexion
try {
<<<<<<< HEAD
  $db = new PDO("mysql:host=localhost;dbname=EmpruntsAdep", "root", "root");
=======
  $db = new PDO("mysql:host=localhost;dbname=EmpruntsAdep", "phpmyadmin", "");
>>>>>>> 02c32ac451299b5c7405b31d366d71ae1a7382e3
}
//Sinon on récupère une erreur
catch (Exception $e) {
  echo 'Exception reçue : ' .  $e->getMessage() . "\n";
}
<<<<<<< HEAD
=======


>>>>>>> 02c32ac451299b5c7405b31d366d71ae1a7382e3
 ?>
