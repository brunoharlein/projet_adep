<?php
//We try to connect to the db with our id
//If it works we create a variable db which stocks the connexion
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
