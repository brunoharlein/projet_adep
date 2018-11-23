<?php
//We try to connect to the db with our id
//If it works we create a variable db which stocks the connexion
try {
<<<<<<< HEAD
  $db = new PDO("mysql:host=localhost;dbname=EmpruntsAdep", "ben", "test");
=======
  $db = new PDO("mysql:host=localhost;dbname=EmpruntsAdep", "phpmyadmin", "hanane");
>>>>>>> master
}
//Sinon on récupère une erreur
catch (Exception $e) {
  echo 'Exception reçue : ' .  $e->getMessage() . "\n";
}
 ?>
