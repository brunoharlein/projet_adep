<?php
//We try to connect to the db with our id
//If it works we create a variable db which stocks the connexion
try {
  $db = new PDO("mysql:host=localhost;dbname=EmpruntsAdep", "ben", "test");
}
//Sinon on récupère une erreur
catch (Exception $e) {
  echo 'Exception reçue : ' .  $e->getMessage() . "\n";
}
 ?>
