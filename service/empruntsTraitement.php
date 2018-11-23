<?php
  require "../modele/db.php";// pour connecter a la db
  require "../modele/empruntsManager.php"; //pour les fonctions qui servent à l'emprunt
  $id_materiel = $_GET['id'];
  $id_emprunteur = $_SESSION['id'];
  $etat = $_GET['etat'];
  session_start;

  if (isset($_GET['id']) && (!empty($_GET['id'])) {
    if (isset($_GET['etat']) && (!empty($_GET[etat]))){
      updateEtatMateriel ($db, $id_materiel, $etat);
    }
  }
  


?>
