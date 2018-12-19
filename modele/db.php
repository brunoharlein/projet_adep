<?php
// Connexion à la bdd
function getDataBase() {
  try {
    $db = new PDO('mysql:host=localhost;dbname=EmpruntsAdep;charset=utf8', 'phpmyadmin', 'hanane');
  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  return $db;
}
 ?>
