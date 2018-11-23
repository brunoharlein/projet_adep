<?php
session_start();
  require "../modele/db.php";// pour connecter a la db
  require "../modele/empruntsManager.php"; //pour les fonctions qui servent à l'emprunt
  $id_materiel = $_GET['id'];
  $id_emprunteur = $_SESSION['emprunteur']['id'];
  var_dump($id_emp);

  if ((isset($_GET['id'])) && (!empty($_GET['id']))) {

      updateEtatMateriel($db, $id_materiel);

    }



    




?>
