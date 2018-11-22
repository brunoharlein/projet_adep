<?php
  require "../modele/db.php";// pour connecter a la db
  require "../modele/empruntsManager.php"; //pour les fonctions qui servent à l'emprunt
  $id_materiel = $_GET['id'];
  $etat =$_GET['etat'];
  updateEtatMateriel ($db, $id_materiel, $etat) ;


?>
