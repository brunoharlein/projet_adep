<?php

  require "model/empruntsManager.php";
  require "model/materielsManager.php"; //pour les fonctions qui servent à l'emprunt
  //var_dump(implode(',',getdate()));

function emprunter() {
  $id_emprunteur = intval($_SESSION['user']['id']);
  if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
      $id_materiel = intval($_GET['id']);
      updateEtatMateriel( $id_materiel);
      addEmprunt($id_materiel, $id_emprunteur);
      //var_dump($id_emprunteur, $id_materiel);
      //var_dump(addEmprunt($id_materiel, $id_emprunteur));
      require "view/empruntsView.php";
      //header('Location:../emprunts.php?msg=1');
      }
}

function allMateriels() {
  if(getMateriels()) {
    $materiels = getMateriels();
  }
  else {
    $materiels = NULL;
  }
  require "view/empruntsView.php";
}
?>
